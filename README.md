Nama : Rafif Isdarufa Athallah

NIM : 312210299

Kelas : TI.22.A3

---

## Pratikum 7 : PHP Dasar

### Install XAMPP

Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi 
portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan 
direktorinya (misal: `d:\xampp`).

#### Konfigurasi Web Server

- **Konfigurasi Apache,** untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul
yang diaktifkan, lokasi document root, dll.
Lokasi file: `c:/xampp/apache/conf/httpd.conf`

- **Konfigrasi PHP,** untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa. Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error reporting, dll. Lokasi file: `c:/xampp/php/php.ini`

- **Konfigrasi MySQL,** seperti administrator user, port, timezone, dll. Lokasi file: `c:/xampp/mysql/bin/my.ini`

#### Menjalankan Web Server

- Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost

    Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.

- Dokumen Website

    Semua file website tempatkan di direktori: `c:/xampp/htdocs/`
    
- Database MySQL

    Direktori: `c:/xampp/mysql`

    Manajemen database: http://localhost/phpmyadmin

#### Memulai PHP

- Buat folder **lab7_php_dasar** pada root directory web server `d:\xampp\htdocs`

- Kemudian untuk mengakses direktori tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

---

### PHP Dasar

- Buat file baru dengan nama `php_dasar.php` pada direktori tersebut. Kemudian buat kode seperti dibawah.

- Untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar Dasar PHP</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```

![Hello World](./images/PHP%20Dasar%20(1).png)

---

### PHP Variable

- Menambahkan variable pada program.

- Nama variabel dalam PHP harus dimulai dengan tanda dollar ($) dan dapat berisi huruf, angka, atau garis bawah, dengan catatan bahwa nama variabel harus dimulai dengan huruf atau garis bawah.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar Dasar PHP</h1>
    <?php
        echo "Hello World";
    ?>

    <h2>Menggunakan Variable</h2>
    <?php
        $nama = "Rafif Athallah";
        $nim = "312210299";
        echo "Nama : $nama <br>";
        echo "Nim : $nim <br>";
    ?>
</body>
</html>
```

![Variable](./images/PHP%20Dasar%20(2).png)

---

### Predefine Variable $_GET

- Dalam PHP, `$_GET` adalah salah satu variabel super global yang digunakan untuk mengumpulkan data yang dikirimkan ke server melalui parameter URL. Ketika pengguna mengirimkan data melalui formulir atau dengan menambahkan parameter pada URL, data tersebut dapat diakses dan diproses menggunakan `$_GET`.

- Untuk mengaksesnya gunakan URL: 
http://localhost/lab7_php_dasar/php_get.php?nama=Rafif

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Get</title>
</head>
<body>
    <h2>Predefine Variable</h2>
    <?php
        echo "Selamat datang, ".$_GET["nama"];
    ?>    
</body>
</html>
```

![Predefine Variable](./images/PHP%20GET.png)

---

### Membuat Form Input

- `$_POST` adalah salah satu superglobal variable dalam PHP yang digunakan untuk mengumpulkan data yang dikirimkan melalui metode HTTP POST. Ketika suatu form HTML disubmit dengan menggunakan metode POST, data form tersebut dikirimkan ke server, dan PHP dapat mengakses data tersebut melalui variabel `$_POST`.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
        echo "<br>Selamat datang, ".$_POST["nama"];
    ?>    
</body>
</html>
```

![Form](./images/PHP%20Form.png)

---

### PHP Operator

- Dalam PHP, operator digunakan untuk melakukan operasi pada variabel dan nilai. Terdapat berbagai jenis operator yang dapat digunakan untuk melakukan operasi aritmatika, perbandingan, logika, dan lainnya.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Operator</title>
</head>
<body>
    <h2>Penggunaan Operator</h2>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>    
</body>
</html>
```

![Operator](./images/PHP%20Operator.png)

---

### PHP Kondisi

- Dalam PHP, pernyataan kondisional if dan switch digunakan untuk membuat logika percabangan, yang memungkinkan program untuk menjalankan blok kode tertentu berdasarkan kebenaran atau kebenaran beberapa kondisi.

- **IF Statement:**
Pernyataan if digunakan untuk mengeksekusi blok kode jika suatu kondisi benar (true). 

- **Switch Statement:**
Pernyataan switch digunakan untuk membandingkan nilai ekspresi dengan sejumlah kasus dan mengeksekusi kode terkait dengan kasus yang cocok.

```
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Kondisi</title>
</head>
<body>
    <h2>Penggunaan If-Else</h2>
    <?php
        $nama_hari = date("1");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }    
    ?>    

    <h2>Penggunaan Switch</h2>
    <?php
        $nama_hari = date("1");
        switch ($nama_hari) {
            case "Sunday":
                echo "Minggu";
                break;
            case "Monday";
                echo "Senin";
                break;
            case "Tuesday";
                echo "Selasa";
                break;
            default;
                echo "Sabtu";
        }
    ?>              
</body>
</html>
```

![If](./images/PHP%20Kondisi.png)

---

### PHP Perulangan

- Perulangan atau looping adalah salah satu konsep dasar dalam pemrograman yang memungkinkan kita mengeksekusi serangkaian perintah berulang kali. Dalam PHP, terdapat tiga jenis perulangan utama: for, while, dan do-while.

- For Loop (Perulangan For):
Dalam perulangan for, kita menentukan tiga bagian utama: inisialisasi, kondisi, dan perubahan. Pertama, kita menetapkan nilai awal variabel kontrol (inisialisasi), kemudian menetapkan kondisi yang harus dipenuhi agar perulangan terus berlanjut, dan terakhir, mendefinisikan perubahan yang terjadi setelah setiap iterasi. Sebagai contoh:

- While Loop (Perulangan While):
Dalam perulangan while, pernyataan di dalam blok akan terus dieksekusi selama kondisi yang ditentukan benar. Kondisi dievaluasi sebelum eksekusi blok pernyataan. Sebagai contoh:

- Do-While Loop (Perulangan Do-While):
Do-while mirip dengan while, tetapi evaluasi kondisinya dilakukan setelah blok pernyataan dieksekusi, sehingga setidaknya satu iterasi pasti terjadi.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Perulangan</title>
</head>
<body>
    <h2>Perulangan <em>For</em></h2>
    <?php
        echo "Perulangan 1 sampai 10 <br>";
        for ($i = 0; $i <= 10; $i++) {
            echo "Perulangan ke - $i <br>";
        }  

        echo "<br>Perulangan menurun 10 sampai 1 <br>";
        for ($i = 10; $i >= 1; $i--) {
            echo "Perulangan ke - $i <br>";
        }   
    ?>   

    <h2>Perulangan <em>While</em></h2>
    <?php
        echo "Perulangan 1 sampai 10 <br>";
        $i = 1;
        while ($i <= 10) {
            echo "Perulangan ke - $i <br>";
            $i++;
        } 
    ?>

    <h2>Perulangan <em>Do...while</em></h2>
    <?php
        echo "Perulangan 1 sampai 10 <br>";
        $i = 1;
        do {
            echo "Perulangan ke - $i <br>";
            $i++;
        } while ($i <= 10);
    ?>   
</body>
</html>
```

![For](./images/PHP%20For.png)
![While](./images/PHP%20While.png)
![Do...while](./images/PHP%20Do...while.png)

---

### Pertanyaan dan Tugas

**Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.**

![Tugas](./images/PHP%20Tugas.png)

---

### Sekian, terimakasih.