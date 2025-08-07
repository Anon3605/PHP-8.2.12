<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operator</title>
</head>
<body>
    <h1>Logical Operators</h1>
    <form action="06logicalOperator.php" method="post">
        <button name="yellow" value="yellow">YELLOW</button>
        <button name="red" value="red">RED</button>
        <button name="blue" value="blue">BLUE</button>
    </form>
</body>
</html>

<?php
$button1 = $_POST['yellow'] ?? null;
$button2 = $_POST['red'] ?? null;
$button3 = $_POST['blue'] ?? null;

if ($button1 || $button2 || $button3) {
    if ($button1 && $button2 && $button3){
        echo "The color is White";
    }
    elseif ($button1 && $button2 && !$button3){
        echo "The color is Orange";
    }
    elseif ($button2 && $button3 && !$button1){
        echo "The color is Violet";
    }
    elseif ($button1 && $button3 && !$button2){
        echo "The color is Green";
    }
    elseif ($button1 && !$button2 && !$button3){
        echo "The color is Yellow";
    }
    elseif ($button2 && !$button1 && !$button3){
        echo "The color is Red";
    }
    elseif ($button3 && !$button1 && !$button2){
        echo "The color is Blue";
    }
} else{
    echo "No color selected yet.";
}
?>
