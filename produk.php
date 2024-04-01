<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .header {
            background-color: teal;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .product-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-item .info {
            padding: 20px;
        }
        .product-item h3 {
            margin-top: 0;
        }
        .product-item p {
            margin-bottom: 10px;
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
<div class="header">
        <h1>Happy Shoping!</h1>
    </div>
    <div class="container">
        <h1>Daftar Produk</h1>
        <ul class="product-list">
            <?php 
            // Array untuk menyimpan nama produk
            $nama_produk = array(
                "Beras",
                "Minyak Goreng",
                "Gula Pasir",
                "Garam",
                "Margarin",
                "Mie Telor",
                "Telur Ayam 1kg",
                "Kopi",
                "Susu UHT",
                "Teh Celup",
                "Tepung Terigu",
                "Ayam 1kg",
                "Bawang merah 1kg",
                "bawang putih 1kg",
                "Daging sapi 1 kg"
            );
            // Array untuk menyimpan harga produk
            $harga_produk = array(
                20000, 
                15000, 
                15000,  
                3000, 
                8000,
                15000,
                30000,
                20000,
                23000,
                7000,
                17000,
                55000,
                35000,
                45000,
                95000

            );
            ?>
            <?php for ($i = 0; $i < count($nama_produk); $i++) : ?>
                <li class="product-item">
                    <img src="product<?= $i + 1 ?>.jpg" alt="<?= $nama_produk[$i] ?>">
                    <div class="info">
                        <h3><?= $nama_produk[$i] ?></h3>
                        <p>Harga: Rp <?= number_format($harga_produk[$i], 0, ',', '.'); ?></p>
                        
                    </div>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</body>
</html>
