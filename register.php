<?php
//为了让网页支持数据库中的中文字符
header('content-type:text/html;charset=utf-8');

// 使用 mysqli_connect() 函数来创建数据库连接
$conn = mysqli_connect("localhost", "root", "", "mysql_db","3306");

// 检查连接是否成功
if (!$conn) {
  die('连接数据库失败：'.mysqli_connect_error());
}
// 从表单中获取用户提交的注册信息
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// 构造插入语句
$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

// 执行插入语句
$result = mysqli_query($conn, $query);

// 检查插入结果，如果插入成功，则注册成功
if ($result) {
  // 注册成功，跳转到指定的页面
  header('Location: success.html');
  exit;
} else {
  echo $mysqli_stmt->error;
  // 注册失败，跳转回注册页面
  header('Location: register.html');
  exit;
}

// 关闭数据库连接
mysqli_close($conn);

?>