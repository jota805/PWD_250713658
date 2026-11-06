<?php
echo "<h1>Data Jurusan</h1>";
echo '<form method="POST" action="">';
    echo '<p>Nama : <br/><input type="text" name="nama" /></p>';
    echo '<p>NPM : <br/><input type="text" name="npm" /></p>';
    echo '<p>Jurusan : <br/><input type="text" name="jurusan" /></p>';
    echo '<button type="submit">Kirim</button>';
echo '</form>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];

    echo "Jurusan " . htmlspecialchars($nama) . " / " . htmlspecialchars($npm) . " adalah " . htmlspecialchars($jurusan);
} else {
    echo "Silakan isi formulir di atas untuk mengirimkan data jurusan Anda.";
}
?>

