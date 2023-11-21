@extends('layouts.app')

@section('style')
<style type="text/css">
	.form-control{
		padding: 1rem !important;
		background-color: #e5e5e5 !important;
	}
    .output_image{
        width: 25%;
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
	                    	<h6 class="text-white text-capitalize ps-3">Info</h6>
	                    </div>
                  	</div>
    			</div>
    		</div>
    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-0">
    				<form class="align-items-center mx-5" action="{{ url('/info') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    					
    					<div class="form-group mt-2">
    						<label for="firstName">First Name</label>
    						<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" value="{{ $profile['firstName'] }}">
    					</div>
    					<div class="form-group mt-2">
    						<label for="lastName">Last Name</label>
    						<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" value="{{ $profile['lastName'] }}">
    					</div>
						
    					<button type="submit" class="btn bg-gradient-dark mt-3 loading">Submit</button>
					</form>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection