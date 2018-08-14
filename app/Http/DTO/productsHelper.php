<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 8/14/2018
 * Time: 6:43 PM
 */

namespace App\Http\DTO;


class productsHelper
{
    public static function prepareCreate($data) {
        $output = array();
        $output['product_name'] = $data->n;
        $output['quantity'] = $data->s;
        $output['price'] = $data->p;
        return $output;
    }
    public static function allProducts($result) {
        $output = array();
        foreach ($result as $key=>$value) {
            $output[$key]['name'] = $value->product_name;
            $output[$key]['quantity'] = $value->quantity;
            $output[$key]['price'] = $value->price;
            $output[$key]['time'] = $value->created_at;
            $output[$key]['total'] = $value->quantity*$value->price;
        }
        return $output;
    }
}