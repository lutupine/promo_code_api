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
        print_r($request);
        $limit = $request['Limit'];
        for($i=0; $i<$limit; $i++){
            $deals[$i]= [
                'id' => $i,
  'category_id' => $i,
  'is_featured' => ($i % 2 == 0) ? 1 : 0,
  'expiary' => date('Y-m-d H:i:s', '+5'),
  'image' => '',
  'title' => 'Hot Deals - '.$i,
  'description' => 'asd hot deals asd hot deals asd hot deals asd hot deals ' ,
  'client_id' =>  1,
  'point' => 0,
  'promo_code' => 1,
  'max_usage' => 3,
  'ad_true' => 1,
  'discount' =>'1'.$i,
  'gift_true' => 0,
  'gift_description' => '' ,
  'gift_title' => '' ,
  'gift_image' => '' ,
  'hot_deal' => 1,
  'is_flat_discount' => 0
            ];
        }
        $response['status'] = 1;
        $response['result'] = $deals;
        echo json_encode($response);
        break;
    default:
        $response['status'] = 0;
        $response['message'] = 'Error Occurred';
        echo json_encode($response);
        break;
}