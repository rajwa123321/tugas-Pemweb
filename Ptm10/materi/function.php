<?php
echo "<h1>Materi Function</h1>";
echo "function tanpa parameter";
echo "<br>";
function salam(){
    echo "hallo PHP <br>";
}
salam();

echo "<br>";
echo "function dengan parameter";
echo "<br>";
function namaAnda($name){
    echo "selamat datang di dalgona, $name!<br>";
}

namaAnda("user");
echo "<br>";
echo "function dengan return value";
echo "<br>";
function jumlah($a, $b){
    return $a + $b;
}

$hasil = jumlah (156, 53);
echo "Hasil pemjumlahan : $hasil";

echo "<br>";    
echo "<br>";
echo "function dengan parameter default";
echo "<br>";
function sambal($name="User") {
echo "Selamat datang di PHP,
$name!<br>";
}
sambal("user");
?>
<br>
<a href="index.php">kembali ke menu utama</a>
