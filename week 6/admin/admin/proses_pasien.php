<?php
include 'atas.php';
?>

<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Data Pasien</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
            <?php
            if(isset($_POST['submit'])) {
                // Ambil nilai inputan dari form pasien
                $kode = isset($_POST['kode']) ? $_POST['kode'] : '';
                $nama_lengkap = isset($_POST['text1']) ? $_POST['text1'] : '';
                $tempat_lahir = isset($_POST['text2']) ? $_POST['text2'] : '';
                $tanggal_lahir = isset($_POST['text3']) ? $_POST['text3'] : '';
                $jenis_kelamin = isset($_POST['radio']) ? $_POST['radio'] : '';
                $email = isset($_POST['text4']) ? $_POST['text4'] : '';
                $alamat = isset($_POST['textarea']) ? $_POST['textarea'] : '';
                $kelurahan = isset($_POST['select']) ? $_POST['select'] : '';

                // hasil inputan form
                echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th scope='col'>#</th>";
                echo "<th scope='col'>Field</th>";
                echo "<th scope='col'>Value</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                echo "<tr><th scope='row'>1</th><td>Kode</td><td>$kode</td></tr>";
                echo "<tr><th scope='row'>2</th><td>Nama Lengkap</td><td>$nama_lengkap</td></tr>";
                echo "<tr><th scope='row'>3</th><td>Tempat Lahir</td><td>$tempat_lahir</td></tr>";
                echo "<tr><th scope='row'>4</th><td>Tanggal Lahir</td><td>$tanggal_lahir</td></tr>";
                echo "<tr><th scope='row'>5</th><td>Jenis Kelamin</td><td>";
                echo ($jenis_kelamin == 'L') ? 'Laki-Laki' : 'Perempuan';
                echo "</td></tr>";
                echo "<tr><th scope='row'>6</th><td>Email</td><td>$email</td></tr>";
                echo "<tr><th scope='row'>7</th><td>Alamat</td><td>$alamat</td></tr>";
                echo "<tr><th scope='row'>8</th><td>Kelurahan</td><td>$kelurahan</td></tr>";
                echo "</tbody>";
                echo "</table>";

            } else {
                echo "<div style='text-align:center;'>";
                echo "Tolong isi formulir terlebih dahulu!";
                echo "</div>";
            }
            ?>
            </div>
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
