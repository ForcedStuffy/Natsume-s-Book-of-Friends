<?php
//为了让网页支持数据库中的中文字符
header('content-type:text/html;charset=utf-8');

// 使用 mysqli_connect() 函数来创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "mysql_db","3306");

// 检查连接是否成功
if (!$conn) {
  die('连接数据库失败：'.mysqli_connect_error());
}

// 从表单中获取用户提交的用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];

// 构造查询语句
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

// 执行查询语句
$result = mysqli_query($conn, $query);

// 检查查询结果，如果有匹配的用户名和密码，则登录成功
if (mysqli_num_rows($result) == 1) {
  // 登录成功，跳转到指定的页面
  header("Location: success.html");
  echo '若浏览器没有反应，请点击<a href="success.html">此处</a> 跳转</span>';
  exit;
} else {
  // 登录失败，跳转回登录页面
  echo '无效的用户名和密码'.'<br>';
  header('Location: login.html');
  echo '若浏览器没有反应，请点击<a href="register.html">此处</a> 跳转';
  exit;
}

// 关闭数据库连接
mysqli_close($conn);