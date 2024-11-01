<?php 
namespace App\Http\Controllers;
use App\Models\JadwalMk;


class MenuController extends Controller
{
    // Controller Mahasiswa
    public function jadwalKuliah()
    {
        return view('mahasiswa.jadwalKuliah');
    }
    public function herReg()
    {
        return view('mahasiswa.herReg');
    }
    public function khs()
    {
        return view('mahasiswa.khs');
    }
    public function irs()
    {
        return view('mahasiswa.irs');
    }
    // End Controller Mahasiswa

    // Controlle Dekan
    public function pengajuanJadwalDekan()
    {
        return view('dekan.listPengajuanJadwal');
    }

    public function pengajuanRuangKuliahDekan()
    {
        return view('dekan.listPengajuanRuang');
    }

    public function detailListPengajuanJadwal()
    {
        // Ambil semua data jadwal
        $jadwalList = JadwalMk::all();

        // Kirim data ke view
        return view('dekan.detailListPengajuanJadwal', compact('jadwalList'));
    }
    // End Controller Dekan

    // Controller Kaprodi
    public function pengajuanJadwalKaprodi(){
        return view('kaprodi.listPengajuan');
    }

    // Controller Dosen Wali
    public function pengajuanIrsMahasiswa()
    {
        return view('dosenwali.listPengajuanIRS');
    }
    
    // End Controller Dosen Wali

    //Controller mahasiswa perwalian 
    public function mahasiswaPerwalian()
    {
        return view('dosenwali.listMahasiswaPerwalian');
    }
    // End Controller mahasiswa perwwalian

    // Controller Akademik
    public function listRuangKuliah()
    {
        return view('akademik.listRuangKuliah');
    }

    public function inputRuangKuliah()
    {
        return view('akademik.inputRuangKuliah');
    }
    // End Controller Dosen Wali
    
}
?>