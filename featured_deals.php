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
            $deals[$i - 1]= [
                'id' => $i,
  'category_id' => $i,
  'expiry' => date('Y-m-d H:i:s', strtotime('+5 hours')),
  'image' => 'http://mango-bd.com/API/img/hot_deals/'.$i.'.png',
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
  'is_featured' => 1,
  'is_flat_discount' => 0
            ];
        }
        $response['status'] = 1;
        $response['message'] = 'Featured Deal List';
        $response['result'] = $deals;
        echo json_encode($response);
        break;
    default:
        $response['status'] = 0;
        $response['message'] = 'Error Occurred';
        $response['error_code'] = 400;
        echo json_encode($response);
        break;
}