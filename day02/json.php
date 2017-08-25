<?php
	$state = $_REQUEST["state"];
	if($state==1){
		//响应的两种方式
		//1
		//$json='["山东省","辽宁省","吉林省"]';
		//$json_a=json_decode($json,true);
		//var_dump($json_a);用于测试
		//echo json_encode($json_a);
		//2
		echo '["山东省","辽宁省","吉林省"]';
	}else{
		/*echo '{
		"山东省":["青岛市","济南市","威海市","日照市","德州市"],
		"辽宁省":["沈阳市","大连市","铁岭市","丹东市","锦州市"],
		"吉林省":["长春市","松原市","吉林市","通化市","四平市"]
	}';*/
		$province = $_POST['province'];
	switch ($province){
		case '山东省':
			echo '["青岛市","济南市","威海市","日照市","德州市"]';
			break;
		case '辽宁省':
			echo '["沈阳市","大连市","丹东市","铁岭市","锦州市"]';
			break;
		case '吉林省':
			echo '["长春市","松原市","通化市","四平市","白城市"]';
			break;
	}
	}
?>