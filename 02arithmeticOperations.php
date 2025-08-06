<?php

    echo "<h1>Arithmetic Operations</h1>";
    echo "<h1></h1>";
    echo "For operation addition we use +<br>";
    echo "For operation subtraction we use -<br>";
    echo "For operation multiplication we use *<br>";
    echo "For operation division we use /<br>";
    echo "For operation increment we use ++ or +=<br>";
    echo "For operation decrement we use -- or -=<br>";
    echo "For operation exponential we use **<br>";
    echo "For operation modulus we use %<br>";

    $numVar1=12;
    $numVar2=13.2;
    $numVar3=14;
    $numVar4=15.4;
    $numVar5=16;
    $numVar6=17.6;

    echo "The value of the variable numVar1 is {$numVar1}<br>";
    echo "The value of the variable numVar2 is {$numVar2}<br>";
    echo "The value of the variable numVar3 is {$numVar3}<br>";
    echo "The value of the variable numVar4 is {$numVar4}<br>";
    echo "The value of the variable numVar5 is {$numVar5}<br>";
    echo "The value of the variable numVar6 is {$numVar6}<br>";

    $sum=$numVar1+$numVar6;
    $sub=$numVar2-$numVar5;
    $mul=$numVar3*$numVar4;
    $div=$numVar4/$numVar3;
    $incr=$numVar5+=$numVar2;
    $decr=$numVar6-=$numVar1;
    $pow=$numVar1**$numVar5;
    $mod=$numVar6%$numVar1;

    echo "Summation is {$sum}<br>";
    echo "Subtraction is {$sub}<br>";
    echo "Multiplication is {$mul}<br>";
    echo "Division is {$div}<br>";
    echo "Increment is {$incr}<br>";
    echo "Decrement is {$decr}<br>";
    echo "Power is {$pow}<br>Sick init?!<br>";
    echo "Modulus is {$mod}<br>";
    echo "See the code";

    /*
    This is the  Operator Precedence:
    () --> ** --> * or / or % --> + or -
    */
?>