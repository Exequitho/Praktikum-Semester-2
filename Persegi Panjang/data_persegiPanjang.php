<?php
require_once 'class_persegiPanjang.php';

$persegiPanjang1 = new PersegiPanjang(678,970);

echo "Woy ngitung yang bener lah, luasnya: ".$persegiPanjang1->luas();
echo "<br>";
echo "Woy ngitung yang bener lah, kelilingnya: ".$persegiPanjang1->keliling();
echo "<br>";
?>