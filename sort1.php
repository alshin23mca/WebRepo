
<?php
$students = array("5"=>"SIDHARATH","10"=> "AMAL","15"=> "DON","20"=> "SHELL","25"=>"ALSHIN");
echo "Original Array:\n<br>";
print_r($students);
echo "\n<br>  Ascending Order\n<br>";
ksort($students);
print_r($students);
echo "\n<br>  Descending Order\n<br>";
krsort($students);
print_r($students);

?>
