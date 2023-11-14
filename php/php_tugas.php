<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Tugas</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

        body {
            font-family: "DM Sans", sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
            margin-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select {
            font-family: "DM Sans", sans-serif;
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 12px;
            margin-bottom: 0px;
            background-color: #4caf50;
            letter-spacing: 1px;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .output {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2><center>Form Input</center></h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama"><br>
        <label>Tanggal lahir: </label>
        <input type="date" name="tanggal_lahir"><br>
        <label>Pekerjaan: </label>
        <select name="pekerjaan">
            <option value="Data Scientist">Data Scientist</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Network Administrator">Network Administrator</option>
        </select><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
        // Inisialisasi variabel
        $nama = $tanggal_lahir = $pekerjaan = '';
        $umur = $gaji = 0;

        // Memproses form jika disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            // Menghitung umur
            $hari_ini = new DateTime();
            $tanggal_lahir = new DateTime($tanggal_lahir);
            $umur = $hari_ini->diff($tanggal_lahir)->y;

            // Menentukan gaji berdasarkan pekerjaan
            switch ($pekerjaan) {
                case 'Data Scientist':
                    $gaji = 15000000;
                    break;
                case 'Web Developer':
                    $gaji = 8000000;
                    break;
                case 'Network Administrator':
                    $gaji = 10000000;
                    break;
                default:
                    $gaji = 0;
            }
        }
    ?>

    <h2><center>Output</center></h2>
    <div class="output">
        <?php
            echo "Nama: $nama <br>";
            echo "Umur: $umur tahun <br>";
            echo "Pekerjaan: $pekerjaan <br>";
            echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
        ?>
    </div>
</body>
</html>
