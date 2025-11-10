<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>

    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nama = htmlspecialchars($_POST["nama"]);
            echo "<h3>Selamat Datang, $nama!</h3>";

            // ====== Perhitungan Gaji ======
            $gaji  = 1000000;
            $pajak = 0.1;
            $thp   = $gaji - ($gaji * $pajak);

            echo "Gaji sebelum pajak = Rp. $gaji <br>";
            echo "Gaji yang dibawa pulang = Rp. $thp <br><br>";

            // ====== Menampilkan Nama Hari ======
            $nama_hari = date("l");
            echo "Hari ini adalah: ";

            switch ($nama_hari) {
                case "Sunday": echo "Minggu"; break;
                case "Monday": echo "Senin"; break;
                case "Tuesday": echo "Selasa"; break;
                case "Wednesday": echo "Rabu"; break;
                case "Thursday": echo "Kamis"; break;
                case "Friday": echo "Jumat"; break;
                default: echo "Sabtu"; break;
            }

            echo "<br><br>";

            // ====== Perulangan FOR ======
            echo "Perulangan 1 sampai 10 (FOR) <br />";
            for ($i = 1; $i <= 10; $i++) {
                echo "Perulangan ke: " . $i . "<br />";
            }

            echo "<br>";

            echo "Perulangan menurun dari 10 ke 1 (FOR) <br />";
            for ($i = 10; $i >= 1; $i--) {
                echo "Perulangan ke: " . $i . "<br />";
            }

            echo "<br>";

            // ====== Perulangan WHILE ======
            echo "Perulangan 1 sampai 10 (WHILE) <br />";
            $i = 1;
            while ($i <= 10) {
                echo "Perulangan ke: " . $i . "<br />";
                $i++;
            }

            echo "<br>";

            // ====== Perulangan DO WHILE ======
            echo "Perulangan 1 sampai 10 (DOW WHILE) <br />";
            $i = 1;
            do {
                echo "Perulangan ke: " . $i . "<br />";
                $i++;
            } while ($i <= 10);
        }
    ?>
</body>
</html>
