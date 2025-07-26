<?php
echo "<br>";
echo "ARRAY Indexed Array";
echo "<br>";

$buah = ["Apel", "Jeruk", "Mangga"];
echo $buah[0];
echo "<br>";
echo $buah[1];

echo "<br><br>";
echo "ARRAY Associative Array";
echo "<br>";

$mhs = [
    "nama" => "Kevin",
    "nim" => "123456",
    "jurusan" => "Menyelam kedasar lautan"
];
echo $mhs["nama"];
echo "<br>";
echo $mhs["nim"];
echo "<br>";
echo $mhs["jurusan"];

echo "<br><br>";
echo "ARRAY Multidimensional Array";
echo "<br>";

$multiArr = [
    ["Budi", "123", "Informatika"],
    ["Ani", "124", "Sistem Informasi"],
];
echo $multiArr[0][0];
echo ", ";
echo $multiArr[1][2]; 

echo "<br>";
echo "<br>";

for ($i=0; $i< count ($buah); $i++) {
    echo $buah [$i]."<br>";
}
?>
<br>
<a href="index.php">Kembali ke menu utama</a>
