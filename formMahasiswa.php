
<?php
// Empty PHP tag 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: lightblue;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2 align="center">Form Mahasiswa</h2>
    <form method="post" action="displayMahasiswa.php">
        <label>NIM:</label>
        <input type="text" name="nim" required><br>
        
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        
        <label>Universitas:</label>
        <select name="universitas">
            <option value="Pilih Universitas">--Pilih Universitas--</option>
            <option value="Universitas A">Universitas A</option>
            <option value="Universitas B">Universitas B</option>
            <option value="Universitas C">Universitas C</option>
        </select><br>
        
        <label>Mata Kuliah:</label>
        <select name="mata_kuliah">
            <option value="Pilih Matakuliah">--Pilih Matakuliah--</option>
            <option value="PHP">PHP</option>
            <option value="HTML">HTML</option>
            <option value="UI/UX">UI/UX</option>
            <option value="CSS">CSS</option>
        </select><br>
        
        <label>Nilai:</label>
        <input type="text" name="nilai" required><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
