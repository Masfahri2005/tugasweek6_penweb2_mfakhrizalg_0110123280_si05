<?php
include_once('dbkoneksi.php');
include_once('atas.php');

try {
    // Mendapatkan koneksi ke database
    $dbh = new PDO("mysql:host=localhost;dbname=nama_database", "username", "password");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil data kelas dari database
    $query = "SELECT * FROM kelas";
    $statement = $dbh->query($query);
    $kelas = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit(); 
}
?>

<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">kelas</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">kelas</li>
        </ol>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Gedung</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($kelas as $data): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data['dosen_id']?></td>
                        <td><?= $data['hari']?></td>
                        <td><?= $data['waktu']?></td>
                        <td><?= $data['mata_kuliah']?></td>
                        <td><?= $data['gedung']?></td>
                        <td>Edit | Hapus</td>
                    </tr>
                    <?php 
                    $no++;
                endforeach; ?>
            </tbody>
        </table>
        <div style="height: 100vh"></div>
        <div class="card mb-4">
            <div class="card-body">
                When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.
            </div>
        </div>
    </div>
</main>
<?php
include_once('bawah.php');
?>
