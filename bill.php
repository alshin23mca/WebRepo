
<html>
<head>
<title>Electricity Bill Calculator</title>
</head>
<body bgcolor="skyblue">

<center>
<?php
function calculateBill($units, $fixedCharge, $variableCharge) {
    return $fixedCharge + ($units * $variableCharge);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consumedUnits =($_POST['units']);
    $fixedCharge = 50; 
    $variableCharge = 5;
    $electricityBill = calculateBill($consumedUnits, $fixedCharge, $variableCharge);
    echo "<h2><i>Electricity Bill</i></h2>";
    echo "<p>Consumed Units: $consumedUnits</p>";
    echo "<p>Fixed Charge: $fixedCharge</p>";
    echo "<p>Variable Charge per Unit: $variableCharge</p>";
    echo "<p>Total Bill: $electricityBill</p>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="units">Enter Consumed Units:</label>
    <input type="number" name="units" required>
    <br><br>
    <input type="submit" value="Calculate Bill">
</form>
</center>
</body>
</html