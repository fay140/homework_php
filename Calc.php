<?php
$num1 = $_GET["number1"];
$num2 = $_GET["number2"];
$op = $_GET["op"];

if (empty($num1)) {
    $result ="الرقم الاول فارغ";
}elseif (empty($num2)) {
    $resul = "الرقم الثاني فارغ"
    ; 
    
}elseif (empty($op)) {
    Result = "ادخال العملية";
} else {
if ($op === "+") {
    $result = $num1 + $num2;
} elseif ($op === "-") {
    $result = $num1 - $num2;
} elseif ($op === "*") {
    $result = $num1 * $num2;
} elseif ($op === "/") {
    $result = $num1 / $num2;
} else {
    $result = "Invalid Operation";
}}

$result = $_GET["number1"] + $_GET["number2"] ;
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <from action="calc.php" method="GET" class="from">
            <div>
                <label>Enter Number1:</label>
                <input type="number" id="num1" name="number1" class="from-control">
</div>
<div>
    <label>Enter Number2:</label>
    <input type="number" id ="num2" name="number2" class="from-control">
</div>
<br>
<div>
    <label>العملية:</label>
    <input type="text"  name="op" class="from-control" value="<?php echo $op ?>">
</div>
    <br>

<dive  class="alert alert-success">
    <?php echo $result ?>
</dive>
<br>
<input type="submit" class="btn btn-primary">
</from>
</dive>
</body>
