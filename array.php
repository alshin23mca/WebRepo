<?php
$cars=array("Wolkswagon","Tata","Ford");
echo"Using index value.....";
echo $cars[0];
echo "<br>";
$size=count($cars);
for($i=0;$i<$size;$i++)
{
  echo(" Location ".$i." is ".$cars[$i]);
  echo"<br>";
}

echo "<br>";
echo("Size of the array is: ".$size);

?>
