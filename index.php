<?php
/**
 * Created by PhpStorm.
 * Author: Sabbir
 * Date: 4/8/2018
 * Time: 12:50 PM
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Api, Method');
header('Content-type: application/json; charset=utf-8');
require_once('config/db.php');
$request = json_decode(file_get_contents('php://input')); /*echo json_encode($request);*/
$request_header =  apache_request_headers();//die;
$api = $request_header['Api'];
$method = $request_header['Method'];
$api_user = $request_header['ApiUser'];
$api_key = $request_header['ApiKey'];
//API Authentication & Authorizations
Switch($api){
    case 'hot_deals':
        require_once'hot_deals.php';
        break;
    case 'featured_deals':
        require_once'featured_deals.php';
        break;
    case 'categories':
        require_once'categories.php';
        break;
    default:
        $response['status'] = 0;
        $response['message'] = 'Error Occurred';
        echo json_encode($response);
        break;
}
