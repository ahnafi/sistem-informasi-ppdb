<?php

namespace Database\Seeders;

use App\Models\AcademicCalendar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicCalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicCalendar::create([
            "title" => "Kalender Akademik Tahun 2025/2026",
            "agenda" => [
                [
                    "name" => "Awal Semester Ganjil",
                    "calendar" => [
                        "15/07/2025" => "Hari Pertama Masuk Sekolah",
                        "17/08/2025" => "Upacara HUT RI",
                        "20/08/2025" => "Masa Pengenalan Lingkungan Sekolah",
                        "25/08/2025" => "Pembagian Jadwal Pelajaran",
                        "1/09/2025" => "Penilaian Tengah Semester",
                        "10/09/2025" => "Kegiatan Ekstrakurikuler Dimulai",
                        "21/09/2025" => "Rapat Orang Tua/Wali",
                        "1/10/2025" => "Peringatan Hari Kesaktian Pancasila",
                        "5/10/2025" => "Hari Guru Nasional",
                        "20/10/2025" => "Kegiatan Pramuka",
                        "1/11/2025" => "Simulasi Ujian Akhir Semester"
                    ]
                ],
                [
                    "name" => "Akhir Semester Ganjil",
                    "calendar" => [
                        "10/12/2025" => "Ujian Akhir Semester",
                        "15/12/2025" => "Penilaian Akhir Semester",
                        "18/12/2025" => "Rapat Kenaikan Kelas",
                        "20/12/2025" => "Pembagian Rapor",
                        "21/12/2025 - 3/01/2026" => "Libur Semester",
                        "25/12/2025" => "Natal Bersama",
                        "31/12/2025" => "Refleksi Akhir Tahun"
                    ]
                ],
                [
                    "name" => "Awal Semester Genap",
                    "calendar" => [
                        "4/01/2026" => "Masuk Semester Genap",
                        "10/01/2026" => "Pembagian Jadwal Baru",
                        "20/01/2026" => "Kegiatan OSIS",
                        "14/02/2026" => "Class Meeting",
                        "1/03/2026" => "Try Out Ujian",
                        "10/03/2026" => "Peringatan Isra Miraj",
                        "20/03/2026" => "Kegiatan Bakti Sosial",
                        "1/04/2026" => "Penilaian Tengah Semester Genap",
                        "21/04/2026" => "Peringatan Hari Kartini"
                    ]
                ],
                [
                    "name" => "Akhir Semester Genap",
                    "calendar" => [
                        "10/06/2026" => "Ujian Akhir Semester Genap",
                        "15/06/2026" => "Penilaian Akhir Semester Genap",
                        "18/06/2026" => "Rapat Kenaikan Kelas Genap",
                        "20/06/2026" => "Pembagian Rapor Genap",
                        "21/06/2026 - 10/07/2026" => "Libur Akhir Tahun Pelajaran",
                        "1/07/2026" => "Penerimaan Siswa Baru",
                        "10/07/2026" => "Masa Orientasi Siswa Baru"
                    ]
                ],
                [
                    "name" => "Kegiatan Lain",
                    "calendar" => [
                        "Mei 2026" => "Kegiatan Pramuka",
                        "Juni 2026" => "Penerimaan Siswa Baru",
                        "Agustus 2025" => "Lomba 17 Agustus",
                        "September 2025" => "Kegiatan Bulan Bahasa",
                        "Oktober 2025" => "Pentas Seni",
                        "November 2025" => "Kunjungan Industri",
                        "Desember 2025" => "Bakti Sosial Akhir Tahun"
                    ]
                ]
            ]
        ]);
    }
}
