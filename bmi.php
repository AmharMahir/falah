<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php include'header.php';?>
<center>

<h2>BMI Calculator</h2>
<form method="GET" action="bmi.php">
Weight (kg):
<input type="text" name="weight" required>
<br><br>
Height  (m):
<input type="text" name="height" required>
<br><br>
<input type="submit" name="submit" value="Calculate">
</form></center>
<?php
if (isset($_GET['submit'])) {
$weight = $_GET['weight'];
$height = $_GET['height'];
function bmi($weight,$height) {
$bmi = $weight/($height*$height);
return $bmi;
}
$bmi = bmi($weight,$height);
if ($bmi <= 18.5) {
$output = "Under Weight";
} else if ($bmi > 18.5 AND $bmi<=24.9 ) {
$output = "Normal Weight";
} else if ($bmi > 24.9 AND $bmi<=29.9) {
$output = "Over Weight";
} else if ($bmi > 30.0) {
$output = "OBESE";
}
$bmi=number_format($bmi, 2, '.', '');
echo "Your BMI value is " . $bmi . " and you are : ";
echo "$output";
}
else{
  echo "please insert your height and weight";
}
?>
<br />
<br />
<?php include'footer.php';?>
</body>
</html>
