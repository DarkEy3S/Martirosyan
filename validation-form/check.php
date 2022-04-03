
<?php
$email = filter_var(
  trim($_POST['email']),
  FILTER_SANITIZE_STRING
);

$login = filter_var(
  trim($_POST['login']),
  FILTER_SANITIZE_STRING
);

$pass = filter_var(
  trim($_POST['password']),
  FILTER_SANITIZE_STRING
);


$pass = md5($pass . "gjfaklgja5423");


require "../blocks/connect.php";

$mysql->query("INSERT INTO `user` (`email`,`login`,`pass`)
VALUES('$email', '$login', '$pass')");

header('Location: /');
