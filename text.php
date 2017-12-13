<?php
	$arr = array("a"=>1,"b"=>2);
	$result = json_encode($arr);
	$callback = $_GET['callback'];
	echo $callback."($result)";
?>