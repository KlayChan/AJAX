<?php 
// 校验表单是否为空
if (empty($_POST['username']) || empty($_POST['pwd'])) {
	exit('请提交用户名和密码');
}
// 匹配信息
if ($_POST['username'] !== '张三' || $_POST['pwd'] !== '123') {
   exit('用户名或密码错误');
}else {
	exit('恭喜你');
}
// 响应


 ?>