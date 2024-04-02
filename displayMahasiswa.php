<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    // Membuat objek Mahasiswa
    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $mata_kuliah, $nilai);
    
    // Menentukan Grade dan Predikat berdasarkan nilai
    $grade = $mahasiswa->getGrade();
    $predikat = $mahasiswa->getPredikat();
    
    // Menampilkan hasil dalam bentuk tabel
    echo "<style>
            table {
                border-collapse: collapse;
                width: 70%;
                margin: 0 auto;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: lightblue;
                color: black;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            .button-container {
                text-align: center;
                margin-top: 20px;
            }
            .button {
                background-color: blue;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 5px;
                cursor: pointer;
            }
            .button:hover {
                background-color: #45a049;
            }
          </style>";

    echo "<h2 align='center'>Daftar Nilai Mahasiswa</h2>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Universitas</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>1</td>";
    echo "<td>" . $mahasiswa->nim . "</td>";
    echo "<td>" . $mahasiswa->nama . "</td>";
    echo "<td>" . $mahasiswa->universitas . "</td>";
    echo "<td>" . $mahasiswa->mata_kuliah . "</td>";
    echo "<td>" . $mahasiswa->nilai . "</td>";
    echo "<td>" . $grade . "</td>";
    echo "<td>" . $predikat . "</td>";
    echo "<td>" . $mahasiswa->getHasil() . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

    // Button kembali ke form mahasiswa
    echo "<div class='button-container'>
            <a href='formMahasiswa.php' class='button'>Kembali</a>
          </div>";
}
?>
