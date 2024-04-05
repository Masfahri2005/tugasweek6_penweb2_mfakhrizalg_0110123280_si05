<!-- Dashboard -->
<?php include 'atas.php'; ?>
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Dashboard</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <p>
                    <strong>PHP Koneksi ke Database</strong><br>
                    PHP adalah bahasa pemrograman yang sering digunakan untuk membuat situs web dinamis. Salah satu fitur paling penting dari situs web dinamis adalah kemampuan untuk berinteraksi dengan database. PHP menyediakan berbagai cara untuk terhubung ke database, salah satunya adalah menggunakan PDO (PHP Data Objects).
                </p>
                <p>
                    <strong>Menggunakan PDO</strong><br>
                    PDO adalah ekstensi PHP yang menyediakan antarmuka untuk berkomunikasi dengan berbagai jenis database. Langkah-langkah umum untuk membuat koneksi PDO ke database adalah sebagai berikut:
                </p>
                <ol>
                    <li>Persiapkan Informasi Koneksi: Anda perlu menyiapkan informasi seperti host database, nama pengguna, kata sandi, dan nama database yang akan diakses.</li>
                    <li>Buat Objek Koneksi: Setelah informasi koneksi disiapkan, Anda dapat membuat objek koneksi menggunakan PDO dengan menyediakan informasi tersebut.</li>
                    <li>Lakukan Koneksi: Gunakan objek koneksi untuk terhubung ke database dengan memanggil metode PDO::connect().</li>
                    <li>Eksekusi Query: Setelah terhubung, Anda dapat mengeksekusi query SQL menggunakan objek koneksi untuk mengambil atau memanipulasi data dalam database.</li>
                </ol>
                <p>
                    Dengan menggunakan PDO, Anda dapat menghubungkan situs web PHP Anda ke berbagai jenis database, seperti MySQL, PostgreSQL, SQL Server, dan lain-lain, dengan cara yang aman dan efisien.
                </p>
            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
        </div>
    </div>
</main>
<?php include 'bawah.php'; ?>

<!-- ini css buat paragraf ! -->
<style>
p {
    font-size: 16px; 
    line-height: 2; 
    margin-bottom: 20px; 
}
strong {
    font-weight: bold; 
}
ol {
    margin-top: 10px; 
    margin-bottom: 20px; 
}
ol li {
    margin-bottom: 10px;
}
.card {
    border: 1px solid #ddd; 
    border-radius: 5px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}
h1 {
    font-size: 24px; 
    margin-bottom: 20px;
}
.breadcrumb {
    background-color: #f8f9fa; 
    padding: 10px 15px; 
    border-radius: 5px;
}
.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}
.breadcrumb-item.active {
    color: #6c757d;
}
.breadcrumb-item a:hover {
    text-decoration: underline; 
    opacity: 0.8;
}
</style>