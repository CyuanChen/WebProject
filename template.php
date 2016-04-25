<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<?php
session_name('Website');
session_start();
$host = "localhost";
$user = "cyuche16";
$pwd = "8PnWQ7r4Xc";
$db = "cyuche16_db";
$mysqli = new mysqli($host, $user, $pwd, $db);
$navigation = <<<END
<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="product.php">Products</a>
END;
if (isset($_SESSION['userId'])) 
{
  $navigation .= <<<END
  <a href="logout.php">Logout</a>
  <a href="add_product.php">Add_product</a>
  <br>
  Login in as {$_SESSION['username']}
END;
} else {
  $navigation .= <<<END
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
END;
}
//print_r($_SESSION);
$navigation .= '</nav>';
?>