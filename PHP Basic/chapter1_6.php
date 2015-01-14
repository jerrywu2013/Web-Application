<html>
	<body>
<h1>Create a PHP Constant</h1>

<h2>define</h2>
<?php
//To create a constant, use the define() function.
define("title","welcome to w3cschools.com!");
echo title
?>

<h2>Constants are Global</h2>
<?php
define("title2","welcome to w3cschools.com!");
function myTest(){
	echo title2;
}

myTest();
?>

<br>

	</body>
</html>