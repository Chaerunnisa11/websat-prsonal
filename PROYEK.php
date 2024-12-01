<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Matematika Kelas 7 SMP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h3 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>

    <?php
    // Array soal dan jawaban Matematika Kelas 7 SMP
    $soal = [
        [
            'pertanyaan' => '1. Berapakah hasil dari 3 × 5 + 2?',
            'pilihan' => ['13', '15', '17', '20', '25'],
            'jawaban_benar' => '17'
        ],
        [
            'pertanyaan' => '2. Sebuah bilangan prima di bawah 10 adalah...',
            'pilihan' => ['4', '6', '8', '9', '7'],
            'jawaban_benar' => '7'
        ],
        [
            'pertanyaan' => '3. Berapakah hasil dari -12 + 5?',
            'pilihan' => ['-7', '7', '-17', '17', '0'],
            'jawaban_benar' => '-7'
        ],
        [
            'pertanyaan' => '4. Jika luas sebuah persegi adalah 64 cm², maka panjang sisi persegi tersebut adalah...',
            'pilihan' => ['6 cm', '7 cm', '8 cm', '9 cm', '10 cm'],
            'jawaban_benar' => '8 cm'
        ],
        [
            'pertanyaan' => '5. Pada segitiga siku-siku, jika panjang alas adalah 6 cm dan tinggi adalah 8 cm, berapakah panjang sisi miringnya?',
            'pilihan' => ['8 cm', '10 cm', '12 cm', '14 cm', '16 cm'],
            'jawaban_benar' => '10 cm'
        ],
        [
            'pertanyaan' => '6. Berapakah hasil dari 2/5 + 1/2?',
            'pilihan' => ['7/10', '9/10', '6/10', '3/10', '1/10'],
            'jawaban_benar' => '9/10'
        ],
        [
            'pertanyaan' => '7. Sebuah kubus memiliki volume 125 cm³. Berapakah panjang rusuk kubus tersebut?',
            'pilihan' => ['4 cm', '5 cm', '6 cm', '7 cm', '8 cm'],
            'jawaban_benar' => '5 cm'
        ],
        [
            'pertanyaan' => '8. Berapakah nilai dari 15% dari 200?',
            'pilihan' => ['20', '25', '30', '35', '40'],
            'jawaban_benar' => '30'
        ],
        [
            'pertanyaan' => '9. Sebuah lingkaran memiliki diameter 14 cm. Berapakah keliling lingkaran tersebut? (Gunakan π ≈ 22/7)',
            'pilihan' => ['44 cm', '22 cm', '28 cm', '56 cm', '88 cm'],
            'jawaban_benar' => '44 cm'
        ],
        [
            'pertanyaan' => '10. Berapakah kelipatan persekutuan terkecil (KPK) dari 6 dan 8?',
            'pilihan' => ['12', '16', '18', '24', '30'],
            'jawaban_benar' => '24'
        ]
    ];

    // Pilih soal secara acak
    $k = rand(0, count($soal) - 1);
    $correctAnswer = $soal[$k]['jawaban_benar'];

    // Acak pilihan jawaban
    shuffle($soal[$k]['pilihan']);

    // Tampilkan soal dan pilihan dalam form
    echo '<form action="" method="post">';
    echo '<h3>' . $soal[$k]['pertanyaan'] . '</h3>';
    foreach ($soal[$k]['pilihan'] as $i => $option) {
        echo '<input type="radio" name="answer" value="' . $option . '" id="option' . $i . '" required>';
        echo '<label for="option' . $i . '">' . $option . '</label><br>';
    }
    echo '<input type="hidden" name="correct_answer" value="' . $correctAnswer . '">';
    echo '<input type="submit" value="Kirim jawaban">';
    echo '</form>';

    // Jika jawaban dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userAnswer = $_POST['answer'];
        $correctAnswer = $_POST['correct_answer'];

        // Beri feedback ke pengguna
        if ($userAnswer == $correctAnswer) {
            echo "<p style='color: green;'>Jawaban Anda benar!</p>";
        } else {
            echo "<p style='color: red;'>Jawaban Anda salah. Jawaban yang benar adalah: $correctAnswer</p>";
        }
    }
    ?>

</body>

</html>
