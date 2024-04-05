<?php
include_once('db\dbkoneksi.php');
include_once('atas.php');

try {
    // Ambil data unit kerja dari database
    $query = "SELECT * FROM unit_kerja";
    $statement = $dbh->query($query);
    $unit_kerjas = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit(); 
}
?>
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Unit Kerja</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Unit Kerja</li>
        </ol>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unit_kerjas as $index => $unit_kerja): ?>
                        <tr>
                            <th scope="row"><?php echo $index + 1; ?></th>
                            <td><?php echo $unit_kerja['id']; ?></td>
                            <td class="nama"><?php echo $unit_kerja['nama']; ?></td>
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
