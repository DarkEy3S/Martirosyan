<?php

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

$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
  echo "Такое пользователь не найден";
  exit();
}

setcookie('user', $user['id'], time() + 3600 * 24, "/");

$mysql->close();

header('Location: /');
