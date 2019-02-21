@extends('admin.master') 
@section('submenu')

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('CreateVendor')}}">Add Vendor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('ManageVendor')}}">Manage Vendor</a>
                            </li>
                            
                            
                    @stop                  
@section('maincontent')

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="RegisterValidation" action="{{url('Product')}}" method="Post" enctype="multipart/form-data">
@csrf
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">mail_outline</i>
                                        </div>
                                        <h4 class="card-title">Vendor ADD</h4>
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
								
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Name of Firm *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_title" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Email *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_ingredients" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Phone *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_ingredients" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Mobile No *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_ingredients" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Address *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_ingredients" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Pincode *</label>
                                            <input type="text" class="form-control" id="exampleEmail"  name="product_ingredients" required>
                                        </div>

                                        
											
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Name of Contact Person *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Partnershipfirm *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_about" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Proprietary Concern *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_about" required>
                                        </div>
                                        
                                       
                                       

                                        <div class="form-group">
                                        
                                            <select class="selectpicker" name="Firm_type" data-style="select-with-transition" title="Firm Type"  data-size="7" required>
                                                        <option value=""> Select Type</option>
                                                        <option value="2">Sev </option>
                                                        
                                                        
                                                    </select>
                                        </div>






                                       
                                        
                                        
                                                                                <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Year of Establishmentofthe firm *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Account Name  *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Account No  *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Bank Name  *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Bank Address  *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Branch Code  *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> IFSC No  *</label>
                                            <input type="text" class="form-control" id="examplePassword2"  name="product_price" required>
                                        </div>
                                       
                                    </div>
									<div class="col-md-6">
                                        
                                        

                                        
                                        
                                        
                                        
                                       
                                        
                                        
                                    
                                 <div class="row">
                                       <div class="col-md-6 col-sm-6">
                      <h4 class="title">FSSAI License</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" id="main_img" name="main_img" required>
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                                 <div class="col-md-6 col-sm-6">
                      <h4 class="title">Pancard</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" name="optional_img" id="optional_img">
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                      <h4 class="title">Adharcard</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" id="main_img" name="main_img" required>
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                                 <div class="col-md-6 col-sm-6">
                      <h4 class="title">GST (Good & Service Tax) Registration</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" name="optional_img" id="optional_img">
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                      <h4 class="title">Trademark Registration</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" id="main_img" name="main_img" required>
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                                 <div class="col-md-6 col-sm-6">
                      <h4 class="title">FDA License</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" name="optional_img" id="optional_img">
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    </div>
                    


                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                      <h4 class="title">Shop license</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" id="main_img" name="main_img" required>
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                                 <div class="col-md-6 col-sm-6">
                      <h4 class="title">ExciseReg.No</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('images/backend_img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" name="optional_img" id="optional_img">
                          <div class="ripple-container"></div></span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    </div>



										
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">

                                        <button type="submit" class="btn btn-rose">ADD</button>
                                    </div>
                                </div>
								</form>
                            
                        </div>
                        
                       
                        
                    </div>
                </div>

            </div>

@stop