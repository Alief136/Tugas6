<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Muchammad Alief Rizqi Putra Abdillah</title>
    <style>
        /* Styling dasar untuk seluruh halaman */
        body {
            background-color: #f5f5f5;
            /* Warna latar belakang abu-abu terang */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            /* Menambahkan padding di seluruh body */
            color: #333;
            /* Teks gelap untuk kontras */
        }

        h2,
        h3 {
            color: #444;
            /* Warna teks judul */
            font-size: 24px;
            margin-bottom: 15px;
            padding-left: 20px;
            /* Padding kiri untuk judul */
        }

        h2 {
            text-align: center;
            font-size: 30px;
            margin-top: 40px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
            padding: 0 20px;
            /* Menambahkan padding kiri dan kanan pada paragraf */
        }

        /* Styling untuk daftar unordered list (ul) */
        ul {
            list-style-type: square;
            margin-left: 40px;
            padding-left: 10px;
            padding-right: 20px;
            /* Menambahkan padding kanan */
        }

        ul li {
            font-size: 16px;
            margin-bottom: 8px;
        }

        /* Styling untuk daftar ordered list (ol) */
        ol {
            list-style-type: decimal;
            margin-left: 40px;
            padding-left: 10px;
            padding-right: 20px;
            /* Menambahkan padding kanan */
        }

        ol li {
            font-size: 16px;
            margin-bottom: 8px;
        }

        /* Styling untuk link */
        a {
            color: #0084a5;
            /* Warna hijau untuk link */
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
            color: #0084a5;
            /* Warna hijau lebih gelap saat hover */
        }

        /* Styling untuk garis pemisah */
        hr {
            border: 1px solid #ccc;
            margin: 30px 0;
        }
    </style>
</head>

<body>

    <h2>Muchammad Alief Rizqi Putra Abdillah</h2>
    <p>Nama saya Muchammad Alief Rizqi Putra Abdillah , di panggil Alif. Hobi saya bermain video game, cita-cita saya adalah menjadi seorang freelance programmer. Web yang saya ingin ciptakan adalah yang bisa membantu diri saya dan orang di sekitar saya.</p>

    <h3>Mata Kuliah</h3>
    <ul>
        <li><a href="<?= base_url('mata-kuliah/rpl'); ?>">RPL</a></li>
        <li><a href="<?= base_url('mata-kuliah/sim'); ?>">Sistem Informasi Manajemen</a></li>
        <li><a href="<?= base_url('mata-kuliah/mbd'); ?>">Manajemen Basis Data</a></li>
        <li><a href="<?= base_url('mata-kuliah/mp-si'); ?>">Metodologi Penelitian SI</a></li>
        <li><a href="<?= base_url('mata-kuliah/pemweb2'); ?>">PemWeb2</a></li>
        <li><a href="<?= base_url('mata-kuliah/vdi'); ?>">Visualisasi Data dan Info</a></li>
    </ul>


    <h3>Skill</h3>
    <ol>
        <li>Programming Dasar</li>
        <li>Bahasa Inggris</li>
    </ol>

    <br>
    <hr>
    <br>
    <a href="<?= base_url('kontak'); ?>">Hubungi Saya</a>

</body>

</html>