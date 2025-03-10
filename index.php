<?php

//Работа с условиями


$nameOne = "John Styles";

$todayOfWeekNumber = date("l");
$todayOfWeekName = date("N");

$johnWorkSchedule="";
$janeWorkSchedule="";

if ($nameOne == "John Styles") {
    if (in_array($todayOfWeekName, [1,3,5]) ) {
        $johnWorkSchedule="8:00-12:00 ";
    } else {
        $johnWorkSchedule="Нерабочий день ";
    }
}

$nameTwo = "Jane Doe";
if ($nameTwo == "Jane Doe") {
    if (in_array($todayOfWeekName, [2,4,6])) {
        $janeWorkSchedule = "12:00-16:00 ";
    } else {
        $janeWorkSchedule = "Нерабочий день";
    }
}
?>

<table border='3' >
<tr><th>Имя</th><th>День недели</th><th>График работы</th></tr>
<tr><td><?php echo $nameOne; ?></td><td><?php echo $todayOfWeekNumber; ?></td><td><?php echo $johnWorkSchedule; ?></td></tr>
<tr><td><?php echo $nameTwo; ?></td><td><?php echo $todayOfWeekNumber; ?></td><td><?php echo $janeWorkSchedule; ?></td></tr>
</table>


<?php


//Работа с циклами for,do-while,while

$a = 0;
$b = 0;
echo "Вывод с помощью for: <br>";
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "a = $a, b = $b <br>";
}
echo "End of the loop: a = $a, b = $b <br><br>";


echo "Вывод с помощью while: <br>";
$a = 0;
$b = 0;
$i = 0;
while ($i <= 5){
    $a += 10;
    $b += 5;
    $i++;
    echo "a = $a, b = $b <br>";
}
echo "End of the loop: a = $a, b = $b <br><br>";


echo "Вывод с помощью do-while: <br>";
$a = 0;
$b = 0;
$i = 0;
do{
    $a += 10;
    $b += 5;
    $i++;
    echo "a = $a, b = $b <br>";
} while ($i <= 5);
echo "End of the loop: a = $a, b = $b <br>";


