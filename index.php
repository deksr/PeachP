<html>

 <head>
  <title>PHP Test</title>
 </head>

 <body>


<?php echo '<p>Hello World</p>'; ?> <br>

<hr>
<?/* php 
  phpinfo()
*/?> 

<hr>

<?php
// here we are using a predefined variable. see phpinfo() for more info
echo $_SERVER['HTTP_USER_AGENT'];
?>

<hr>

<?php
// strpos is a predefined function that takes in two arguments
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}
?>

<hr>
<?php 
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
you are using Internet explorer 
<?php
} else {
?>
you are not using Internet Explorer
<?php
}
?> 

<hr>

<!-- this will return not found on server-->
<form action ="jupiter.php" method="post">
	<p>Planet name: <input name="planetname" /></p>
	<input type="submit" value="Submit">
</form>


<hr>
<!-- this is cool. I like it-->
<form action ="mars.php" method="post">
	<p>Name: <input name="personname" /></p>
	<p>Age: <input name="personage" /></p>
	<input type="submit" value="Submit">
</form>


<hr>
<?php 
//this a variable
$expression = true
?>

<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>

<br>
<hr>
<?php 
//This is an array
$shop = array("cookies", "milkshakes", "icecream");  
echo "I like " . $shop[0];
echo count($shop); // this is to count the length

//loop for an array
//note that . acts as interpolation
for ($i=0; $i < count($shop); $i++) { 
echo " " . $shop[$i];
echo "<br>";
}
?>

<?php 
//This is an array with key value
$bag = array("books" => "2", "pen" => "3", "notepad" => "1");  
echo "there are " . $bag['pen'] . " pens in the bag <br>" 

?>

<?php

//calling methods on array
$fruitbasket = array("papaya", "mango", "watermelon");
sort($fruitbasket);

for ($i=0; $i < count($fruitbasket); $i++) { 
	echo $fruitbasket[$i];
	echo "<br>";
}

?>






 </body>

</html>