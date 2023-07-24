<?php

namespace App\Http\Controllers\User\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{
    public function index()
    {
        $question = array(
            (object) [
                'code' => 'a1',
                'title' => '(Bagi yang menjawab tidak)',
                'question' => 'Apakah Anda lulus tepat waktu?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => array(
                    (object) [
                        'code' => 'aa1',
                        'question' => 'Alasan keuangan',
                        'type' => 'choice',
                        'value' => '',
                        'answers' => array(
                            (object) [
                                'name' => '(1) Sangat besar',
                                'value' => 'Sangat besar'
                            ],
                            (object) [
                                'name' => '(2) Besar',
                                'value' => 'Besar'
                            ],
                            (object) [
                                'name' => '(3) Cukup',
                                'value' => 'Cukup'
                            ],
                            (object) [
                                'name' => '(4) Kurang',
                                'value' => 'Kurang'
                            ],
                            (object) [
                                'name' => '(5) Tidak sama sekali',
                                'value' => 'Tidak sama sekali'
                            ],
                        )
                    ],
                    (object) [
                        'code' => 'aa2',
                        'question' => 'Tidak lulus ujian (banyak mengulang)]',
                        'type' => 'choice',
                        'value' => '',
                        'answers' => array(
                            (object) [
                                'name' => '(1) Sangat besar',
                                'value' => 'Sangat besar'
                            ],
                            (object) [
                                'name' => '(2) Besar',
                                'value' => 'Besar'
                            ],
                            (object) [
                                'name' => '(3) Cukup',
                                'value' => 'Cukup'
                            ],
                            (object) [
                                'name' => '(4) Kurang',
                                'value' => 'Kurang'
                            ],
                            (object) [
                                'name' => '(5) Tidak sama sekali',
                                'value' => 'Tidak sama sekali'
                            ],
                        )
                    ],
                    (object) [
                        'code' => 'aa3',
                        'question' => 'Tidak lulus ujian (Penulisan skripsi lambat)?',
                        'type' => 'choice',
                        'value' => '',
                        'answers' => array(
                            (object) [
                                'name' => '(1) Sangat besar',
                                'value' => 'Sangat besar'
                            ],
                            (object) [
                                'name' => '(2) Besar',
                                'value' => 'Besar'
                            ],
                            (object) [
                                'name' => '(3) Cukup',
                                'value' => 'Cukup'
                            ],
                            (object) [
                                'name' => '(4) Kurang',
                                'value' => 'Kurang'
                            ],
                            (object) [
                                'name' => '(5) Tidak sama sekali',
                                'value' => 'Tidak sama sekali'
                            ],
                        )
                    ],
                    (object) [
                        'code' => 'aa4',
                        'question' => 'Tidak lulus ujian (Alasan keluarga)?',
                        'type' => 'choice',
                        'value' => '',
                        'answers' => array(
                            (object) [
                                'name' => '(1) Sangat besar',
                                'value' => 'Sangat besar'
                            ],
                            (object) [
                                'name' => '(2) Besar',
                                'value' => 'Besar'
                            ],
                            (object) [
                                'name' => '(3) Cukup',
                                'value' => 'Cukup'
                            ],
                            (object) [
                                'name' => '(4) Kurang',
                                'value' => 'Kurang'
                            ],
                            (object) [
                                'name' => '(5) Tidak sama sekali',
                                'value' => 'Tidak sama sekali'
                            ],
                        )
                    ],
                    (object) [
                        'code' => 'aa5',
                        'question' => 'Tidak lulus ujian (Kesehatan)?',
                        'type' => 'choice',
                        'value' => '',
                        'answers' => array(
                            (object) [
                                'name' => '(1) Sangat besar',
                                'value' => 'Sangat besar'
                            ],
                            (object) [
                                'name' => '(2) Besar',
                                'value' => 'Besar'
                            ],
                            (object) [
                                'name' => '(3) Cukup',
                                'value' => 'Cukup'
                            ],
                            (object) [
                                'name' => '(4) Kurang',
                                'value' => 'Kurang'
                            ],
                            (object) [
                                'name' => '(5) Tidak sama sekali',
                                'value' => 'Tidak sama sekali'
                            ],
                        )
                    ]
                )
            ],
            (object) [
                'code' => 'a2',
                'title' => '',
                'question' => 'Selama kuliah Anda tinggal ...... ',
                'type' => 'choice_input',
                'value' => '',
                'answers' => array(
                    (object) [
                        'code' => 'a21',
                        'value' => 'Rumah sendiri/bersama orang tua',
                    ],
                    (object) [
                        'code' => 'a22',
                        'value' => 'Kos',
                    ],
                    (object) [
                        'code' => 'a23',
                        'value' => 'Pondok Pesantren',
                    ],
                    (object) [
                        'code' => 'a24',
                        'value' => 'Lainnya',
                    ]
                )
            ],
            (object) [
                'code' => 'a3',
                'title' => '',
                'question' => 'Selama kuliah, apakah Anda menjadi anggota dari suatu organisasi (soisial, pemuda, organisasi keagamaan) di dalam atau di luar kampus? ',
                'type' => 'choice',
                'value' => '',
                'sub_question' => [
                    (object) [
                        'code' => 'ab1',
                        'question' => '(bagi yang menjawab YA) Organisasi apa saja yang Anda ikuti? ',
                        'type' => 'string',
                        'value' => ''
                    ],
                    (object) [
                        'code' => 'ab2',
                        'question' => 'Seberapa aktif Anda di organisasi tersebut? ',
                        'type' => 'choice',
                        'value' => ''
                    ],
                ]
            ],
            (object) [
                'code' => 'a4',
                'title' => '',
                'question' => 'Pada saat Anda kuliah di perguruan tinggi, apakah Anda mengambil kursus atau pendidikan tambahan?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => [
                    (object) [
                        'code' => 'ac1',
                        'question' => 'Jenis kursus apa yang anda ambil sebelum/setelah Anda lulus dari perguruan tinggi? (jawaban bisa lebih dari satu)',
                        'type' => 'multiple',
                        'value' => ''
                    ],
                ]
            ],
            (object) [
                'code' => 'b1',
                'title' => 'BELAJAR MENGAJAR',
                'question' => 'Bagaimana penilaian Anda terhadap aspek Kesempatan untuk berinteraksi dengan dosen-dosen di luar jadwal kuliah ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b2',
                'title' => 'BELAJAR MENGAJAR',
                'question' => 'Bagaimana penilaian Anda terhadap aspek Pembimbingan akademik ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b3',
                'title' => 'BELAJAR MENGAJAR',
                'question' => 'Bagaimana penilaian Anda terhadap aspek Kepempatan berpartisipasi dalam proyek riset ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b4',
                'title' => 'BELAJAR MENGAJAR',
                'question' => 'Bagaimana penilaian Anda terhadap aspek Kondisi umum belajar mengajar ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b5',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Perpustakaan ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b6',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Teknologi informasi dan komunikasi ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b7',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Modul belajar ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b8',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Ruang belajar ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b9',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi laboratorium ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b10',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Variasi matakuliah yang ditawarkan ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b11',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Akomodasi ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b12',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Variasi matakuliah yang ditawarkan ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b13',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Pusat kegiatan mahasiswa dan fasilitasnya, ruang rekreasi ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b14',
                'title' => 'FASILITAS',
                'question' => 'Bagaimana penialan Anda terhadap kondisi Fasilitas layanan kesehatan ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b15',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Pembelajaran di kelas ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b16',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Magang/kerja lapangan/praktikum ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b17',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Pengabdian dan penjangkauan masyarakat ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b18',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Pelaksanaan riset/penulisan skripsi ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b19',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Organisasi kemahasiswaan ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b20',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Kegiatan ektrakurikuler ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'b21',
                'title' => 'PENGALAMAN BELAJAR',
                'question' => 'Bagaimana penialan Anda terhadap Rekreasi dan olahraga ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'c1',
                'title' => '',
                'question' => 'Apakah Anda memiliki usaha/ bekerja selama kuliah?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => [
                    (object) [
                        'code' => 'ca1',
                        'question' => 'Jika memiliki usaha / bekerja, tulislah usaha Anda atau pekerjaan Anda selama kuliah',
                        'type' => 'string',
                        'value' => ''
                    ],
                    (object) [
                        'code' => 'ca2',
                        'question' => 'Berapa penghasilan Anda dari usaha / bekerja tersebut?',
                        'type' => 'string',
                        'value' => ''
                    ],
                ]
            ],
            (object) [
                'code' => 'd1',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Perkuliahan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'd2',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Demontransi (peraga)]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'd3',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Partisipasi dalam proyek riset]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'd4',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Magang]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'd5',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Praktikum]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'd6',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Kerja lapangan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'd7',
                'title' => 'Aspek Pembelajaran',
                'question' => 'Menurut Anda seberapa besar penekanan pada aspek pembelajaran di bawah ini dilaksanakan di program studi Anda? [Diskusi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e1',
                'title' => '',
                'question' => 'Kapan Anda mulai mencari pekerjaan ?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => [
                    (object) [
                        'code' => 'ea1',
                        'question' => 'Kira-kira berapa bulan sebelum lulus Anda mulai mencari pekerjaan? (Tuliskan jawaban jika Anda mulai mencari pekerjaan sebelum lulus)',
                        'type' => 'string',
                        'value' => ''
                    ],
                    (object) [
                        'code' => 'ea2',
                        'question' => 'Kira-kira berapa bulan setelah lulus Anda mulai mencari pekerjaan? (Tuliskan jawaban jika Anda mulai mencari pekerjaan setelah lulus)',
                        'type' => 'string',
                        'value' => ''
                    ],
                ]
            ],
            (object) [
                'code' => 'e2',
                'title' => '',
                'question' => 'Bagaimana Anda mencari pekerjaan tersebut?  (Jawaban bisa lebih dari satu)',
                'type' => 'multiple',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e3',
                'title' => '',
                'question' => 'Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e4',
                'title' => '',
                'question' => 'Berapa bulan waktu yang dihabiskan sebelum  kelulusan untuk memeroleh pekerjaan pertama?',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e5',
                'title' => '',
                'question' => 'Berapa bulan waktu yang dihabiskan setelah  kelulusan untuk memeroleh pekerjaan pertama?',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e6',
                'title' => '',
                'question' => 'Berapa banyak perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau e-mail) sebelum Anda memeroleh pekerjaan pertama?',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e7',
                'title' => '',
                'question' => 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran Anda?',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e8',
                'title' => '',
                'question' => 'Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk wawancara?',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e9',
                'title' => '',
                'question' => 'Apakah Anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e10',
                'title' => '',
                'question' => 'Bagaimana Anda menggambarkan situasi Anda saat ini? Jawaban bisa lebih dari satu',
                'type' => 'multiple',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e11',
                'title' => '',
                'question' => 'Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah Satu Jawaban. ',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e12',
                'title' => '',
                'question' => 'Apa jenis perusahaan/instansi/institusi tempat Anda bekerja sekarang?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e13',
                'title' => '',
                'question' => 'Dari mana sumberdana dalam pembiayaan kuliah Anda?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e14',
                'title' => '',
                'question' => 'Kira-kira berapa pendapatan Anda setiap bulannya dari Pekerjaan Utama',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e15',
                'title' => '',
                'question' => 'Kira-kira berapa pendapatan Anda setiap bulannya dari Lembur dan Tips',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e16',
                'title' => '',
                'question' => 'Kira-kira berapa pendapatan Anda setiap bulannya dari Pekerjaan Lainnya',
                'type' => 'string',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e17',
                'title' => '',
                'question' => 'Seberapa erat hubungan antara bidang studi dengan pekerjaan Anda?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e18',
                'title' => '',
                'question' => 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan Anda saat ini?',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'e19',
                'title' => '',
                'question' => 'Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya? Jawaban bisa lebih dari satu',
                'type' => 'multiple',
                'value' => '',
                'sub_question' => []
            ],

            (object) [
                'code' => 'f1',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Pengetahuan di bidang atau disiplin ilmu Anda]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f2',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Pengetahuan di luar bidang atau disiplin ilmu Anda]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f3',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Pengetahuan umum]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f4',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bahasa Inggris]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f5',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Ketrampilan internet]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f6',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Ketrampilan komputer]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f7',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Berpikir kritis]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f8',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Ketrampilan riset]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f9',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan belajar]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f10',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan berkomunikasi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f11',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja di bawah tekanan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f12',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Manajemen waktu]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f13',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja secara mandiri]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f14',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja dalam tim/bekerjasama dengan orang lain]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f15',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan dalam memecahkan masalah]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f16',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Negosiasi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f17',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan analisis]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f18',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Toleransi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f19',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan adaptasi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f20',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Loyalitas]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f21',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Integritas]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f22',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja dengan orang yang berbeda budaya maupun latar belakang]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f23',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kepemimpinan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f24',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan dalam memegang tanggungjawab]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f25',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Inisiatif]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f26',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Manajemen proyek/program]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f27',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan untuk memresentasikan ide/produk/laporan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f28',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan dalam menulis laporan, memo dan dokumen]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f29',
                'title' => 'tracer',
                'question' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan untuk terus belajar sepanjang hayat]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],

            (object) [
                'code' => 'f30',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Pengetahuan di bidang atau disiplin ilmu Anda]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f31',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Pengetahuan di luar bidang atau disiplin ilmu Anda]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f32',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Pengetahuan umum]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f33',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bahasa Inggris]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f34',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Ketrampilan internet]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f35',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Ketrampilan komputer]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f36',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Berpikir kritis]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f37',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Ketrampilan riset]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f38',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan belajar]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f39',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan berkomunikasi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f40',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja di bawah tekanan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f41',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Manajemen waktu]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f42',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja secara mandiri]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f43',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja dalam tim/bekerjasama dengan orang lain]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f44',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan dalam memecahkan masalah]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f45',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Negosiasi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f46',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan analisis]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f47',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Toleransi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f48',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan adaptasi]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f49',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Loyalitas]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f50',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Integritas]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f51',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Bekerja dengan orang yang berbeda budaya maupun latar belakang]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f52',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kepemimpinan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f53',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan dalam memegang tanggungjawab]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f54',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Inisiatif]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f55',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Manajemen proyek/program]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f56',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan untuk memresentasikan ide/produk/laporan]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f67',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan dalam menulis laporan, memo dan dokumen]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
            (object) [
                'code' => 'f58',
                'title' => 'tracer',
                'question' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini Anda kuasai? [Kemampuan untuk terus belajar sepanjang hayat]',
                'type' => 'choice',
                'value' => '',
                'sub_question' => []
            ],
        );

        // dd($question);

        $params = [
            'title' => 'Tracer Study | Tracer Study - Universitas Islam Balitar',
            'questions' => $question
        ];

        return view('users.tracers.index2')->with($params);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
