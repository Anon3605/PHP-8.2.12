<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Mathmatical Function</title>
</head>
<body>
    <h1>Basic Mathmatical Function</h1>
    <form action="04mathFunction.php" method="post">
        <label for="multipurpose"><b>Give the line value : </b></label><br><br>
        <input type="number" min=0 name="multipurpose"><br><br>
        <label for="recta"><b>Give another line value : </b></label><br><br>
        <input type="number" min=0 name="line02"><br><br>
        <button>submit</button><br><br>
    </form>
</body>
</html>

<?php
    $line01=$_POST["multipurpose"];
    $circleArea=pi()*pow($line01,2);
    $circumference=2*pi()*$line01;
    $square=pow($line01,2);
    $line02=$_POST["line02"];
    echo "The lineA = {$line01} <br>And lineB = {$line02}<br>";
    $rectengaArea=$line01*$line02;
    echo "The area of a circle using line 01 is {$circleArea}<br>";
    echo "The circumference of a circle using line 01 is {$circumference}<br>";
    echo "The area of a square using line 01 is {$square}<br>";
    echo "The area of a rectangle using line 01 and line 02 is {$rectengaArea}<br>";
    echo "Rounding them up to 2 decimal value, we get";
    $round1=round($circleArea,2);
    $round2=round($circumference,2);
    $round3=round($square,2);
    $round4=round($rectengaArea,2);
    echo "The area of a circle using line 01 is {$round1} unit^2<br>";
    echo "The circumference of a circle using line 01 is {$round2} unit<br>";
    echo "The area of a square using line 01 is {$round3} unit^2<br>";
    echo "The area of a rectangle using line 01 and line 02 is {$round4} unit^2<br>";

    echo "Volume of the spheres: ";
    $vol1=4/3*pi()*pow($line01,3);
    $vol2=4/3*pi()*pow($line02,3);
    echo "{$vol1}, {$vol2} unit^3";
?>