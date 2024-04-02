<?php
class Mahasiswa {
    // Member variables
    public $nim;
    public $nama;
    public $universitas;
    public $mata_kuliah;
    public $nilai;

    // Constructor
    public function __construct($nim, $nama, $universitas, $mata_kuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
    }

    // Method to get result
    public function getHasil() {
        if ($this->nilai >= 55) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }

    // Method to get Grade
    public function getGrade() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 75) {
            return 'B';
        } elseif ($this->nilai >= 65) {
            return 'C';
        } elseif ($this->nilai >= 55) {
            return 'D';
        } else {
            return 'E';
        }
    }

    // Method to get Predikat
    public function getPredikat() {
        if ($this->nilai >= 85) {
            return 'Sangat Baik';
        } elseif ($this->nilai >= 75) {
            return 'Baik';
        } elseif ($this->nilai >= 65) {
            return 'Cukup';
        } elseif ($this->nilai >= 55) {
            return 'Kurang';
        } else {
            return 'Sangat Kurang';
        }
    }
}
?>
