<?php
include_once('db\dbkoneksi.php');
include_once('atas.php');

try {
    // Ambil data paramedik dari database
    $query = "SELECT * FROM paramedik";
    $statement = $dbh->query($query);
    $paramedik = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit(); 
}
?>

                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Paramedik</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">gender</th>
      <th scope="col">tmp_lahir</th>
      <th scope="col">tgl_lahir</th>
      <th scope="col">telepon</th>
      <th scope="col">alamat</th>
      <th scope="col">unit_kerja_id</th>
    </tr>
  </thead>
  <tbody>
                <?php foreach ($paramedik as $paramedik): ?>
                    <tr>
                        <td><?php echo $paramedik['id']; ?></td>
                        <td><?php echo $paramedik['nama']; ?></td>
                        <td><?php echo $paramedik['gender']; ?></td>
                        <td><?php echo $paramedik['tmp_lahir']; ?></td>
                        <td><?php echo $paramedik['tgl_lahir']; ?></td>
                        <td><?php echo $paramedik['telepon']; ?></td>
                        <td><?php echo $paramedik['alamat']; ?></td>
                        <td><?php echo $paramedik['unit_kerja_id']; ?></td>
                    </tr>
                <?php endforeach; ?>
  </tbody>

</table>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
<?php
include_once(bawah.php);
?>

