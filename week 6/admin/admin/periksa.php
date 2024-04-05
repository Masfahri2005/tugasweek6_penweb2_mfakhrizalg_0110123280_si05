<?php
include_once('db\dbkoneksi.php');
include_once('atas.php');

try {
    // Ambil data pemeriksaan dari database
    $query = "SELECT * FROM periksa";
    $statement = $dbh->query($query);
    $periksas = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit(); 
}
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pemeriksaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Pemeriksaan</li>
        </ol>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">berat</th>
                        <th scope="col">tinggi</th>
                        <th scope="col">tensi</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">pasien_id</th>
                        <th scope="col">dokter_id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($periksas as $periksa): ?>
                        <tr>
                            <td><?php echo $periksa['id']; ?></td>
                            <td><?php echo $periksa['tanggal']; ?></td>
                            <td><?php echo $periksa['berat']; ?></td>
                            <td><?php echo $periksa['tinggi']; ?></td>
                            <td><?php echo $periksa['tensi']; ?></td>
                            <td><?php echo $periksa['keterangan']; ?></td>
                            <td><?php echo $periksa['pasien_id']; ?></td>
                            <td><?php echo $periksa['dokter_id']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
        </div>
    </div>
</main>

<?php
include_once('bawah.php');
?>
