<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use GuzzleHttp\Client;

class ApiAuthController extends Controller
{
    public function Products(Request $request){
//     	//echo "hello";
//     	$request->validate(['email'=>'required',
//     		'name'=>'required',
//     		'password'=>'required']);

//     	$product= new Product;
// 	$product->vender_id=2;
// 	$product->product_title=$request->email;
// 	$product->Brand_name=$request->name;
// 		$product->save();

// // $http = new Client;

// // 		$response = $http->post(url('oauth/token'), [
// //     'form_params' => [
// //         'grant_type' => 'password',
// //         'client_id' => '2',
// //         'client_secret' => 'dtVX8btWW585V9W5Ww1RxoyMxYlooByrnNwAxOTc',
// //         'username' => $request->email,
// //         'password' => $request->password,
// //         'scope' => '',
// //     ],
// // ]);
		$product=Product::get();
		if(count($product)>0){

			return response(['status'=>'true','message'=>'successfull','data'=>$product]);
		
		}else{
		return response(['status'=>'false','message'=>'NO data found']);
		
		}//return json_decode((string) $response->getBody(), true);

    }
}
