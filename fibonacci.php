<?php

$input1 = 4;
$input2 = 7;
  

echo "input $input1 : ";
showData($input1);

echo "input $input2 : ";
showData($input2);

function showData($n) {
	$angka_sebelumnya = 0;
	$angka_sekarang = 1;
	
	echo "$angka_sebelumnya $angka_sekarang";
for ($i=0; $i<$n; $i++)
{
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output";

  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
} 
echo"<br>";
}
?>