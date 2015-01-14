<html>
	<body>

<h1>PHP The global Keyword</h1>
	<?php
	$x = 5;
	$y = 12;

	function myTest() {
		global $x, $y;
		$y = $x + $y;

		//$GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];

	}
myTest();
echo $y; //outputs 15
?>

<h1>PHP The staic Keyword</h1>
<?php
function myTest2(){
	static $x = 0;
	echo $x;
	$x++;
}

myTest2();
?>
<br>

<?php
myTest2();

echo "<br>";

myTest2();
?>

	</body>
</html>
