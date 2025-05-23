<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhsMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khs')->insert([
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6301', 'nama_mk' => 'Struktur Data', 'sks' => 4,'nilai_angka' => 83, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6302', 'nama_mk' => 'Sistem Operasi', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6303', 'nama_mk' => 'Basis Data', 'sks' => 4,'nilai_angka' => 78, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6304', 'nama_mk' => 'Metode Numerik', 'sks' => 3,'nilai_angka' => 75, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6305', 'nama_mk' => 'Interaksi Manusia dan Komputer', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6306', 'nama_mk' => 'Statistika', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6404', 'nama_mk' => 'Grafika dan Komputasi Visual', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6401', 'nama_mk' => 'Pemrograman Berbasis Objek', 'sks' => 3,'nilai_angka' => 85, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6406', 'nama_mk' => 'Sistem Cerdas', 'sks' => 3,'nilai_angka' => 89, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6403', 'nama_mk' => 'Manajemen Basis Data', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6405', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140118','nama' => 'Arya Ajisadda Haryanto', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6601', 'nama_mk' => 'Analisis dan Strategi Algoritma', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 1, 'kode_mk' => 'PAIK6101', 'nama_mk' => 'Matematika I', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 1, 'kode_mk' => 'PAIK6102', 'nama_mk' => 'Dasar Pemrograman', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 1, 'kode_mk' => 'PAIK6103', 'nama_mk' => 'Dasar Sistem', 'sks' => 3,'nilai_angka' => 68, 'nilai_huruf' => 'C'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 1, 'kode_mk' => 'PAIK6104', 'nama_mk' => 'Logika Informatika', 'sks' => 2,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 1, 'kode_mk' => 'PAIK6105', 'nama_mk' => 'Struktur Diskrit', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6201', 'nama_mk' => 'Matematika II', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6202', 'nama_mk' => 'Algoritma dan Pemrograman', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6203', 'nama_mk' => 'Organisasi dan Arsitektur Komputer', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6204', 'nama_mk' => 'Aljabar Linear', 'sks' => 3,'nilai_angka' => 69, 'nilai_huruf' => 'C'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6205', 'nama_mk' => 'Jaringan Komputer', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6603', 'nama_mk' => 'Masyarakat dan Etika Profesi', 'sks' => 2,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 2, 'kode_mk' => 'PAIK6506', 'nama_mk' => 'Keamanan dan Jaminan Informasi', 'sks' => 3,'nilai_angka' => 65, 'nilai_huruf' => 'C'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6303', 'nama_mk' => 'Basis Data', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'C'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6301', 'nama_mk' => 'Struktur Data', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6302', 'nama_mk' => 'Sistem Operasi', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6304', 'nama_mk' => 'Metode Numerik', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6305', 'nama_mk' => 'Interaksi Manusia dan Komputer', 'sks' => 2,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6306', 'nama_mk' => 'Statistika', 'sks' => 3,'nilai_angka' => 65, 'nilai_huruf' => 'C'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6506', 'nama_mk' => 'Keamanan dan Jaminan Informasi', 'sks' => 3,'nilai_angka' => 78, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6404', 'nama_mk' => 'Grafika dan Komputasi Visual', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6401', 'nama_mk' => 'Pemrograman Berbasis Objek', 'sks' => 3,'nilai_angka' => 85, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6406', 'nama_mk' => 'Sistem Cerdas', 'sks' => 3,'nilai_angka' => 75, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6403', 'nama_mk' => 'Manajemen Basis Data', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6405', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140115','nama' => 'Muhammad Fikri Firdaus', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6601', 'nama_mk' => 'Analisis dan Strategi Algoritma', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6301', 'nama_mk' => 'Struktur Data', 'sks' => 4,'nilai_angka' => 83, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6302', 'nama_mk' => 'Sistem Operasi', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6303', 'nama_mk' => 'Basis Data', 'sks' => 4,'nilai_angka' => 78, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6304', 'nama_mk' => 'Metode Numerik', 'sks' => 3,'nilai_angka' => 75, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6305', 'nama_mk' => 'Interaksi Manusia dan Komputer', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6306', 'nama_mk' => 'Statistika', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6404', 'nama_mk' => 'Grafika dan Komputasi Visual', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6401', 'nama_mk' => 'Pemrograman Berbasis Objek', 'sks' => 3,'nilai_angka' => 85, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6406', 'nama_mk' => 'Sistem Cerdas', 'sks' => 3,'nilai_angka' => 89, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6403', 'nama_mk' => 'Manajemen Basis Data', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6405', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122140156','nama' => 'Rizal Adiyanto Nugroho', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6601', 'nama_mk' => 'Analisis dan Strategi Algoritma', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6301', 'nama_mk' => 'Struktur Data', 'sks' => 4,'nilai_angka' => 83, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6302', 'nama_mk' => 'Sistem Operasi', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6303', 'nama_mk' => 'Basis Data', 'sks' => 4,'nilai_angka' => 78, 'nilai_huruf' => 'B'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6304', 'nama_mk' => 'Metode Numerik', 'sks' => 3,'nilai_angka' => 75, 'nilai_huruf' => 'B'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6305', 'nama_mk' => 'Interaksi Manusia dan Komputer', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 3, 'kode_mk' => 'PAIK6306', 'nama_mk' => 'Statistika', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6404', 'nama_mk' => 'Grafika dan Komputasi Visual', 'sks' => 3,'nilai_angka' => 90, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6401', 'nama_mk' => 'Pemrograman Berbasis Objek', 'sks' => 3,'nilai_angka' => 85, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6406', 'nama_mk' => 'Sistem Cerdas', 'sks' => 3,'nilai_angka' => 89, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6403', 'nama_mk' => 'Manajemen Basis Data', 'sks' => 3,'nilai_angka' => 80, 'nilai_huruf' => 'B'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6405', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3,'nilai_angka' => 92, 'nilai_huruf' => 'A'],
            ['nim' => '24060122120022','nama' => 'Muhammad Daffa Aradhana Adriansyah', 'program_studi' => 'S1 Informatika', 'semester' => 4, 'kode_mk' => 'PAIK6601', 'nama_mk' => 'Analisis dan Strategi Algoritma', 'sks' => 3,'nilai_angka' => 70, 'nilai_huruf' => 'B'],
        ]);
    }
}
