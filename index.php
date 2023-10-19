
<?php
echo "Текущий файл: " . __FILE__ . "<br>";
echo "Номер текущей строки: " . __LINE__;
?>

<?php
$Name = "Vovchik";
$age = 40;

$variable = <<<KOD
<br> Привет, меня зовут $Name.<br>
Мне $age лет.<br>
KOD;

echo $variable;

?>

<?php 

$a='Рыба';
$b='человек';

$phrase = $a . ' рыбою сыта, а ' . $b . ' ' . $b . 'ом';

echo $phrase;
?>