
  <?php include('include/top_header_afterlogin.php'); ?>

    <div class="wrapper ">

       <?php include('include/left_sidebar.php'); ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include('include/header_afterlogin.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="RegisterValidation" action="ab.php" method="">
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">mail_outline</i>
                                        </div>
                                        <h4 class="card-title">Register Form</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-6">
								
                                        <div class="form-group">
                                            <label for="exampleEmail" class="bmd-label-floating"> Email Address *</label>
                                            <input type="email" class="form-control" id="exampleEmail" required="true">
                                        </div>
											<div class="form-group">
										
                                            <select class="selectpicker" data-style="select-with-transition"   data-size="7" required="true">
                                                        <option value=""> Select Options</option>
                                                        <option value="2">Paris </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Password *</label>
                                            <input type="password" class="form-control" id="examplePassword2" required="true" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword1" class="bmd-label-floating"> Confirm Password *</label>
                                            <input type="password" class="form-control" id="examplePassword3" required="true" equalTo="#examplePassword" name="password_confirmation">
                                        </div>
                                        <div class="category form-category">* Required fields</div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
										
                                            <select class="selectpicker" data-style="select-with-transition"  title="Choose Country" data-size="7" required="true" >
                                                        <option value="" disabled> Select Options</option>
                                                        <option value="2">Paris </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                        
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword" class="bmd-label-floating"> Password *</label>
                                            <input type="password" class="form-control" id="examplePassword" required="true" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplePassword1" class="bmd-label-floating"> Confirm Password *</label>
                                            <input type="password" class="form-control" id="examplePassword1" required="true" equalTo="#examplePassword" name="password_confirmation">
                                        </div>
										
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">

                                        <button type="submit" class="btn btn-rose">Register</button>
                                    </div>
                                </div>
								</form>
                            
                        </div>
                        
                       
                        
                    </div>
                </div>

            </div>

            <?php include('include/footer_afterlogin.php'); ?>

        </div>

    </div>

   <?php include('include/setting.php'); ?>
                            
							<?php include('include/allscript_afterlogin.php'); ?>