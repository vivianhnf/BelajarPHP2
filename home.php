<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: teal;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .banner {
            background-image: url('banner.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            margin-bottom: 20px;
        }
        .welcome-text {
            text-align: center;
            margin-bottom: 40px;
        }
        .product {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product-item {
            width: 300px;
            background-color: #fff;
            margin-bottom: 20px;
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
        <h1>Welcome to Our Store</h1>
    </div>
    <div class="banner"></div>
    <div class="container">
        <div class="welcome-text">
            <h2>Selamat datang di Warung Sembako UCok!</h2>
            <p>Temukan berbagai kebutuhan sembako Anda dengan harga terjangkau.</p>
        </div>
        <h2>Produk Terbaru</h2>
        <div class="product">
            <div class="product-item">
                <img src="product1.jpg" alt="Product 1">
                <div class="info">
                    <h3>Beras Sania 1 kg</h3>
                    <p>Harga: Rp 20,000</p>
                    
                </div>
            </div>
            <div class="product-item">
                <img src="product2.jpg" alt="Product 2">
                <div class="info">
                    <h3>Minyak Goreng bimoli</h3>
                    <p>Harga: Rp 17,000</p>
                   
                </div>
            </div>
            <div class="product-item">
                <img src="product3.jpg" alt="Product 3">
                <div class="info">
                    <h3>Gula Pasir Rose Brand</h3>
                    <p>Harga: Rp 14,000</p>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
