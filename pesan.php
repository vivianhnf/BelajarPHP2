<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: pink;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Responsif */
        @media screen and (max-width: 600px) {
            .container {
                width: 90%;
            }
            input[type="text"],
            input[type="email"],
            textarea,
            input[type="submit"] {
                width: 100%;
            }
        }
        .copyright {
            position: fixed; /* Menetapkan posisi tetap */
            bottom: 0; /* Menempatkan elemen di bagian bawah */
            left: 0; 
            width: 100%; 
            text-align: center;
            background-color: teal;
            color: white;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <h1>Mau Order? Kirim pesan ke kami</h1>
        <form action="#" method="post" onsubmit="return kirimPesan()">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>
            <input type="submit" value="Kirim Pesan">
        </form>
    </div>

    <script>
        function kirimPesan() {
            // Mengambil nilai dari input nama, email, dan pesan
            var nama = document.getElementById('nama').value;
            var email = document.getElementById('email').value;
            var pesan = document.getElementById('pesan').value;

            // Validasi jika input nama, email, atau pesan kosong
            if (nama.trim() === '' || email.trim() === '' || pesan.trim() === '') {
                alert('Silakan isi semua kolom sebelum mengirim pesan.');
                return false; // Menghentikan proses pengiriman pesan
            }

            // Menampilkan notifikasi pesan terkirim
            alert('Pesan berhasil terkirim! Terima kasih atas masukan Anda.');
            return true; // Memungkinkan proses pengiriman pesan dilanjutkan
        }
    </script>
</body>
</html>
