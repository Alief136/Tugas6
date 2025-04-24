<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hubungi Saya</title>
    <style>
        body {
            background-color: #f5f5f5;
            /* Background abu-abu terang */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #e0e0e0;
            /* Abu-abu muda */
            color: #333;
            /* Teks gelap untuk kontras */
            max-width: 500px;
            margin: 60px auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            /* Teks gelap */
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #444;
            /* Warna label lebih gelap */
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #0084a5;
            /* Hijau untuk tombol */
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0084a5;
            /* Efek hover hijau sedikit lebih gelap */
        }

        button:focus {
            outline: none;
        }

        option {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <script>
        function kirimWhatsApp() {
            const nama = document.getElementById("nama").value;
            const perusahaan = document.getElementById("perusahaan").value;
            const alasan = document.getElementById("alasan").value;

            const pesan = `Halo, nama saya ${nama} dari ${perusahaan}. Saya menghubungi Anda untuk: ${alasan}.`;

            const nomorTujuan = "6281234567890"; // Ganti dengan nomor WA kamu

            const linkWA = `https://wa.me/${nomorTujuan}?text=${encodeURIComponent(pesan)}`;
            window.open(linkWA, '_blank');
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>Form Hubungi Saya</h2>
        <form onsubmit="event.preventDefault(); kirimWhatsApp();">
            <label for="nama">Nama Pengontak:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="perusahaan">Nama Perusahaan:</label>
            <input type="text" id="perusahaan" name="perusahaan">

            <label for="alasan">Alasan Mengontak:</label>
            <select id="alasan" name="alasan" required>
                <option value="">-- Pilih Alasan --</option>
                <option value="Kerja Sama">Kerja Sama</option>
                <option value="Pertanyaan">Pertanyaan</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <button type="submit">Kirim WA</button>
        </form>
    </div>
</body>

</html>