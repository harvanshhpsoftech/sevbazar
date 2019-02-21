<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Product;
use Image;

class VenderController extends Controller
{
    public function login(){
    	return view('vender.index');
    }

    public function Dashboard(){
    	return view('vender.dashboard');
    }

public function Product(Request $request){
if($request->isMethod('post')){

	$data=$request->all();
	//print_r($data);


	
	$product= new Product;
	$product->vender_id=2;
	$product->product_catgory=$data['product_catgory'];
	$product->Brand_name='A';
	$product->product_ingredients=$data['product_ingredients'];
	$product->Regions=1;
	$product->product_title=$data['product_title'];
	$product->product_weight=$data['product_weight'];
	$product->product_price=$data['product_price'];
	$product->product_about=$data['product_about'];
	$product->Shelf_Life=$data['Shelf_Life'];
	$product->product_type=$data['product_type'];
	$product->Organic=$data['Organic'];
	$product->Gluten=$data['Gluten'];
	$product->Peanut=$data['Peanut'];
	$product->Lactose=$data['Lactose'];
	$product->Licence=$data['Licence'];
	$product->Temperature=$data['Temperature'];
	$product->Nutritional=$data['Nutritional'];

	if($request->hasFile('main_img')){
	 $img_temp=Input::file('main_img');
	if($img_temp->isValid()){
		$extension=$img_temp->getClientOriginalExtension();
		$filename=rand(111,99999).'.'.$extension;
		$large_image_path='images/backend_img/product/'.$filename;
		Image::make($img_temp)->save($large_image_path);
$comurl=url('/').'/images/backend_img/product/';
		$product->main_img=$comurl.$filename;

	}
	
}

	if($request->hasFile('optional_img')){
	 $img_temp=Input::file('optional_img');
	if($img_temp->isValid()){
		$extension=$img_temp->getClientOriginalExtension();
		$filename=rand(111,99999).'.'.$extension;
		$large_image_path='images/backend_img/product/'.$filename;
		Image::make($img_temp)->save($large_image_path);
$comurl=url('/').'/images/backend_img/product/';
		$product->optional_img=$comurl.$filename;

	}
	
}
	//$product->main_img=$data['main_img'];
	//$product->optional_img=$data['optional_img'];

	$product->save();
	return redirect()->back()->with('flash_message_success','Product has Been added Successfully!');
	//print_r($data);
}
	
//return redirect()->back()->with('flash_message_success','Product has Been added Successfully!');

    	return view('vender.AddProduct');
    }

    public function ManageProduct(){
    	//$comurl="{{url('/')}}".'images/backend_img/product/';
    	//echo url('/');
    	//die; 
    	$product=Product::get();
    	return view('vender.ManageProduct')->with(compact('product'));
    }
    public function EditProduct(Request $request,$id=null){
    	$productDetails=Product::where(['product_id'=>$id])->first();

    	return view('vender.edit_product')->with(compact('productDetails'));


    }
    public function UpdateProduct(Request $request){
    	$data=$request->all();
    	Product::where(['product_id'=>$data['product_id']])->update(['product_catgory'=>$data['product_catgory'],
	'Brand_name'=>'A',
	'product_ingredients'=>$data['product_ingredients'],
	'Regions'=>1,
	'product_title'=>$data['product_title'],
	'product_weight'=>$data['product_weight'],
	'product_price'=>$data['product_price'],
	'product_about'=>$data['product_about'],
	'Shelf_Life'=>$data['Shelf_Life'],
	'product_type'=>$data['product_type'],
	'Organic'=>$data['Organic'],
	'Gluten'=>$data['Gluten'],
	'Peanut'=>$data['Peanut'],
	'Lactose'=>$data['Lactose'],
	'Licence'=>$data['Licence'],
	'Temperature'=>$data['Temperature'],
	'Nutritional'=>$data['Nutritional']]);
    	return redirect()->back()->with('flash_message_success','Product has Been Update Successfully!');
    	//echo 0;
    }
    public function DeleteProduct(Request $request,$id=null){
    	Product::where(['product_id'=>$id])->delete();
    	return redirect()->back()->with('flash_message_success','Product has Been Delete Successfully!');

    }

    public function ManageOrder(){
    	return view('vender.ManageOrder');
    }

    public function ManageSale(){
    	return view('vender.ManageSale');
    }
    public function ManageReturn(){
    	return view('vender.ManageReturn');
    }


public function ManagePayment(){
    	return view('vender.ManagePayment');
    }
    public function ManageOffers(){
    	return view('vender.ManageReturn');
    }
    public function AddOffers(){
    	return view('vender.ManageReturn');
    }


    public function ProductCreate(){
    	echo "hello";
    }




}
