<html>
	<body>
<h1>PHP Arrays</h1>

<h2>PHP Indexed Arrays</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<h2>Get The Length of an Array - The count() Function</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

<h2>Loop Through an Indexed Array</h2>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>


	</body>
</html>