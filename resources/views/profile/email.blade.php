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
	                    	<h6 class="text-white text-capitalize ps-3">Change Email</h6>
	                    </div>
                  	</div>
    			</div>
    		</div>
    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-0">
    				<form class="align-items-center mx-5" id="change_email_form" action="{{ url('/email') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mt-2">
    						<label >Current Email</label>
    						<input type="email" class="form-control" disabled="" value="{{$profile['email']}}">
    					</div>
    					
    					<div class="form-group mt-2">
    						<label for="newEmail">New Email</label>
    						<input type="text" class="form-control" id="newEmail" name="newEmail" placeholder="Enter New Password">
    					</div>
    					<div class="form-group mt-2">
    						<label for="repeatEmail">Repeat Email</label>
    						<input type="text" class="form-control" id="repeatEmail" name="repeatEmail" placeholder="Repeat Email">
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

      var newEmail = $("#newEmail").val();
      var repeatEmail = $("#repeatEmail").val();

      if(!newEmail){
        fieldsAreOk = false;
        toastr.error("New Email is required.");
      }
      if(!repeatEmail){
        fieldsAreOk = false;
        toastr.error("Repeat Email is required.");
      }
      if(repeatEmail != newEmail){
        fieldsAreOk = false;
        toastr.error("Email are not same.");
      }
      if(!IsEmail(newEmail)){
        fieldsAreOk = false;
        toastr.error("Invalid Email.");
      }
      if(!IsEmail(repeatEmail)){
        fieldsAreOk = false;
        toastr.error("Invalid Repeat Email.");
      }
      if(fieldsAreOk){
        showLoader();
        $('#change_email_form').submit();
      }
      
      
    });

    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!regex.test(email)) {
        return false;
      }else{
        return true;
      }
    }
  });
</script>
@endsection