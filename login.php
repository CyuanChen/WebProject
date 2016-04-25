<?php
include('template.php');
if (isset($_POST['username']) and isset($_POST['password']))
{
  $name = $mysqli->real_escape_string($_POST['username']);
  $pwd = $mysqli->real_escape_string($_POST['password']);
  $query = <<<END
  SELECT username, password, id FROM users 
  WHERE username = '{$name}'
  AND password = '{$pwd}'
END;
  $result = $mysqli->query($query);
  if ($result->num_rows > 0) {
    $row = $result->fetch_object();
    $_SESSION["username"] = $row->username;
    $_SESSION["userId"] = $row->id;
    print_r($_SESSION);
    // Send the successful login to the index.php
    header("Location:index.php");
  } else {
    echo "Wrong username or password. Try again.";
  }
}
$content = <<<END
<form action="login.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" value="Login">
</from> 
END;
echo $navigation;
echo $content;
?>