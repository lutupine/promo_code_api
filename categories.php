<?php
/**
 * Created by PhpStorm.
 * Author: Sabbir
 * Date: 4/8/2018
 * Time: 12:50 PM
 */
Switch($method){
    case 'add':
        break;
    case 'edit':
        break;
    case 'delete':
        break;
    case 'list':
        $limit = $request->Limit;
        for($i=1; $i<=$limit; $i++){
            $categories[$i - 1]= [
                'id' => $i,
  'name' => 'Category - '.$i,
  'description' => 'Lorem ipsum dolor sit amet',
  'image' => 'http://mango-bd.com/API/img/hot_deals/'.$i.'.png',
            ];
        }
        $response['status'] = 1;
        $response['message'] = 'Featured Deal List';
        $response['result'] = $categories;
        echo json_encode($response);
        break;
    default:
        $response['status'] = 0;
        $response['message'] = 'Error Occurred';
        $response['error_code'] = 400;
        echo json_encode($response);
        break;
}