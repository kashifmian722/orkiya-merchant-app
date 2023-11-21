@extends('layouts.app')
@section('style')
<style type="text/css">
	.add-btn{
		margin-right: 15px;
		float: right;
	}
	.heading-style{
		display: inline;
	}
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
    	<div class="card my-4">
    		<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    			<div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-4">
    				<div class="row">
	                    <div class="col-6 d-flex align-items-center">
	                    	<h6 class="text-white text-capitalize ps-3 mt-2">Products</h6>
	                    </div>
	                    <div class="col-6 text-end">
	                    	<a class="btn bg-gradient-info mb-0 mx-2 mt-2" id="csv_btn" href="#csv_modal" rel="opne:modal"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;CSV Upload</a>
	                    	<a class="btn bg-gradient-dark mb-0 mx-2 mt-2 loading" href="{{ url('/products/add') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Product</a>
	                    </div>
                  	</div>
    			</div>
    		</div>
    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-3">
    				<table class="table align-items-center mb-0 pb-5 stripe" id="products_table">
    					<thead>
    						<tr>
		                      	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
		                      	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
		                      	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock</th>
		                      	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">QR Code</th>
		                      	<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
		                      	<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
		                      	<th class="text-secondary opacity-7"></th>
                    		</tr>
                  		</thead>
                  		<tbody>
                  			@foreach($products as $product)
		                    <tr>
		                    	<td>
		                    		<div class="d-flex px-2 py-1">
                          				<div>
                          					@if(isset($product['media']) && count($product['media']))
                            					<img src="{{ $product['media'][0]['url'] }}" class="avatar avatar-sm me-3" alt="xd">
                            				@else
                            					<img src="{{ asset('assets/img/no_img.png') }}" class="avatar avatar-sm me-3" alt="xd">
                            				@endif
                          				</div>
                                      	<a href="{{ url('products/edit/'.$product['id']) }}" class="text-secondary font-weight-bold text-xs loading" title="{{ $product['name'] }}">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $product['name'] }}</h6>
                                            </div>
                                        </a>
                                            
                        			</div>
		                    		
		                    	</td>
		                    	<td>
		                    		<p class="text-xs font-weight-bold mb-0">Rs. {{ $product['price'] }}</p>
		                    	</td>
		                    	<td>
		                    		<p class="text-xs font-weight-bold mb-0">{{ $product['stock'] }}</p>
		                    	</td>
		                    	<td>
		                    		@if(isset( $product['customFields']['QRcode'] ))
		                    			<a href="{{ $product['customFields']['QRcode'] }}" download target="blank" ><img class="me-3" style="width: 45px;" src="{{ $product['customFields']['QRcode'] }}"></a>
	                    			@endif
		                    	</td>
		                    	<td class="align-middle text-center text-sm">
		                    		@if($product['active'])
		                    			<span class="badge badge-sm bg-gradient-success">Active</span>
	                    			@else
	                    				<span class="badge badge-sm bg-gradient-secondary">Inactive</span>
	                    			@endif
		                    	</td>
		                    	<td class="align-middle text-center">
		                    		<span class="text-secondary text-xs font-weight-bold">{{ $product['productType'] }}</span>
		                    	</td>
		                    	<td class="align-middle">
		                    		
		                    		<a href="{{ url('products/edit/'.$product['id']) }}" class="text-secondary font-weight-bold text-xs loading" title="Edit">
		                    			<i class="material-icons text-sm">edit</i>
		                    		</a>
		                    		<a href="{{ url('products/generate-qrcode/'.$product['id']) }}" class="text-secondary font-weight-bold text-xs loading" title="Generate QR Code">
		                    			<i class="material-icons text-sm">qr_code_2</i>
		                    		</a>
		                    	</td>
		                    </tr>
		                    @endforeach
                  		</tbody>
                	</table>
              	</div>
            </div>
        </div>
    </div>
</div>


<!-- Upload CSV Modal  -->
<div class="modal fade" tabindex="-1" id="csv_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bluk Products Add</h5>
      </div>
      <div class="modal-body">
      	<form enctype="multipart/form-data" id="bluk_upload_form" class="align-items-center" method="POST" action="{{ url('/products/bluk-upload') }}">
      		@csrf
      		<p>Please upload csv contain porducts</p>
      		<ul>
      			<li>CSV Should be coma separated.</li>
      			<li>Format should be like. this <strong>product_name,desciption,price,type,tax,status</strong></li>
      			<li>Type can only be: <strong>product</strong> or <strong>storeWindow</strong></li>
      			<li>Tax value can only be: <strong>0</strong> or <strong>6</strong> or <strong>16</strong></li>
      			<li>Status value can only be: <strong>true</strong> or <strong>false</strong></li>
      			<li>Please strictly follow the format.</li>
      		</ul>
      		<div class="form-group mt-2">
                <label class="form-label" for="customFile">Upload CSV</label>
                <input type="file" name="products_csv" class="form-control bg-gradient-primary px-2 text-white" id="customFile" />
            </div>
      	</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" id="close_modal" data-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary loading" id="form_submit">Upload</button>
      </div>
    </div>
  </div>
</div>

      
@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function() {
	    $('#products_table').DataTable();

	    $("#csv_btn").on('click', function(){
	    	$("#csv_modal").modal('show');
	    });

	    $("#close_modal").on('click', function(){
	    	$("#csv_modal").modal('hide');
	    });

	    $("#form_submit").on('click', function(){
	    	$("#bluk_upload_form").submit();
	    });
	});
</script>
@endsection