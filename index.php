<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Sandbox Project 5</title>
</head>
<body>
<?php
$numArray = array(73, 75, 79, 78, 60, 65, 74, 62, 62, 65, 64, 68, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63,
    75, 76, 73, 68, 62, 73, 72, 73);
sort($numArray);

function average($arr){
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    return $sum / count($arr);
}

echo number_format(average($numArray), 1);
echo "<h3>Highest Numbers</h3>";
echo "<ul>";
for($i=count($numArray)-5;$i < count($numArray);$i++){
    echo "<li> $numArray[$i] </li>";
}
echo "</ul>";

echo "<br>";
echo "<h3> Lowest Numbers</h3>";
echo "<ul>";
for($i=0;$i < 5; $i++){
    echo "<li> $numArray[$i] </li>";
}
?>
</body>
</html>