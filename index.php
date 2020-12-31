<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="Author" content="Brian Chalfant">
    <meta name="Course" content="CSCI 3632 - Internet Programming">
    <meta name="Project Number" content="5">
    <title>PHP Sandbox Project 5</title>
</head>
<body>
<div class="content">
<?php
/*
 * Array of numbers to be used based on Project Criteria
 * */
$numArray = array(73, 75, 79, 78, 60, 65, 74, 62, 62, 65, 64, 68, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63,
    75, 76, 73, 68, 62, 73, 72, 73);
// Sort for easy manipulation
sort($numArray);

/*
 * average function returns the average of the values of an array
 * */
function average($arr){
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    return $sum / count($arr);
}
// display the average formatted to the first decimal place
echo "<h1>Average: " . number_format(average($numArray), 1)."</h1>";
echo "<ul><li>Highest Numbers:";
for($i=count($numArray)-5;$i < count($numArray);$i++){
    echo " $numArray[$i] ";
}
echo "</li><br><li> Lowest Numbers:";
for($i=0;$i < 5; $i++){
    echo " $numArray[$i] ";
}
echo "</li></ul>"
?>
<form method="post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="pic1">Picture 1 URL</label>
    <input type="text" id="pic1" name="pic1">
    <label for="pic2">Picture 2 URL</label>
    <input type="text" id="pic2" name="pic2">
    <label for="pic3">Picture 3 URL</label>
    <input type="text" id="pic3" name="pic3">
    <button type="submit">Submit</button>
</form>
</div>
<div class="images">
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $picOneURL = $_POST["pic1"];
    $picTwoURL = $_POST["pic2"];
    $picThreeURL = $_POST["pic3"];
    echo "<img src=$picOneURL  alt='User-defined Image'>";
    echo "<p class='desc'>$picOneURL</p>";
    echo "<img src=$picTwoURL  alt='User-defined Image'>";
    echo "<p class='desc'>$picOneURL</p>";
    echo "<img src=$picThreeURL  alt='User-defined Image'>";
    echo "<p class='desc'>$picOneURL</p>";

}

?>
</div>
</body>
</html>