<?php

// 设置响应头信息
header('Content-Type:text/html;charset=utf-8');

// $user = $_GET['user'];// 接收用户账号
// $pass = $_GET['pass'];// 接收用户密码

// $user = $_POST['user'];// 接收用户账号
// $pass = $_POST['pass'];// 接收用户密码

$user = $_REQUEST['user']; // 接收用户账号
$pass = $_REQUEST['pass']; // 接收用户密码



if ($user === '11223344' && $pass === '123456') {
  echo '登录成功';
} else {
  echo '登录失败';
}
