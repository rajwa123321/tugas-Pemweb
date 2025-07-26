<?php
echo "<br>"; 
echo "<br>";
echo "for untuk Indexed Array:";
echo "<br>";
$buah=["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
echo $buah [$i]."<br>";
}

echo "<br>"; 
echo "<br>";
echo "foreach untuk Associative Array:";
echo "<br>";

$mahasiswa = [
    "nama" => "budi",
    "nim" => "123452452",
    "jurusan" => "informatika"
];
foreach ($mahasiswa as $key => $value){
    echo "$key : $value <br>";
}
echo "<br>";
?>
<br>
<a href="index.php">kembali ke menu utama</a>
