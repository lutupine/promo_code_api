<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');
header('Content-type: application/json; charset=utf-8');
require_once('config/db.php');
$post_data = json_decode(file_get_contents('php://input'));
$header_data =  apache_request_headers();
echo $header_data;
echo $post_data;
