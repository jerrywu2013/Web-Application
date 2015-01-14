<html>
	<body>
<h1>PHP Strings</h1>

<h2>Get The Length of a String</h2>
<?php
//The PHP strlen() function returns the length of a string (number of characters).
echo strlen("Hello world!"); //outputs 12
?>
<br>
<h2>Count The Numeber of Words in a String</h2>	
<?php
//The PHP str_word_count() function counts the number of words in a string.	
echo str_word_count("Hello world! aaa ttt"); // outputs 2
?>
<h2>Reverse a String</h2>
<?php
echo strrev("Hello world!");
?>

<h2>Search For a Specific Text Within a String</h2>
<?php
echo strpos("Hello aworldd!","worldd");
?>

<h2>Replace Text Within a String</h2>
<?php
echo str_replace("world","Dolly","Hello world!"); //outputs hello dolly!
?>
	</body>
</html>