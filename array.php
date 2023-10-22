<from action = "array.php" method="GET">
    <input type="text" name="student">
    <input type="submit">
</from>
<?php
$name = $_GET["name"];
$score = [
    "Fay" => [90,"A"],
 "Sami" => [80,"C"],
 "Ahmed" =>[70,"D"],
    "Nour" => [20,"F"]
 ];
echo "score:" . $score[$name][0];
echo "<br>";
echo "Grade"   .  $score[$name][1];
