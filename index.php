<?php

//Работа с условиями


$name = "John Styles";
$days = date("l");

$timework = date("N");
$Jonhgraf="";
$Janegraf="";

if ($name == "John Styles") {
    if (in_array($timework, [1,3,5]) ) {
        $Jonhgraf="8:00-12:00 ";
    } else {
        $Jonhgraf="Нерабочий день ";
    }
}

$name1 = "Jane Doe";
if ($name1 == "Jane Doe") {
    if (in_array($timework, [2,4,6])) {
        $Janegraf = "12:00-16:00 ";
    } else {
        $Janegraf = "Нерабочий день";
    }
}

echo "<table border='3' >";
echo "<tr><th>Имя</th><th>День недели</th><th>График работы</th></tr>";
echo "<tr><td>{$name}</td><td>{$days}</td><td>{$Jonhgraf}</td></tr>";
echo "<tr><td>{$name1}</td><td>{$days}</td><td>{$Janegraf}</td></tr>";
echo "</table>";






//Работа с циклами for,do-while,while

$a = 0;
$b = 0;
echo "Вывод с помощью for: \n";
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "a = $a, b = $b \n";
}
echo "End of the loop: a = $a, b = $b \n\n";


echo "Вывод с помощью while: \n";
$a = 0;
$b = 0;
$i = 0;
while ($i <= 5){
    $a += 10;
    $b += 5;
    $i++;
    echo "a = $a, b = $b \n";
}
echo "End of the loop: a = $a, b = $b \n\n";


echo "Вывод с помощью do-while: \n";
$a = 0;
$b = 0;
$i = 0;
do{
    $a += 10;
    $b += 5;
    $i++;
    echo "a = $a, b = $b \n";
} while ($i <= 5);
echo "End of the loop: a = $a, b = $b \n";


