<html>

 <head>
  <title>PHP Test</title>
 </head>

 <body>


<?php echo '<p>Hello World</p>'; ?> 

<?/* php 
  phpinfo()
*/?>

<?php
// here we are using a predefined variable. see phpinfo() for more info
echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php
// strpos is a predefined function that takes in two arguments
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}
?>


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

<!-- this will return not found on server-->
<form action ="jupiter.php" method="post">
	<p>Planet name: <input name="planetname" /></p>
	<input type="submit" value="Submit">
</form>


<!-- this is cool. I like it-->
<form action ="mars.php" method="post">
	<p>Name: <input name="personname" /></p>
	<p>Age: <input name="personage" /></p>
	<input type="submit" value="Submit">
</form>


 </body>

</html>