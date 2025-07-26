<h1>Struktur Kontrol switch</h1>
<?php
$role = "admin";
switch ($role){
    case "admin":
        echo "Akses penuh ke sistem";
        break;
    case "mahasiswa" :
        echo "Akses data mahasiswa";
        break;
    case "dosen":
        echo "Akses pengisisan KRS";
        break;
    default :
    echo "role tidak dikenal!";
}
?>
<br>
<a href="index.php">kembali ke menu utama</a>
