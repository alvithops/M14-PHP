<?php
class PersegiPanjang {
    // Properti harus didefinisikan agar bisa diisi
    public $panjang;
    public $lebar;

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>