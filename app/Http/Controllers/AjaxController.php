<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class AjaxController extends Controller
{
	// public function getCity(Request $request)
 //    {
 //        $data['cities'] = City::where("status",'Active')->where("country_id",$request->country_id)->get(["name","id"]);
 //        $city = json_encode($data['cities']);
 //        return $city;
 //    }
    
    public function getCity(Request $request)
    {
    	$data['cities'] = City::where("country_id",$request->country_id)->get(["name","id"]);
        return response()->json($data);
    }



}