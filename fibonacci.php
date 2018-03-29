<form method="POST">
<input type="number" name="num" />
<input type="submit" name="submit"/>
<//form>  

<?php
if (isset($_POST['submit'])) $input = $_POST['num'];
else $input = 1;

echo "input $input : ";
showData($input);

function showData($n) {
	$angka_sebelumnya = 0;
	$angka_sekarang = 1;
	$total = 0;
	for ($i=0; $i<$n; $i++)
	
{
  $output = $angka_sekarang + $angka_sebelumnya;
  $total += $output;

  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
} 
echo "$total";
echo"<br>";
}
?>
