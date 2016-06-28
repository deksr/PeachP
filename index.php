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
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}
?>

 </body>

</html>