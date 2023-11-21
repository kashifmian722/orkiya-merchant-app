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
	                    	<h6 class="text-white text-capitalize ps-3">Change Password</h6>
	                    </div>
                  	</div>
    			</div>
    		</div>
    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-0">
    				<form class="align-items-center mx-5" id="change_password_form" action="{{ url('/password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    					
    					<div class="form-group mt-2">
    						<label for="newPassword">New Password</label>
    						<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter New Password">
    					</div>
    					<div class="form-group mt-2">
    						<label for="repeatPassword">Repeat Password</label>
    						<input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="Repeat Password">
    					</div>
						
    					<button type="submit" id="submit_form" class="btn bg-gradient-dark mt-3">Submit</button>
					</form>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">
  $(document).ready(function(){
    $("#submit_form").click(function(e){
      e.preventDefault();

      var fieldsAreOk = true;

      var newPassword = $("#newPassword").val();
      var repeatPassword = $("#repeatPassword").val();

      if(!newPassword){
        fieldsAreOk = false;
        toastr.error("New Password is required.");
      }
      if(!repeatPassword){
        fieldsAreOk = false;
        toastr.error("Repeat Password is required.");
      }
      if(repeatPassword != newPassword){
        fieldsAreOk = false;
        toastr.error("Password are not same.");
      }
      if(fieldsAreOk){
        showLoader();
        $('#change_password_form').submit();
      }
      
    });
  });
</script>
@endsection