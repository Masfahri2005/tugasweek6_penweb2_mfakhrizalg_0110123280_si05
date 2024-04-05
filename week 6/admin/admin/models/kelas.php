<?php
class Kelas{
    private $koneksi;
    public function __construct(){
        // sebuah function yang di jalankan awalan
        global $conn;
        $this->koneksi = $conn;
    }
    public function TampilKelas(){
        // select semua kolom yang ada di dalam table kelas
        // dan select kolom nama yang ada di table dosen
        // lalu aliaskan menjadi nama_dosen
        $sql = "SELECT k.*, d.nama AS nama_dosen 
        FROM kelas k 
        /* gabungkan kedua table dengan menggunakan inner join */
        INNER JOIN dosen d ON d.id = k.dosen_id 
        /* lalu urutkan hasilnya berdasarkan data terbaru dipaling atas table */
        ORDER BY k.id DESC";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah di siapkan menggunakan method prepare
        // menggunakan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array
        // menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk dalam bentuk data array yang sudah
        // disimpan ke dalam variable $data;
        return $data;
    }
}
?>
