<html>
	<body>
	<h1>My first PHP page</h1>

	<?php
	echo "Hello World!";
	?>

<h1>Comments in PHP</h1>
<?php
############################################################
// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;

############################################################
?>
<h1>PHP Case Sensitivity</h1>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>


<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

<h1>PHP Variables</h1>
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>
<br>
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>
<br>
<?php
$txt = "W3Schools.com";
echo "I love" . $txt . "!";
?>

<h1>Global Scope</h1>

<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    // echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>




	</body>
</html>