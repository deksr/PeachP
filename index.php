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

<h3>This us a post form </h3>
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

<h3>This is a GET form. GET may be used for sending non-sensitive data.
 </h3><br>
<form action ="mars.php" method="get">
	<p>Name: <input name="personname" /></p>
	<p>Age: <input name="personage" /></p>
	<input type="submit" value="Submit">
</form>




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

<?php
//global variables. 
$x = 75; 
$y = 25;
function sum(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

sum();
echo $z; 

//in javascript:
// var x = 75;
// var y = 25;
// var z;

// function sum(){
//  z = x + y
// }

// sum()
?>

<hr>
<h3> using $_REQUEST global. The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
</h3> <br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input name="firstname">
  <input type="submit">
</form>


<?php

//http://stackoverflow.com/questions/107683/when-and-why-should-request-be-used-instead-of-get-post-cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['firstname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<hr>

<h3> using $_POST global</h3><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input name="firstname">
  <input type="submit">
</form>

<?php

//PHP $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>


 </body>

</html>