<?php
$json_data=file_get_contents("datadiri.json");
$obj = json_decode($json_data);
echo "Nik : "; echo $obj->nik;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Alamat : "; echo $obj->alamat;
echo "<br>";
echo "No_hp : "; echo $obj->no_hp;
echo "<br>";
echo "Mata kuliah pertama: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata kuliah kedua: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata kuliah ketiga: ";echo $obj->mata_kuliah[2];
?>