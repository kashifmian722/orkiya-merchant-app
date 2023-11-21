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
	.example_wrapper{
		padding: 0px 30px;
	}
</style>
@endsection

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            	<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            		<h6 class="text-white text-capitalize ps-3">Orders</h6>
            	</div>
            </div>
            <div class="card-body px-0 pb-2">
            	<div class="table-responsive p-3">
            		<table class="table align-items-center justify-content-center mb-0 pb-5 nowrap stripe" id="orders_table">
            			<thead>
            				<tr>
                              	<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Number</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer's Name</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total</th>
	                      		<th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Status</th>
	                      		<th></th>
                    		</tr>
                  		</thead>
	                  	<tbody>
	                  		@foreach($orders as $order)

	                  		@if($order['stateMachineState']['technicalName'] == "paid" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid")
			                    

					        @else
					        	<tr>
	                              	<td>
			                    		<a href="{{ url('/orders/'.$order['id']) }}"><p class="text-sm font-weight-bold mb-0">{{ $order['orderNumber'] }}</p></a>
			                      	</td>
			                      	<td>
			                        	<div class="d-flex">
			                          		<div class="my-auto">
			                            		<h6 class="mb-0 text-sm">{{ date( 'Y-m-d H:i', strtotime($order['orderDateTime']) ) }}</h6>
			                          		</div>
			                    		</div>
			                      	</td>
			                      	
			                      	<td>
			                        	<span class="text-xs font-weight-bold">{{ $order['orderCustomer']['firstName']." ".$order['orderCustomer']['lastName'] }}</span>
			                      	</td>
			                      	<td class="align-middle text-center">
			                        	
	                          			<span class="me-2 text-xs font-weight-bold">Rs. {{ $order['amountTotal'] }}</span>
			                          	
			                        </td>
	                              
			                        <td class="align-middle text-center">
			                        	@if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "open")
			                        		<span class="badge badge-sm bg-gradient-danger">Open</span>
			                        	@endif
	                                  
	                                  	@if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "cancelled")
			                        		<span class="badge badge-sm bg-gradient-danger">Cancel</span>
			                        	@endif

			                        	@if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid")
			                        		<span class="badge badge-sm bg-gradient-info">Paid</span>
			                        	@endif

			                        	@if($order['stateMachineState']['technicalName'] == "completed" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid")
			                        		<span class="badge badge-sm bg-gradient-success">Complete</span>
			                        	@endif
			                          	
			                        </td>
			                        <td class="align-middle">
			                        	<a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
					                      <i class="fa fa-ellipsis-v text-secondary"></i>
					                    </a>
					                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5 bg-gradient-light" aria-labelledby="dropdownTable">
					                    	<li><a class="dropdown-item border-radius-md loading" href="{{ url('/orders/'.$order['id']) }}">View Details</a></li>

					                    	@if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "open")
					                    		<li><a class="dropdown-item border-radius-md loading" href="{{ url('/orders/paid/'.$order['id']) }}">Mark as Paid</a></li>
	                                      		<li><a class="dropdown-item border-radius-md loading" href="{{ url('/orders/cancel/'.$order['id']) }}">Cancle Order</a></li>
					                    	@endif

					                    	@if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid")
					                    		<li><a class="dropdown-item border-radius-md loading" href="{{ url('/orders/done/'.$order['id']) }}">Mark as Done</a></li>
					                    	@endif
					                    </ul>
					                </td>
					            </tr>
					        @endif

				            @endforeach
			        	</tbody>
		    		</table>
				</div>
			</div>
		</div>
    </div>
</div>
      
@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function() {
	    $('#orders_table').DataTable();
	} );
</script>
@endsection