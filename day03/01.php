<?php
	// 1. 接收客户端的请求数据
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	var_dump($name);
	// 2. 向客户端进行响应
	//echo 'load success.';
	//虽然是以json格式响应，但是客户端接收到数据以后无法用eval转换，只会显示为字符串
	echo '{"name":"zhouzhiruo","pwd":"123"}';
?>