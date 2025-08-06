<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Control</title>
</head>
<body>
    <h1>Flow Control</h1>
    <form action="05flowControl.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="number" name="birth" placeholder="Year of Birth"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br> 
        <button>Submit</button>
    </form>
</body>
</html>

<?php
    $test01=null;
    $test02=null;
    $test03=null;
    $test01=$_POST["username"];
    $test02=date("Y")-$_POST["birth"];
    $test03=$_POST["email"];
    echo "Your name is {$test01} and age is {$test02}<br>";
    echo "Email is {$test03}<br>";
    if ($test01==null){
        if($test02==null){
            if($test03==null){
            echo "Yo fillup the goddamn form!!!";
            }    
        }
    }
    else{
        if($test02==0){
            echo "Welcome to the world future mobster";
        }
        elseif($test02<=18){
            echo "You wanna sell drugs or be a broker?";
        }
        elseif($test02<=80){
            echo "Pray to god, gonna die anyway";
        }
        elseif($test02>100){
            echo "Are you from jurasic park or something? have any muscle init?";
        }
        else{
            echo "You are able to go and see 18+ videos";
        }
    }
?>