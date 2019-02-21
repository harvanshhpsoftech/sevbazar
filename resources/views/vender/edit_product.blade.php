@extends('admin.master')                  
@section('maincontent')

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="RegisterValidation" action="{{url('UpdateProduct')}}" method="Post" enctype="multipart/form-data">
@csrf
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">mail_outline</i>
                                        </div>
                                        <h4 class="card-title">Product ADD</h4>
                                        @if(Session::has('flash_message_success'))
                                        <div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ Session::get('flash_message_success') }}</strong>

</div>
                                       
@endif


                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-6">
								<input type="hidden" class="form-control" id="exampleEmail"  name="product_id"  value="{{$productDetails->product_id}}">
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Product Title *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_title"  value="{{$productDetails->product_title}}">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Product Ingredients *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_ingredients" value="{{$productDetails->product_ingredients}}">
                                        </div>

                                        <div class="form-group">
										
                                            <select class="selectpicker" name="product_catgory" data-style="select-with-transition" title="Product Category"  data-size="7" >
                                                        <option value=""> Select Category</option>
                                                        <option value="2" @if($productDetails->product_catgory=='Yes') {{'Selected'}} @endif>Sev </option>
                                                        
                                                        
                                                    </select>
                                        </div>
											<div class="form-group">
										
                                            <select class="selectpicker" name="product_weight" data-style="select-with-transition" title="Product Weight" data-size="7" >
                                                        <option value=""> Select Weight</option>
                                                        <option value="2">500 </option>
                                                        <option value="3">1000</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Price(Rs.) *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" value="{{$productDetails->product_price}}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> About Us *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_about"  value="{{$productDetails->product_about}}">
                                        </div>
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Shelf_Life"data-style="select-with-transition"  title="Shelf Life" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Shelf_Life=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Shelf_Life=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                       
                                       <div class="form-group">
										
                                            <select class="selectpicker" name="product_type" data-style="select-with-transition"  title="Type" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Veg" @if($productDetails->product_type=='Veg') {{'Selected'}} @endif>Veg</option>
                                                        <option value="Nonveg" @if($productDetails->product_type=='Nonveg') {{'Selected'}} @endif>Nonveg</option>
                                                        
                                                        
                                                    </select>
                                        </div>

                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Organic" data-style="select-with-transition"  title="Organic" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Organic=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Organic=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Gluten" data-style="select-with-transition"  title="Gluten Free" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Gluten=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Gluten=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        
                                       
                                    </div>
									<div class="col-md-6">
                                        
                                        
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Peanut" data-style="select-with-transition"  title="Peanut Free" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Peanut=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Peanut=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Lactose" data-style="select-with-transition"  title="Lactose Free" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes"@if($productDetails->Lactose=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Lactose=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Licence" data-style="select-with-transition"  title="Licence Approved" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Licence=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Licence=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Temperature" data-style="select-with-transition"  title="Temperature resistant packaging" data-size="7"  >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Temperature=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Temperature=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
										
                                            <select class="selectpicker" name="Nutritional" data-style="select-with-transition"  title="Nutritional labeling" data-size="7" >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="Yes" @if($productDetails->Nutritional=='Yes') {{'Selected'}} @endif>Yes </option>
                                                        <option value="No" @if($productDetails->Nutritional=='No') {{'Selected'}} @endif>No</option>
                                                        
                                                        
                                                    </select>
                                        </div>
<div class="row">
                                       <div class="col-md-6 col-sm-6">
                      <h4 class="title">Main Image</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        
                        <div class="fileinput-preview  thumbnail" style="">
                            <img src="{{ $productDetails->main_img}}" alt="...">

                        </div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="">Change</span>
                            <input type="hidden"><input type="file" id="main_img" name="main_img" >
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                                 <div class="col-md-6 col-sm-6">
                      <h4 class="title">Optional Image</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        
                        <div class="fileinput-preview  thumbnail" style="">
                            <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="">Change</span>
                            <input type="hidden"><input type="file" name="optional_img" id="optional_img">
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round " data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    </div>
                    

										
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">

                                        <button type="submit" class="btn btn-rose">Update</button>
                                    </div>
                                </div>
								</form>
                            
                        </div>
                        
                       
                        
                    </div>
                </div>

            </div>

@stop