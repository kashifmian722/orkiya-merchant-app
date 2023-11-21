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
            	<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            		<h6 class="text-white text-capitalize ps-3 heading-style"> Order No. {{ $order['orderNumber'] }}</h6>
            		<span class="badge badge-sm bg-gradient-success">Complete</span>
            	</div>
            </div>
            <div class="card-body px-0 pb-2">
            	<div class="row">
            		<div class="col-md-4">
            			<div class="card border-light mb-3" style="max-width: 30rem; margin-left: 20px;">
				  			<div class="card-header"><h5>Address</h5></div>
				  			<div class="card-body">
				    			<p class="card-text">
				    				{{ $order['deliveries'][0]['shippingOrderAddress']['firstName']." ".$order['deliveries'][0]['shippingOrderAddress']['lastName'] }} <br>
				    				{{ $order['deliveries'][0]['shippingOrderAddress']['street'] }} <br>
				    				{{ $order['deliveries'][0]['shippingOrderAddress']['zipcode'] }} {{ $order['deliveries'][0]['shippingOrderAddress']['city'] }} <br>

				    			</p>
				  			</div>
						</div>
            		</div>
            		<div class="col-md-4">
            			<div class="card border-light mb-3" style="max-width: 30rem; margin-left: 20px;">
				  			<div class="card-header"><h5>{{ $order['orderCustomer']['firstName']." ".$order['orderCustomer']['lastName'] }}  can be reached via:</h5></div>
				  			<div class="card-body">
				    			<p class="card-text">
				    				<strong>Email:</strong> {{ $order['orderCustomer']['email'] }} <br>
				    				@if($order['deliveries'][0]['shippingOrderAddress']['phoneNumber'])
			    					<strong>Phone No. :</strong> {{ $order['deliveries'][0]['shippingOrderAddress']['phoneNumber'] }}
			    					@endif
				    				
				    			</p>
				  			</div>
						</div>
            		</div>
            		<div class="col-md-4">
            			<div class="card border-light mb-3" style="max-width: 30rem; margin-left: 20px;">
				  			<div class="card-header"><h5>Comments</h5></div>
				  			<div class="card-body">
				    			<p class="card-text">
				    				@if( $order['customerComment'] )
				    					{{ $order['customerComment'] }} <br>
				    				@else
				    					No Comments <br>
				    				@endif

				    			</p>
				  			</div>
						</div>
            		</div>
            	</div>
            	<hr class="horizontal bg-gradient-secondary mt-2 mb-2">
            	<br>
            	<div class="table-responsive p-0">
            		<h5 class="text-capitalize ps-3">Products</h5>
            		<table class="table align-items-center justify-content-center mb-0">
            			<thead>
            				<tr>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Unit Price</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total</th>
                    		</tr>
                  		</thead>
	                  	<tbody>

	                  		@foreach($order['lineItems'] as $item)
		                    <tr>
		                      	<td>
		                        	<div class="d-flex px-2">
		                          		<div class="my-auto">
		                            		<h6 class="mb-0 text-sm">{{ $item['label'] }}</h6>
		                          		</div>
		                    		</div>
		                      	</td>
		                      	<td>
		                    		<p class="text-sm font-weight-bold mb-0">Rs. {{ $item['unitPrice'] }}</p>
		                      	</td>
		                      	<td>
		                        	<p class="text-sm font-weight-bold mb-0">{{ $item['quantity'] }}</p>
		                      	</td>
		                      	<td class="align-middle text-center">
		                        	
                          			<p class="text-sm font-weight-bold mb-0">Rs. {{ $item['totalPrice'] }}</p>
		                          	
		                        </td>

				            </tr>
				            @endforeach

				            <hr class="horizontal bg-gradient-secondary mt-5 mb-5">	
				            <tr>	
	            				<td></td>
	            				<td></td>
	            				<td></td>
	            				<td></td>
				            </tr>
				            <tr>
				            	
				            	<td></td>
				            	<td></td>
				            	<td>
		                        	<div class="d-flex px-2">
		                          		<div class="my-auto">
		                            		<h6 class="mb-0 text-sm">Net Price</h6>
		                          		</div>
		                    		</div>
		                      	</td>
				            	<td class="align-middle text-center">
		                        	
                          			<p class="text-sm font-weight-bold mb-0">Rs. {{ $order['price']['netPrice'] }} </p>
		                          	
		                        </td>
				            </tr>
				            <tr>
				            	
				            	<td></td>
				            	<td></td>
				            	<td>
		                        	<div class="d-flex px-2">
		                          		<div class="my-auto">
		                            		<h6 class="mb-0 text-sm">Tax</h6>
		                          		</div>
		                    		</div>
		                      	</td>
				            	<td class="align-middle text-center">

				            		
				            		@php
				            			$totaltax = 0;
				            			foreach($order['price']['calculatedTaxes'] as $tax){

				            				$totaltax += $tax['tax'];
				            			}
				            		@endphp
		                        	
                          			<p class="text-sm font-weight-bold mb-0">Rs. {{ $totaltax }} </p>
		                          	
		                        </td>
				            </tr>

				            <tr>
				            	
				            	<td></td>
				            	<td></td>
				            	<td>
		                        	<div class="d-flex px-2">
		                          		<div class="my-auto">
		                            		<h6 class="mb-0 text-sm">Discount</h6>
		                          		</div>
		                    		</div>
		                      	</td>
				            	<td class="align-middle text-center">
		                        	@if(isset($order['customFields']['discount']))
                          			<p class="text-sm font-weight-bold mb-0">Rs. {{ $order['customFields']['discount'] }} </p>
                          			@else
                          				<p class="text-sm font-weight-bold mb-0">Rs. 0 </p>
                          			@endif
		                          	
		                        </td>
				            </tr>

				            <tr>
				            	
				            	<td></td>
				            	<td></td>
				            	<td>
		                        	<div class="d-flex px-2">
		                          		<div class="my-auto">
		                            		<h6 class="mb-0 text-sm">Total</h6>
		                          		</div>
		                    		</div>
		                      	</td>
				            	<td class="align-middle text-center">
		                        	
                          			<p class="text-sm font-weight-bold mb-0">Rs. {{ $order['amountTotal'] }} </p>
		                          	
		                        </td>
				            </tr>
	                  		
			        	</tbody>
		    		</table>
				</div>

				<hr class="horizontal bg-gradient-secondary mt-5 mb-5">
			</div>
		</div>
    </div>
</div>
      
@endsection

@section('scripts')

<script type="text/javascript">
	function markAsPaid(){
		if (window.confirm('Are you sure and want to mark as paid?'))
		{
		    // They clicked Yes
		    showLoader();
		    window.location.replace( "{!! url('/orders/paid/'.$order['id']) !!}" );
		}
	}
  	function cancelOrder(){
		if (window.confirm('Are you sure and want to cancel Order?'))
		{
		    // They clicked Yes
		    showLoader();
		    window.location.replace( "{!! url('/orders/cancel/'.$order['id']) !!}" );
		}
	}
	function markAsDone(){
		if (window.confirm('Are you sure and want to mark as done?'))
		{
		    // They clicked Yes
		    showLoader();
		     window.location.replace( "{!! url('/orders/done/'.$order['id']) !!}" );
		}
	}
</script>
@endsection