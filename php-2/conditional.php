<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3> Soal No 1 Greetings </h3>";
    /* Soal No 1
    Greetings
    Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 
    */

    function greetings($nama) {
        // Menggunakan ucfirst agar huruf depan kapital seperti di contoh
        echo "Halo " . ucfirst($nama) . ", Selamat Datang di Sanbercode!<br>";
    }

    greetings("Bagas");
    greetings("Wahyu");
    greetings("nama peserta");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    /* Soal No 2
    Reverse String
    NB: DILARANG menggunakan built-in function PHP seperti strrev(), HANYA gunakan LOOPING!
    */

    function reverseString($str) {
        $panjangString = strlen($str);
        $hasilBalik = "";
        for ($i = $panjangString - 1; $i >= 0; $i--) {
            $hasilBalik .= $str[$i];
        }
        return $hasilBalik;
    }

    // Menampilkan hasil dengan echo karena fungsi me-return string
    echo reverseString("nama peserta") . "<br>";
    echo reverseString("Sanbercode") . "<br>";
    echo reverseString("We Are Sanbers Developers") . "<br>";

    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";
    /* Soal No 3 
    Palindrome
    NB: Gunakan function reverseString dari jawaban no.2!
    */

    function palindrome($kata) {
        // Memanggil fungsi dari Soal No 2
        $kataTerbalik = reverseString($kata);
        
        if ($kata === $kataTerbalik) {
            echo "true <br>";
            return true;
        } else {
            echo "false <br>";
            return false;
        }
    }

    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*
    Soal 4
    Tentukan Nilai (85-100 Sangat Baik, 70-84 Baik, 60-69 Cukup, < 60 Kurang)
    */

    function tentukan_nilai($skor) {
        if ($skor >= 85 && $skor <= 100) {
            return "Sangat Baik<br>";
        } elseif ($skor >= 70 && $skor < 85) {
            return "Baik<br>";
        } elseif ($skor >= 60 && $skor < 70) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }

    echo tentukan_nilai(98); // Sangat Baik
    echo tentukan_nilai(76); // Baik
    echo tentukan_nilai(67); // Cukup
    echo tentukan_nilai(43); // Kurang

    ?>

</body>

</html>