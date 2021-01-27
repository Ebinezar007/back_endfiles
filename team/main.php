<?php

session_start();

$background_url='http://localhost/team/';
$base_url='/';

$request = explode($base_url,$_SERVER['REQUEST_URI']);

$page =  explode('?',$request[2]);

	$access = file_get_contents($background_url."user");

	if(!empty($page[0])){
		if(file_exists($access.'/'.$page[0].'.php'))
		include $access.'/'.$page[0].'.php';
		else
		include $access.'/404.php';
	}else{
		include $access.'/index.php';
	}

?>