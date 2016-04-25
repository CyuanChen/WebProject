<?php
include('template.php');
if (isset($_POST)) {
  $content = <<<END
    <h3>Message was sent:</h3>
    Name: {$_POST["name"]}
    <br>
    Message: {$_POST["msg"]}
END;
  $to = "chuche16@student.hh.se";
  $subject = "Test-mail";
  $msg = $_POST["msg"];
  $headers = "From: " . $_POST["name"];
  mail($to, $subject, $msg, $headers);
}
echo $navigation;
echo $content;
?>