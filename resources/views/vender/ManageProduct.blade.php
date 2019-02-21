@extends('admin.master')                  
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
                                    <h4 class="card-title">Product List</h4>
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
                                                    <th>Product Title</th>
                                                    <th>Price</th>
                                                    <th>Weight</th>
                                                    <th>Type</th>
                                                    
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Product Title</th>
                                                    <th>Price</th>
                                                    <th>Weight</th>
                                                    <th>Type</th>
                                                    
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @php ($count=1) @endphp
                                                 
                                                @foreach($product as $pr)
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $pr->product_title}}</td>
                                                    <td>{{ $pr->product_price}}</td>
                                                    <td>{{ $pr->product_weight}}</td>
                                                    <td>{{ $pr->product_type}}</td>
                                                    <td class="text-right">
                <a href="#" class="btn btn-link btn-info btn-just-icon visibility" data-toggle="modal" data-target="#noticeModal{{ $pr->product_id}}" rel="tooltip" data-placement="bottom" title="View"><i class="material-icons">art_track</i></a>

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
                            <strong>1. Register</strong>
                            <p class="description">The first step is to create an account at
                              <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                          </div>
                          <div class="col-md-4">
                            <div class="picture">
                              <img src="{{ $pr->main_img}}" alt="Thumbnail Image" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="instruction">
                        <div class="row">
                          <div class="col-md-8">
                            <strong>2. Apply</strong>
                            <p class="description">The first step is to create an account at
                              <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                          </div>
                          <div class="col-md-4">
                            <div class="picture">
                                @if(!empty($pr->optional_img))
                              <img src="{{ $pr->optional_img}}" alt="Thumbnail Image" class="rounded img-fluid">
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>
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
