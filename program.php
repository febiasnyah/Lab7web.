<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Data Diri</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f0f4ff;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 450px;
            background: #ffffff;
            margin: 60px auto;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #1e40af;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #374151;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 10px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1d4ed8;
        }

        hr {
            margin: 25px 0;
            border: none;
            height: 1px;
            background-color: #e2e8f0;
        }

        .hasil {
            background-color: #f9fafb;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .hasil h3 {
            color: #1e40af;
            border-bottom: 1px solid #cbd5e1;
            padding-bottom: 6px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Data Diri</h2>

        <form method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>

            <label>Pekerjaan:</label>
            <select name="pekerjaan" required>
                <option value="">-- Pilih Pekerjaan --</option>
                <option value="Guru">Guru</option>
                <option value="Dokter">Dokter</option>
                <option value="Programmer">Programmer</option>
                <option value="Desainer">Desainer</option>
                <option value="Petani">Petani</option>
            </select>

            <input type="submit" value="Tampilkan">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nama = htmlspecialchars($_POST["nama"]);
            $tanggal_lahir = $_POST["tanggal_lahir"];
            $pekerjaan = $_POST["pekerjaan"];

            // Hitung umur
            $tgl_lahir = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tgl_lahir)->y;

            // Tentukan gaji berdasarkan pekerjaan
            switch ($pekerjaan) {
                case "Guru": $gaji = 5000000; break;
                case "Dokter": $gaji = 10000000; break;
                case "Programmer": $gaji = 8000000; break;
                case "Desainer": $gaji = 6000000; break;
                case "Petani": $gaji = 4000000; break;
                default: $gaji = 0; break;
            }

            // Tampilkan hasil
            echo "<hr>";
            echo "<div class='hasil'>";
            echo "<h3>Hasil Input:</h3>";
            echo "Nama: <strong>$nama</strong><br>";
            echo "Tanggal Lahir: <strong>" . date("d-m-Y", strtotime($tanggal_lahir)) . "</strong><br>";
            echo "Umur: <strong>$umur tahun</strong><br>";
            echo "Pekerjaan: <strong>$pekerjaan</strong><br>";
            echo "Gaji: <strong>Rp " . number_format($gaji, 0, ',', '.') . "</strong><br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
