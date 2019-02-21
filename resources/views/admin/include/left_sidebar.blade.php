<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('images/backend_img/sidebar-1.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

            <div class="logo"><a href="dashboard.php" class="simple-text logo-mini">
             &nbsp &nbsp  SEV  &nbsp BAZAAR
        </a>
</div>

            <div class="sidebar-wrapper">

                <div class="user">
                    <div class="photo">
                        <img src="{{asset('images/backend_img/faces/avatar.jpg')}}" />
                    </div>
                    <div class="user-info">
                        <a data-toggle="collapse" href="#collapseExample" class="username">
                            <span>
                       Admin 
                      <b class="caret"></b>
                    </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> S </span>
                                        <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">

                    <li class="nav-item active ">
                        <a class="nav-link" href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">image</i>
                            <p> Product
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="AddProduct.php">
                                        <span class="sidebar-mini"> AD </span>
                                        <span class="sidebar-normal"> Add Product </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="ManageProduct.php">
                                        <span class="sidebar-mini"> PM </span>
                                        <span class="sidebar-normal"> Product Mangement </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="material-icons">apps</i>
                            <p> Order
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link"  href="Manageorder.php">
                                        <span class="sidebar-mini"> OM </span>
                                        <span class="sidebar-normal"> Order Mangement 
                              <b class="caret"></b>
                            </span>

                                    </a>

                                   
                                </li>
                                
                                
                               
                            </ul>
                        </div>
                    </li>


                    
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples1">
                            <i class="material-icons">image</i>
                            <p> Sale
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples1">
                            <ul class="nav">
                               
                                <li class="nav-item ">
                                    <a class="nav-link" href="ManageSale.php">
                                        <span class="sidebar-mini"> SM </span>
                                        <span class="sidebar-normal"> Sale Mangement </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples2">
                            <i class="material-icons">image</i>
                            <p> Return Management
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples2">
                            <ul class="nav">
                                
                                <li class="nav-item ">
                                    <a class="nav-link" href="ManageReturn.php">
                                        <span class="sidebar-mini"> RM </span>
                                        <span class="sidebar-normal"> Return Management </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples3">
                            <i class="material-icons">image</i>
                            <p> Warehouse
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples3">
                            <ul class="nav">
                                
                                <li class="nav-item ">
                                    <a class="nav-link" href="ManageWarehouse.php">
                                        <span class="sidebar-mini"> MW </span>
                                        <span class="sidebar-normal">Mangement Warehouse</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples4">
                            <i class="material-icons">image</i>
                            <p> payment
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples4">
                            <ul class="nav">
                                
                                <li class="nav-item ">
                                    <a class="nav-link" href="ManagePayment.php">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal">Mangement payment </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples5">
                            <i class="material-icons">image</i>
                            <p> offers
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="pagesExamples5">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="Addoffers.php">
                                        <span class="sidebar-mini"> AO </span>
                                        <span class="sidebar-normal"> Add offers </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="Manageoffers.php">
                                        <span class="sidebar-mini"> MO </span>
                                        <span class="sidebar-normal">Mangement offers </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                            <i class="material-icons">grid_on</i>
                            <p> Tables
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                
                                <li class="nav-item ">
                                    <a class="nav-link" href="datatables.php">
                                        <span class="sidebar-mini"> DT </span>
                                        <span class="sidebar-normal"> DataTables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                            <i class="material-icons">content_paste</i>
                            <p> Forms
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                
                                
                                <li class="nav-item ">
                                    <a class="nav-link" href="validation.php">
                                        <span class="sidebar-mini"> VF </span>
                                        <span class="sidebar-normal"> Validation Forms </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>

                    

                </ul>

            </div>
        </div>