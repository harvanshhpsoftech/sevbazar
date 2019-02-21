@extends('admin.master')   
@section('submenu')

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('Brand')}}">Add Brand</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('ManageBrand')}}">Manage Brands</a>
                            </li>
                            
                            
                    @stop               
@section('maincontent')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">assignment</i>
                                    </div>
                                    <h4 class="card-title">Brand List</h4>
                                    @if(Session::has('flash_message_success'))
                                        <div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ Session::get('flash_message_success') }}</strong>

</div>
                                       
@endif
                                </div>
                                <div class="card-body">
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Brand Name</th>
                                                    <th>img</th>
                                                    
                                                    
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Brand Name</th>
                                                    <th>img</th>
                                                    
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @php ($count=1) @endphp
                                                 
                                                @foreach($product as $pr)
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $pr->Brand_name}}</td>
                                                    <td><img style="height: 60px;" src="{{ $pr->main_img}}" class="rounded img-fluid"></td>
                                                    
                                                    <td class="text-right">
                

                <a href="{{url('/EditProduct')}}/{{ $pr->product_id}}" class="btn btn-link btn-warning btn-just-icon edit" rel="tooltip" data-placement="bottom" title="Edit"><i class="material-icons">dvr</i></a>

            <a href="{{url('/DeleteProduct')}}/{{ $pr->product_id}}" onclick="return confirm('Are you sure want Delete This Product')" class="btn btn-link btn-danger btn-just-icon remove" rel="tooltip" data-placement="bottom" title="Remove"><i class="material-icons">close</i></a>
                                                    </td>
                                                </tr>
                                                <!-- notice modal -->
              <div class="modal fade" id="noticeModal{{ $pr->product_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-notice">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">Product Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="instruction">
                        <div class="row">
                          <div class="col-md-8">
							<div class="row">
							  <div class="col-md-6 p-1"><b>Product Title</b></div>
							  <div class="col-md-6 p-1">Product Title</div>
							</div><!--/row-->
							<div class="row">
							  <div class="col-md-6 p-1"><b>Product Category</b></div>
							  <div class="col-md-6 p-1">Product Title</div>
							</div><!--/row-->
							<div class="row">
							  <div class="col-md-6 p-1"><b>Weight</b></div>
							  <div class="col-md-6 p-1">Product Title</div>
							</div><!--/row-->
							<div class="row">
							  <div class="col-md-6 p-1"><b>Price</b></div>
							  <div class="col-md-6 p-1">Product Title</div>
							</div><!--/row-->
							<div class="row">
							  <div class="col-md-6 p-1"><b>Description</b></div>
							  <div class="col-md-6 p-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
							</div><!--/row-->
                          </div>
                          <div class="col-md-4">
                            <div class="picture">
                              <img src="{{ $pr->main_img}}" alt="Thumbnail Image" class="rounded img-fluid">
                              <img src="{{ $pr->main_img}}" alt="Thumbnail Image" class="rounded img-fluid mt-2">
							  @if(!empty($pr->optional_img))
                              <img src="{{ $pr->optional_img}}" alt="Thumbnail Image" class="rounded img-fluid mt-2">
                              @endif
                            </div>
                          </div>
                        </div>
						
						<div class="row">
						   <div class="col-md-4 border-bottom p-3">
						      <b>Shelf Life:</b> Yes
						   </div>
						   <div class="col-md-4 border-bottom p-3">
						      <b>Type:</b> Veg
						   </div>
						   <div class="col-md-4 border-bottom p-3">
						      <b>Organic:</b> Yes
						   </div>
						</div><!--//row-->
						<div class="row">
						   <div class="col-md-4 border-bottom p-3">
						      <b>Gluten:</b> Yes
						   </div>
						   <div class="col-md-4 border-bottom p-3">
						      <b>Peanut:</b> Veg
						   </div>
						   <div class="col-md-4 border-bottom p-3">
						      <b>Lactose:</b> Yes
						   </div>
						</div><!--//row-->
						<div class="row">
						   <div class="col-md-4 border-bottom p-3">
						      <b>Licence:</b> Yes
						   </div>
						   <div class="col-md-4 border-bottom p-3">
						      <b>Temperature:</b> Veg
						   </div>
						   <div class="col-md-4 border-bottom p-3">
						      <b>Nutritional:</b> Yes
						   </div>
						</div><!--//row-->
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- end notice modal -->



                                                @php ($count++) @endphp
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>

            </div>

            
            @stop

            @section('pagespecjs')
            <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }
            });

            var table = $('#datatable').DataTable();

            // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });

function delprd(){
if(confirm("Are you sure want Delete This Product")){
    return true;
}
return false;


}


    </script>
            @stop
