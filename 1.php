<?php 
$a=9999;//jumlah kura kura sulcatar
$b=90;//periode melahirkan
$c=365;//total jumlah hari
$d=21.1/100;//kematian kura kura
// hitung jumlah perperiode melahirkan
$jumlah=$a-($a*$d);
echo "jumlah sekali melahirkan:".$jumlah." ekor <br>";
// hitung jumlah selama 365 hari
$jumlahtotal=$c/$b*$jumlah;
echo "jumlah melahirkan dalam 365 hari:".$jumlahtotal." ekor <br>";
 ?>