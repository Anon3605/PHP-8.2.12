<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Order</title>
</head>
<body>
    <h1>Understanding GET & POST Method Part03</h1>
    <form action="03example.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username"><br><br>
        <label for="burger">Burger Quantity: </label>
        <input type="number" min="0" name="bQuantity"><br><br>
        <label for="sausage">Sausage Quantity</label>
        <input type="number" min="0" name="sQuantity"><br><br>
        <button >Submit</button>
    </form>
</body>
</html>

<?php
echo "Our Customer {$_POST["username"]} wants:<br>";
$burgerCost=$_POST["bQuantity"]*10; //post will only take the name
$sausageCost=$_POST["sQuantity"]*5; //post will only take the name
echo "{$_POST["bQuantity"]} of burgers which costs {$burgerCost}<br>";
echo "{$_POST["bQuantity"]} of sausages which costs {$sausageCost}<br>";
$total=$burgerCost+$sausageCost;
echo "Total cost is {$total}";
?>