<html>
	<body>

<h1>Local Scope</h1>

<?php
function myTest2(){
	$y = 9; // local scope
	echo "<p>Variable y inside function is: $y</p>";
}
myTest2();
// using x outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";

?>

	</body>
</html>
