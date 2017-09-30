<html>
<body>

<?php
$cookie_name = "user";
$cookie_value = "KC";
setcookie($cookie_name, $cookie_value, time() - 3600);
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?> 

 
</body>
</html>

<!-- 23schools.com (2017), PHP 5 cookie, Available on:https://www.w3schools.com/php/php_cookies.asp, accessible on 17March2017-->