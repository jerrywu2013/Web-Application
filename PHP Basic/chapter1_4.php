<html>
	<body>
<h1>Data type</h1>
<h2>PHP String<h2>

<?php
$x = "Hello World!";
$y = 'Hello World!';

echo $x;
echo "<br>";
echo $y;
?>

<h2>PHP Integer<h2>
<?php
	$x = 5985;
	var_dump($x);
?>

<h2>Float</h2>
<?php
	$x = 10.365;
	var_dump($x);
?>

<h2>Boolean</h2>
<?php
$x = true;
$y = false;
var_dump($x)
?>

<h2>PHP Object</h2>
<?php
class Car {
	function Car() {
		$this->model = "VW";
	}
}

//create an object
$herbie = new Car();

//show object 
echo $herbie->model;
?>

<h2>PHP NULL Value</h2>

<?php
$x = "Hello world!";
$x = NULL;
var_dump($x);
?>





	</body>
</html>