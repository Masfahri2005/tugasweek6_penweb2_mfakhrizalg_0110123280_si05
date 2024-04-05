<?php
include_once('atas.php');
include_once('db\dbkoneksi.php');

try {
    // Ambil data pasien dari database
    $query = "SELECT * FROM pasien";
    $statement = $dbh->query($query);
    $pasiens = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Tangani error jika terjadi kesalahan dalam query
    echo "Error: " . $e->getMessage();
    exit(); // Hentikan eksekusi skrip jika terjadi error
}
?>

<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3 class="me-auto">Pasien</h3>
            <a href="form_pasien.php" class="btn btn-primary">Tambah Pasien</a>
        </div>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Pasien</li>
        </ol>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pasiens as $pasien): ?>
                    <tr>
                        <td><?php echo $pasien['kode']; ?></td>
                        <td><?php echo $pasien['nama']; ?></td>
                        <td><?php echo $pasien['tmp_lahir']; ?></td>
                        <td><?php echo $pasien['tgl_lahir']; ?></td>
                        <td><?php echo $pasien['gender']; ?></td>
                        <td><?php echo $pasien['email']; ?></td>
                        <td><?php echo $pasien['alamat']; ?></td>
                        <td><?php echo $pasien['kelurahan_id']; ?></td>
                        <td class="action">
                            <a href="form_pasien.php" class="btn btn-primary">Edit</a>
                            <a href="form_pasien.php" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div style="height: 100vh"></div>
        <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
        </div>
    </div>
</main>

<?php include_once('bawah.php'); ?>

<style>
    .action {
        white-space: nowrap; 
    }

    .action a {
        margin-right: 5px; 
    }
</style>
