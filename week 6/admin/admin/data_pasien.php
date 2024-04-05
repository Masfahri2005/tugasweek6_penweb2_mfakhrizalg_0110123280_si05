<?php
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM pasien";
$query = $dbh->query($sql);
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="15">No</th>
            <th>Kode</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($query as $row) {
            echo "<tr><td>" . $nomor . "</td><td>" . $row['kode'] .
            "</td><td>" . $row['nama'] . "</td><td>" . $row['alamat'] .
            "</td><td>" . $row['email'] . "</td></tr>";
            $nomor++;
        }
        ?>
    </tbody>
</table>
