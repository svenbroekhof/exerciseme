<br>
<br>
<?php
include('./class_calorien.php');

$training1 = new Calorien(['trainingnaam'=>'Test', 'zwaarheid'=>'Middel']);
$training1->set_calorien(250);

echo $training1->get_trainingnaam();
echo $training1->get_calorien();
echo $training1->get_zwaarheid();

echo'<br>';

$training2 = new Calorien(['trainingnaam'=>'100 Push-ups', 'zwaarheid'=>'Zwaar']);
$training2->set_calorien(100);

echo $training2->get_trainingnaam();
echo $training2->get_calorien();
echo $training2->get_zwaarheid();
?>