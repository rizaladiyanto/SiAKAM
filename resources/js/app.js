import "./bootstrap";
import "./sweetalertHelper";
import {
    filterTable,
    approveAll as approveAllJadwal,
    approveRejectJadwal,
    calculateJamSelesai,
    showErrors,
    updateOptions,
    setupOptionListeners,
} from "./jadwal";
import {
    filterRuangan,
    approveAll as approveAllRuangan,
    approveReject,
    changeStatus,
} from "./ruangan";

import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

// Expose jadwal functions globally so they can be accessed in the HTML
window.filterTable = filterTable;
window.approveAllJadwal = approveAllJadwal;
window.approveRejectJadwal = approveRejectJadwal;
window.calculateJamSelesai = calculateJamSelesai;
window.showErrors = showErrors;
window.updateOptions = updateOptions;
window.setupOptionListeners = setupOptionListeners;

// Expose ruangan functions globally
window.filterRuangan = filterRuangan;
window.approveAllRuangan = approveAllRuangan;
window.approveReject = approveReject;
window.changeStatus = changeStatus;

document.addEventListener("DOMContentLoaded", function () {
    // Memulai event listeners
    setupOptionListeners();

    const jurusanSelect = document.getElementById("jurusanFilter");
    if (jurusanSelect) {
        jurusanSelect.addEventListener("change", filterRuangan);
    }
});

document
    .getElementById("matakuliah")
    .addEventListener("change", async function () {
        const selectedMK = this.value;
        console.log("Selected MK:", selectedMK);

        try {
            const response = await fetch(
                `/get-matakuliah-detail/${selectedMK}`,
                {
                    method: "GET",
                    headers: { "Content-Type": "application/json" },
                }
            );
            const data = await response.json();
            console.log("Fetched course data:", data);
            displaySelectedCourse(data);
        } catch (error) {
            console.error("Error fetching course details:", error);
        }
    });

function displaySelectedCourse(data) {
    const courseList = document.getElementById("courseList");
    if (!courseList) {
        console.error("courseList element not found!");
        return;
    }

    courseList.innerHTML = ""; // Optionally clear existing entries if needed

    data.forEach((course, index) => {
        courseList.appendChild(createCourseRow(course, index));
    });
}

function createCourseRow(course, index) {
    const row = document.createElement("tr");

    row.innerHTML = `
        <td>${index + 1}</td>
        <td>${course.kode_mk}</td>
        <td>${course.nama}</td>
        <td>${course.semester}</td>
        <td>${course.sks}</td>
        <td>${course.sifat}</td>
        <td>${course.kelas}</td>
        <td>${course.ruangan}</td>
        <td>${course.hari}</td>
        <td>${course.jam_mulai} - ${course.jam_selesai}</td>
    `;
    row.appendChild(createActionCell(course, row)); // Pass 'row' to the function
    return row;
}

function createActionCell(course, row) {
    // Pass 'row' as a parameter
    const actionCell = document.createElement("td");

    const isSelected = course.is_selected;
    const pilihButton = createButton(
        isSelected ? "Dipilih" : "Pilih",
        isSelected ? "bg-gray-500" : "bg-[#2EC060]",
        isSelected
            ? null
            : async (event) => {
                  event.preventDefault();
                  const success = await postCourse(course);
                  if (success) {
                      event.target.textContent = "Dipilih";
                      event.target.classList.remove("bg-[#2EC060]");
                      event.target.classList.add("bg-gray-500");
                      event.target.disabled = true;
                  }
              },
        isSelected
    );

    actionCell.appendChild(pilihButton);

    const batalButton = createButton("Batal", "bg-red-600", () => {
        deleteCourse(course.kode_mk, course.nama, row); // Pass 'row' to the delete function
    });
    actionCell.appendChild(batalButton);
    return actionCell;
}

function createButton(text, bgColor, eventHandler, isDisabled = false) {
    const button = document.createElement("button");
    button.textContent = text;
    button.className = `w-16 h-8 text-center pt-px rounded-lg mt-4 ml-2 ${bgColor} text-white`;
    if (isDisabled) {
        button.disabled = true;
    } else {
        button.addEventListener("click", eventHandler);
    }
    return button;
}

async function postCourse(course) {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    try {
        const response = await fetch("/mahasiswa/irs/store", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            body: JSON.stringify({
                semester: course.semester,
                kode_mk: course.kode_mk,
                nama_mk: course.nama,
                sks: course.sks,
                kelas: course.kelas,
            }),
        });

        const data = await response.json();

        // Jika respons tidak berhasil, lempar pesan error
        if (!response.ok)
            throw new Error(data.message || "Failed to add course");

        // Tampilkan pesan sukses tanpa membuka JSON
        alert("Course selected successfully");

        // Refresh halaman saat sukses tanpa membuka JSON di halaman browser
        location.reload(); // Refresh halaman untuk memperbarui tampilan setelah berhasil

        return true; // Indicate success
    } catch (error) {
        console.error("Error adding course:", error);
        // alert(error.message); // Tampilkan pesan error
        return true; // Indicate failure
    }
}

async function deleteCourse(event, button) {
    const useAjax = button.getAttribute("data-ajax") === "true"; // Deteksi apakah menggunakan AJAX

    if (useAjax) {
        event.preventDefault(); // Mencegah form dikirim secara normal

        // Ambil data dari form
        const form = button.closest("form");
        const kode_mk = form.querySelector("input[name='kode_mk']").value;
        const nama_mhs = form.querySelector("input[name='nama_mhs']").value;
        const kelas = form.querySelector("input[name='kelas']").value;

        console.log("Parameters sent to server:", { kode_mk, nama_mhs, kelas });

        try {
            const response = await fetch("/mahasiswa/irs/delete", {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: JSON.stringify({ kode_mk, nama_mhs, kelas }),
            });

            if (!response.ok) {
                throw new Error(`Server error: ${response.status}`);
            }

            const data = await response.json();
            if (data.success) {
                console.log("Course deleted successfully:", data.message);
                button.closest("tr").remove(); // Hapus baris dari tabel jika berhasil
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error("Failed to delete course:", error);
            Swal.fire(
                "Error!",
                "Gagal menghapus mata kuliah. Coba lagi.",
                "error"
            );
        }
    }
    // Jika data-ajax !== "true", biarkan form dikirim seperti biasa
}
