<?php

session_start();

header('Access-Control-Allow-Origin: http://127.0.0.1:88');


// Database connection
$conn = new mysqli('localhost','root','','team');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} 

$base_url='team/';

$request = explode($base_url,$_SERVER['REQUEST_URI']);

$page =  explode('?',$request[1]);


	if(!empty($page[0])){
		if(file_exists('app/'.$page[0].'.php'))
		include 'app/'.$page[0].'.php';
		else
		include 'app/404.php';
	}else{
		include 'app/index.php';
	}
?>