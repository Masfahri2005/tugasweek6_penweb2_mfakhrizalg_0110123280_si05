<?php
include_once('db\dbkoneksi.php');
include_once('atas.php');

try {
    // Ambil data kelurahan dari database
    $query = "SELECT * FROM kelurahan";
    $statement = $dbh->query($query);
    $kelurahan = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit(); 
}
?>
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Kelurahan</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelurahan</li>
        </ol>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kecamatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kelurahan as $index => $data): ?>
                        <tr>
                            <th scope="row"><?php echo $index + 1; ?></th>
                            <td><?php echo $data['id']; ?></td>
                            <td class="nama"><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['kecamatan']; ?></td>
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
include 'bawah.php'; 
?>
