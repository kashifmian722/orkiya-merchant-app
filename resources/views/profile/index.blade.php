@extends('layouts.app')

@section('style')
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.form-control{
		padding: 1rem !important;
		background-color: #e5e5e5 !important;
	}
    .output_image{
        width: 25%;
    }
    .tagify {
        --tag-bg: #f7fef5;
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
	                    	<h6 class="text-white text-capitalize ps-3">Profile</h6>
	                    </div>
                  	</div>
    			</div>
    		</div>


    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-0">
    				<form class="align-items-center mx-5" action="{{ url('/porfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-check form-switch ps-0 pt-3">

                            <input class="form-check-input ms-auto" type="checkbox" id="isPublic" name="isPublic" @if($profile['public']) checked @endif>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="isPublic">Publish on the Portal</label> 
                        </div>
                                <h4 class="pt-3">Business Information</h4>

    					<div class="form-group ">
    						<label for="category">Category</label>
    						<select class="form-control" id="category" name="category">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)

                                	<option value="{{ $cat['id'] }}" @if( $profile['categoryId'] == $cat['id']) selected="" @endif  >{{ $cat['name'] }}</option>
                                @endforeach
    						</select>
    					</div>
                        <div class="form-group ">
                            <label for="sub_category">Sub Category</label>
                            <select class="form-control" id="sub_category" name="sub_category">
                                <option value="">Select Sub Category</option>
                               @foreach($categories as $cat)
    <option value="{{ $cat['id'] }}" @if( isset($cat['id']) && $profile['categoryId'] == $cat['id']) selected="" @endif>{{ $cat['name'] }}</option>
@endforeach
                            </select>
                        </div>
    					<div class="form-group mt-2">
                           <label for="companyName">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter Company Name" value="{{ $profile['publicCompanyName'] }}"">
                           </div>

    					<div class="form-group mt-2">
    						<label for="owner">Managed By</label>
    						<input type="text" class="form-control" id="owner" name="owner" placeholder="Enter name of person who will be managing this Business Account" value="{{ $profile['publicOwner'] }}"">
    					</div>
    					                        <div class="form-group mt-2">
                            <label for="phone">Phone No.</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone No." value="{{ $profile['publicPhoneNumber'] }}"">
                        </div>
                       <div class="form-group mt-2">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter Whatsapp No. 923XXXXXXXXX" @if( isset($profile['customFields']['whatsapp'])) value="{{ $profile['customFields']['whatsapp'] }}"""  @endif>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $profile['publicEmail'] }}"">
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label" for="customFile">Banner/Cover (.Jpeg, Png, Gif files. maimum File size allowed: 2mb)</label>
<input type="file" name="image" class="form-control" id="customFile" onchange="loadFile(event)" />
<img src="{{ isset($profile['cover']['url']) ? $profile['cover']['url'] : '' }}" class="output_image mt-3" id="output">
                        </div>
                        <div class="form-group mt-2">
                            <label for="tags">Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags" placeholder="Please enter tags" @if( isset($profile['customFields']['tags'])) value="{{ $profile['customFields']['tags'] }}" @endif>
                        </div>

                        <h4 class="pt-3">About Business & Policies</h4>

                        <div class="form-group mt-2">
                            <label for="openHours">Opeining Hours</label>
                            <input type="text" class="form-control" id="openHours" name="openHours" placeholder="Enter Opening Hours eg. 10pm - 11pm" value="{{ $profile['publicOpeningTimes'] }}">
                        </div>
    					<div class="form-group mt-2">
    						<label for="description">About your Business</label>
                            <textarea class="form-control" id="description" name="description">{{ $profile['publicDescription'] }}</textarea>
    					</div>
    					
                        <div class="form-group mt-2">
                            <label for="openStatus">Open Status</label>
                            <select class="form-control" id="openStatus" name="openStatus">
                                <option value="1" @if( $profile['availability'] == "1") selected="" @endif>Open</option>
                                <option value="2" @if( $profile['availability'] == "2") selected="" @endif>Pickup</option>
                                <option value="0" @if( $profile['availability'] == "0") selected="" @endif>Closed</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="openStatusNote">Business Tag line</label>
                            <textarea class="form-control" id="openStatusNote" name="openStatusNote">{{ $profile['availabilityText'] }}</textarea>
                        </div>

                        <div class="form-group form-check form-switch ps-0 pt-3">

                            <input class="form-check-input ms-auto" type="checkbox" id="shipping" name="shipping" @if($shipping) checked @endif>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="shipping">Shipping</label> <br>
                            <input class="form-check-input ms-auto" type="checkbox" id="pickup" name="pickup" @if($pickup) checked @endif>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="pickup">Pick Up</label> <br>
                            <input class="form-check-input ms-auto" type="checkbox" id="remoteCon" name="remoteCon" @if($remoteCon) checked @endif>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="remoteCon">Remote Consulting</label> <br>
                            <input class="form-check-input ms-auto" type="checkbox" id="delivery" name="delivery" @if($delivery) checked @endif>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="delivery">Delivery to Home</label> <br>
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="imprint">Imprint, Copyright, Trade Mark</label>
                            <textarea class="form-control" id="imprint" name="imprint">{{ $profile['imprint'] }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="tos">Terms of Services</label>
                            <textarea class="form-control" id="tos" name="tos">{{ $profile['tos'] }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="revocation">Return & Exchange Policy</label>
                            <textarea class="form-control" id="revocation" name="revocation">{{ $profile['revocation'] }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="privacy">Privacy Policy</label>
                            <textarea class="form-control" id="privacy" name="privacy">{{ $profile['privacy'] }}</textarea>
                        </div>

                          <h4 class="pt-3">Location & Delivery</h4>
                                          
                        <div class="form-group mt-2">
    						<label for="street">Business Address</label>
    						<input type="text" class="form-control" id="street" name="street" placeholder="Enter Street, House No." value="{{ $profile['street'] }}">
    					</div>
    					<div class="form-group mt-2">
    						<label for="zipcode">Postal Code</label>
    						<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Postal Code" value="{{ $profile['zip'] }}" style="width: 100px;">
    					</div>
    					<div class="form-group mt-2">
    						<label for="city">City</label>
    						<input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{ $profile['city'] }}"">
    					</div>
    					<div class="form-group mt-2">
    						<label for="country">Country</label>
    						<select class="form-control" id="country" name="country" ">
                                <option value="">Select Country</option>
                                @foreach($countries as $count)

                                	<option value="{{ $count['id'] }}" @if( $profile['countryId'] == $count['id']) selected="" @endif>{{ $count['name'] }}</option>
                                @endforeach
    						</select>
    					</div>

                        <div class="form-group mt-2">
                            <label for="radius">Delivery Radius</label>
                            <input type="text" class="form-control" id="radius" name="radius" placeholder="Enter Serving Radius in meters." @if( isset($profile['customFields']['radius'])) value="{{ $profile['customFields']['radius'] }}"" @endif>
                        </div>
                        <div class="form-group mt-2">
                            <label for="longitude">Longitude</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude" @if( isset($profile['customFields']['longitude'])) value="{{ $profile['customFields']['longitude'] }}""  @endif>
                        </div> 
                        <div class="form-group mt-2">
                            <label for="latitude">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude"  @if( isset($profile['customFields']['latitude'])) value="{{ $profile['customFields']['latitude'] }}""  @endif>
                        </div>
                        <div class="form-group mt-2">
                            <label for="pinlocation">google P📍n Location</label>
                            <input type="text" class="form-control" id="pinlocation" name="pinlocation" placeholder="Enter Pin Location."  @if( isset( $profile['customFields']['pinlocation']) ) value="{{ $profile['customFields']['pinlocation'] }}""  @endif>
                        </div>
                         <div class="form-group mt-2">
                            <label for="googlemap">googlemap</label>
                            <input type="text" class="form-control" id="googlemap" name="googlemap" placeholder="Add googlemap Embed code here."  @if( isset( $profile['customFields']['googlemap']) ) value="{{ $profile['customFields']['googlemap'] }}"  @endif>
                        </div>
                        
                        <h4 class="pt-3">Merchant Social Media</h4>

                        <div class="form-group mt-2">
                            <label for="facebook">facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Add your facebook Link URL here"  @if( isset( $profile['customFields']['facebook']) ) value="{{ $profile['customFields']['facebook'] }}""  @endif>
                        </div>
                        <div class="form-group mt-2">
                            <label for="instagram">instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Add Instagram URL here."  @if( isset( $profile['customFields']['instagram']) ) value="{{ $profile['customFields']['instagram'] }}"  @endif>
                        </div>
                        <div class="form-group mt-2">
                            <label for="youtube">youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Add your youtube Link URL here."  @if( isset( $profile['customFields']['youtube']) ) value="{{ $profile['customFields']['youtube'] }}""  @endif>
                        </div>
                        <div class="form-group mt-2">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Add your Instagram Link URL here."  @if( isset( $profile['customFields']['twitter']) ) value="{{ $profile['customFields']['twitter'] }}""  @endif>
                        </div>
                       
						
    					<button type="submit" class="btn bg-gradient-dark mt-3 loading">Submit</button>
					</form>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
<script>
    // The DOM element you wish to replace with Tagify
    var tags = document.querySelector('input[name=tags]');

    // initialize Tagify on the above input node reference
    new Tagify(tags);
</script>
      
<script>


    $(document).ready(function(){
        $('#category').on('change', function(){
            var cat_id = $("#category").val();
            console.log(cat_id);
            $.ajax({
                type: "GET",
                url: "{{ url('get_subcategories') }}/"+cat_id,
                success:function(data){
                    data = $.parseJSON(data);
                    var dropDownOptions = `<option value="">Select Sub Category</option>`;
                    if(data.response && data.categories.length > 0){
                        
                        $.each(data.categories, function(index, elem){
                            dropDownOptions += `<option value="${elem.id}">${elem.name}</option>`
                        });
                        $("#sub_category").html(dropDownOptions);
                    }
                    else{
                        $("#sub_category").html(dropDownOptions);
                    }
                    
                }
            })
        });
    });

</script>
@endsection