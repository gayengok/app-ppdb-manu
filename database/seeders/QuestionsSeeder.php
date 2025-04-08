<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // B.Indonesia questions

        Question::create([
            'question_id' => 'bind_ma_01',
            'question_text' => 'Perhatikan kalimat berikut!  
    "Ayah sedang membaca koran di ruang tamu."  
    Fungsi kata "membaca" dalam kalimat tersebut adalah?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Subjek'],
                ['value' => 'b', 'text' => 'Predikat'],
                ['value' => 'c', 'text' => 'Objek'],
                ['value' => 'd', 'text' => 'Keterangan'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_02',
            'question_text' => 'Dalam sebuah teks eksposisi, bagian yang berisi pernyataan pendapat atau tesis disebut?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Argumentasi'],
                ['value' => 'b', 'text' => 'Simpulan'],
                ['value' => 'c', 'text' => 'Tesis'],
                ['value' => 'd', 'text' => 'Orientasi'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_03',
            'question_text' => 'Peribahasa "Seperti api dalam sekam" memiliki arti?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Persoalan yang tampak sepele tetapi berbahaya'],
                ['value' => 'b', 'text' => 'Orang yang tidak tetap pendiriannya'],
                ['value' => 'c', 'text' => 'Orang yang suka mencari masalah'],
                ['value' => 'd', 'text' => 'Sesuatu yang tidak berguna'],
            ]),
            'correct_answer' => 'a',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_04',
            'question_text' => 'Kalimat yang menggunakan kata kerja imperatif adalah?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Saya pergi ke pasar untuk membeli buah'],
                ['value' => 'b', 'text' => 'Tolong tutup pintu itu!'],
                ['value' => 'c', 'text' => 'Dia membaca buku setiap malam'],
                ['value' => 'd', 'text' => 'Mereka sedang berdiskusi tentang tugas sekolah'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_05',
            'question_text' => 'Paragraf yang menjelaskan suatu hal secara informatif disebut?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Narasi'],
                ['value' => 'b', 'text' => 'Deskripsi'],
                ['value' => 'c', 'text' => 'Eksposisi'],
                ['value' => 'd', 'text' => 'Argumentasi'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_06',
            'question_text' => 'Manakah yang termasuk kalimat efektif?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Dia pergi ke pasar untuk membeli buah karena ingin memasak'],
                ['value' => 'b', 'text' => 'Kemarin saya sudah pergi ke pasar kemarin'],
                ['value' => 'c', 'text' => 'Karena hujan deras, maka kami tidak pergi ke sekolah'],
                ['value' => 'd', 'text' => 'Kami akan menghadiri seminar besok di aula sekolah'],
            ]),
            'correct_answer' => 'd',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_07',
            'question_text' => 'Antonim dari kata "konvensional" adalah?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Tradisional'],
                ['value' => 'b', 'text' => 'Modern'],
                ['value' => 'c', 'text' => 'Konservatif'],
                ['value' => 'd', 'text' => 'Klasik'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_08',
            'question_text' => 'Dalam teks debat, pihak yang memberikan sanggahan disebut sebagai?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Moderator'],
                ['value' => 'b', 'text' => 'Pembicara pertama'],
                ['value' => 'c', 'text' => 'Tim pro'],
                ['value' => 'd', 'text' => 'Tim kontra'],
            ]),
            'correct_answer' => 'd',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_09',
            'question_text' => 'Cermati kalimat berikut!  
    "Karena ia terlambat, ia tidak masuk kelas."  
    Kata penghubung "karena" pada kalimat tersebut berfungsi untuk?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Menunjukkan sebab-akibat'],
                ['value' => 'b', 'text' => 'Menunjukkan perbandingan'],
                ['value' => 'c', 'text' => 'Menunjukkan tujuan'],
                ['value' => 'd', 'text' => 'Menunjukkan syarat'],
            ]),
            'correct_answer' => 'a',
            'score_value' => 2,
        ]);

        Question::create([
            'question_id' => 'bind_ma_10',
            'question_text' => 'Dalam surat lamaran pekerjaan, bagian yang berisi informasi tentang keahlian dan pengalaman disebut?',
            'subject' => 'B.Indonesia',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Paragraf pembuka'],
                ['value' => 'b', 'text' => 'Paragraf isi'],
                ['value' => 'c', 'text' => 'Paragraf penutup'],
                ['value' => 'd', 'text' => 'Kepala surat'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 2,
        ]);





        // Soal Matematika

        Question::create([
            'question_id' => 'mtk_01',
            'question_text' => 'Berapakah hasil dari 8 × 4 ÷ 2?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '14'],
                ['value' => 'b', 'text' => '16'],
                ['value' => 'c', 'text' => '12'],
                ['value' => 'd', 'text' => '18'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_02',
            'question_text' => 'Jika sebuah segitiga memiliki alas 10 cm dan tinggi 6 cm, berapakah luasnya?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '30 cm²'],
                ['value' => 'b', 'text' => '40 cm²'],
                ['value' => 'c', 'text' => '50 cm²'],
                ['value' => 'd', 'text' => '60 cm²'],
            ]),
            'correct_answer' => 'a',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_03',
            'question_text' => 'Hasil dari 15 ÷ 3 × 2 adalah?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '5'],
                ['value' => 'b', 'text' => '10'],
                ['value' => 'c', 'text' => '6'],
                ['value' => 'd', 'text' => '12'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_04',
            'question_text' => 'Jika luas persegi adalah 64 cm², maka panjang sisinya adalah?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '6 cm'],
                ['value' => 'b', 'text' => '7 cm'],
                ['value' => 'c', 'text' => '8 cm'],
                ['value' => 'd', 'text' => '9 cm'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_05',
            'question_text' => 'Hasil dari 2³ + 5 × 2 adalah?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '13'],
                ['value' => 'b', 'text' => '16'],
                ['value' => 'c', 'text' => '18'],
                ['value' => 'd', 'text' => '19'],
            ]),
            'correct_answer' => 'd',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_06',
            'question_text' => 'Sebuah lingkaran memiliki jari-jari 7 cm. Berapakah kelilingnya? (π = 22/7)',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '44 cm'],
                ['value' => 'b', 'text' => '22 cm'],
                ['value' => 'c', 'text' => '14 cm'],
                ['value' => 'd', 'text' => '38 cm'],
            ]),
            'correct_answer' => 'a',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_07',
            'question_text' => 'Sebuah balok memiliki panjang 10 cm, lebar 5 cm, dan tinggi 8 cm. Berapakah volumenya?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '200 cm³'],
                ['value' => 'b', 'text' => '300 cm³'],
                ['value' => 'c', 'text' => '400 cm³'],
                ['value' => 'd', 'text' => '500 cm³'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_08',
            'question_text' => 'Jika a = 3 dan b = 4, maka nilai dari a² + b² adalah?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '12'],
                ['value' => 'b', 'text' => '16'],
                ['value' => 'c', 'text' => '25'],
                ['value' => 'd', 'text' => '30'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_09',
            'question_text' => 'Hasil dari 5 × (6 - 2) + 8 ÷ 4 adalah?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '18'],
                ['value' => 'b', 'text' => '20'],
                ['value' => 'c', 'text' => '22'],
                ['value' => 'd', 'text' => '24'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'mtk_10',
            'question_text' => 'Jika 3x - 2 = 10, maka nilai x adalah?',
            'subject' => 'MTK',
            'options' => json_encode([
                ['value' => 'a', 'text' => '3'],
                ['value' => 'b', 'text' => '4'],
                ['value' => 'c', 'text' => '5'],
                ['value' => 'd', 'text' => '6'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);




        // Soal Bahasa Inggris

        Question::create([
            'question_id' => 'bing_01',
            'question_text' => 'Which word is an antonym of "fast"?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Slow'],
                ['value' => 'b', 'text' => 'Quick'],
                ['value' => 'c', 'text' => 'Speedy'],
                ['value' => 'd', 'text' => 'Rapid'],
            ]),
            'correct_answer' => 'a',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'bing_02',
            'question_text' => 'Which sentence is grammatically correct?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'She don’t like apples.'],
                ['value' => 'b', 'text' => 'He go to school every day.'],
                ['value' => 'c', 'text' => 'They are playing in the park.'],
                ['value' => 'd', 'text' => 'I has a new book.'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);


        Question::create([
            'question_id' => 'bing_03',
            'question_text' => 'Which sentence is correct?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'She don’t like coffee.'],
                ['value' => 'b', 'text' => 'She doesn’t like coffee.'],
                ['value' => 'c', 'text' => 'She didn’t likes coffee.'],
                ['value' => 'd', 'text' => 'She not likes coffee.'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 4,
        ]);


        Question::create([
            'question_id' => 'bing_04',
            'question_text' => 'What is the opposite of "big"?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Large'],
                ['value' => 'b', 'text' => 'Huge'],
                ['value' => 'c', 'text' => 'Small'],
                ['value' => 'd', 'text' => 'Tall'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'bing_05',
            'question_text' => 'I ___ a book when she called me.',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'read'],
                ['value' => 'b', 'text' => 'reading'],
                ['value' => 'c', 'text' => 'was reading'],
                ['value' => 'd', 'text' => 'reads'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'bing_06',
            'question_text' => 'How ___ water do you drink every day?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'many'],
                ['value' => 'b', 'text' => 'much'],
                ['value' => 'c', 'text' => 'a few'],
                ['value' => 'd', 'text' => 'a lot'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 4,
        ]);



        Question::create([
            'question_id' => 'bing_07',
            'question_text' => 'Which one is a synonym of "happy"?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Sad'],
                ['value' => 'b', 'text' => 'Angry'],
                ['value' => 'c', 'text' => 'Joyful'],
                ['value' => 'd', 'text' => 'Tired'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'bing_08',
            'question_text' => 'What is the plural form of "child"?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Childs'],
                ['value' => 'b', 'text' => 'Childes'],
                ['value' => 'c', 'text' => 'Children'],
                ['value' => 'd', 'text' => 'Childrens'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'bing_09',
            'question_text' => 'Choose the correct sentence.',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'He go to school every day.'],
                ['value' => 'b', 'text' => 'He goes to school every day.'],
                ['value' => 'c', 'text' => 'He going to school every day.'],
                ['value' => 'd', 'text' => 'He gone to school every day.'],
            ]),
            'correct_answer' => 'b',
            'score_value' => 4,
        ]);

        Question::create([
            'question_id' => 'bing_10',
            'question_text' => 'What is the comparative form of "good"?',
            'subject' => 'B.Inggris',
            'options' => json_encode([
                ['value' => 'a', 'text' => 'Gooder'],
                ['value' => 'b', 'text' => 'More good'],
                ['value' => 'c', 'text' => 'Better'],
                ['value' => 'd', 'text' => 'Best'],
            ]),
            'correct_answer' => 'c',
            'score_value' => 4,
        ]);
    }
}
