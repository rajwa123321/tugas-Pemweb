<?php
$nama = $_POST['nama'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobi = $_POST['hobi'] ?? [];
$jurusan = $_POST['jurusan'] ?? '';

echo "Halo, $nama <br>";
echo "Gender: $gender <br>";
echo "Hobi:" . implode(", ", $hobi). "<br>";
echo "Jurusan: $jurusan";
echo "<br>";
echo "<br>"
?>

<a href="../materi/index.php">Kembali ke menu utama</a>
