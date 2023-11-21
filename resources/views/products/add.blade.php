@extends('layouts.app')

@section('style')
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/image-uploader/image-uploader.min.css') }}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&display=swap"
          rel="stylesheet">
<style type="text/css">
	.form-control{
		padding: 1rem !important;
		background-color: #e5e5e5 !important;
	}
    .output_image{
        width: 25%;
        margin-top: 5px;
    }
    #second_level_dropdown, #third_level_dropdown{
        display: none;
    }
    .tagify {
        --tag-bg: #f7fef5;
    }

    .preview-image-container {
        position: relative;
        max-width: 150px;
        height: auto;
        margin-right: 10px;
        margin-bottom: 10px;
      }

      .preview-image {
        max-width: 100%;
        height: auto;
      }

      .delete-image-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: #f8d7da;
        border: none;
        color: #721c24;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        font-weight: bold;
        font-size: 14px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
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
	                    	<h6 class="text-white text-capitalize ps-3">Add Product</h6>
	                    </div>
                  	</div>
    			</div>
    		</div>
    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-0">
    				<form class="align-items-center mx-5" id="product_form" action="{{ url('/products/add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    					<div class="form-group ">
    						<label for="productType">Product Type</label>
    						<select class="form-control" id="productType" name="type" required="">
                                <option value="">Select Product Type</option>
    							<option value="product">Product</option>
      							<option value="storeWindow">Showcase</option>
    						</select>
    					</div>
                        <div class="form-group ">
                            <label for="category">Category</label>
                            <select class="form-control" id="category_level_1" name="category_level_1">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)

                                    <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="second_level_dropdown">
                            <label for="category">Category</label>
                            <select class="form-control" id="category_level_2" name="category_level_2">
                                
                            </select>
                        </div>
                        <div class="form-group" id="third_level_dropdown">
                            <label for="category">Category</label>
                            <select class="form-control" id="category_level_3" name="category_level_3">
                                
                            </select>
                        </div>
    					<div class="form-group mt-2">
    						<label for="productName">Product Name</label>
    						<input type="text" class="form-control" id="productName" name="name" placeholder="Enter Product Name" required="">
    					</div>
    					<div class="form-group mt-2">
    						<label for="productDescription">Description</label>
                            <textarea class="form-control ckeditor" id="productDescription" name="description"></textarea>
    					</div>
    					<div class="form-group form-check form-switch ps-0 pt-3">
    						<input class="form-check-input ms-auto" type="checkbox" id="productStatus" name="status">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="productStatus">Active</label>
    					</div>
                        <div id="price_section">
                            <div class="form-group mt-2">
                                <label for="productPrice">Price</label>
                                <input type="number" class="form-control" id="productPrice" placeholder="Enter Price" name="price">
                            </div>
                            <div class="form-group mt-2">
                                <label for="productStock">Stock</label>
                                <input type="number" class="form-control" id="productStock" placeholder="Enter Stock" name="stock">
                            </div>
                            <div class="form-group mt-2">
                                <label for="taxRate">Tax Rate</label>
                                <select class="form-control" id="taxRate" name="tax">
                                    <option value="0">Select Tax Rate</option>
                                    <option value="0">0%</option>  
                                    <option value="6">6%</option>
                                  	<option value="16">16%</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="ean">EAN Number</label>
                            <input type="text" class="form-control" id="ean" name="ean" placeholder="Enter EAN Number">
                        </div>

                        <div class="form-group mt-2">
                            <label for="delivery">Delivery Time</label>
                            <select class="form-control" id="delivery" name="delivery">
                                <option value="0">Select Delivery Time</option>
                                @foreach($delivery_times as $deliveryTime)
                                    <option value="{{ $deliveryTime['id'] }}">{{ $deliveryTime['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- <div class="form-group mt-2">
                            <label for="tags">Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags" >
                        </div>
                        <div class="form-group mt-2">
                            <label for="keywords">Search Keywords</label>
                            <input type="text" class="form-control" id="keywords" name="keywords" >
                        </div> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <label class="active">Choose up to 6 images</label>
                                    <div class="input-images" style="padding-top: .5rem;"></div>
                                </div>
                                
                            </div>
                            
                        </div>
  
                                
                        
    					<button type="submit" id="submit_form" class="btn bg-gradient-dark mt-5">Submit</button>
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

    var keywords = document.querySelector('input[name=keywords]');

    // initialize Tagify on the above input node reference
    new Tagify(tags);
    new Tagify(keywords);
</script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">


    $(document).ready(function(){
        $("#productType").on('change', function(){
            var type = $(this).val();
            var priceSection = $("#price_section");
            if(type == "storeWindow"){
                priceSection.css("display", "none");
            }
            else{
                priceSection.css("display", "block");
            }
        });


        $("#submit_form").click(function(e){
          e.preventDefault();

          var fieldsAreOk = true;

          var product_name = $("#productName").val();
          var price = $("#productPrice").val();
          var tax = $("#taxRate").val();
          var type = $("#productType").val();
          var organization = $("#organization").val();

          if(!product_name){
            fieldsAreOk = false;
            toastr.error("Product Name is required.");
          }
          if(!type){
            fieldsAreOk = false;
            toastr.error("Product Type is required.");
          }
          else if(type == "product"){
            if(!price || price == 0){
                toastr.error("Price is required.");
            }
            if(!tax || tax == 0){
                toastr.error("Tax is required.");
            }
          }
          var $fileUpload = $("input[type='file']");
          if (parseInt($fileUpload.get(0).files.length) > 6){
            fieldsAreOk = false;
            toastr.error("You are only allowed to upload a maximum of 6 files");
          }
          if(fieldsAreOk){
            showLoader();
            $('#product_form').submit();
          }
          
        });



        $('#category_level_1').on('change', function(){
            var cat_id = $("#category_level_1").val();
            console.log(cat_id);
            $.ajax({
                type: "GET",
                url: "{{ url('get_subcategories') }}/"+cat_id,
                success:function(data){
                    data = $.parseJSON(data);
                    var dropDownOptions = `<option value="">Select Sub Category</option>`;
                    if(data.response && data.categories.length > 0){
                        
                        if(data.categories.length > 0){
                            $("#second_level_dropdown").css("display", "block");
                            resetLevelThreeDropdown();
                            $.each(data.categories, function(index, elem){
                                dropDownOptions += `<option value="${elem.id}">${elem.name}</option>`
                            });
                            $("#category_level_2").html(dropDownOptions);
                        }
                        else{
                            resetLevelTwoDropdown();
                            resetLevelThreeDropdown();

                        }
                            
                    }
                }
            })
        });

        $('#category_level_2').on('change', function(){
            var cat_id = $("#category_level_2").val();
            $.ajax({
                type: "GET",
                url: "{{ url('get_subcategories') }}/"+cat_id,
                success:function(data){
                    data = $.parseJSON(data);
                    var dropDownOptions = `<option value="">Select Sub Category</option>`;
                    if(data.response && data.categories.length > 0){
                        
                        if(data.categories.length > 0){
                            $("#third_level_dropdown").css("display", "block");
                            $.each(data.categories, function(index, elem){
                                dropDownOptions += `<option value="${elem.id}">${elem.name}</option>`
                            });
                            $("#category_level_3").html(dropDownOptions);
                        }
                        else{
                            resetLevelThreeDropdown();

                        }
                            
                    }
                }
            })
        });

        function resetLevelTwoDropdown(){
            $("#second_level_dropdown").css("display", "none");
            $("#category_level_2").html("");
            $("#category_level_2").val("");
        }
        function resetLevelThreeDropdown(){
            $("#third_level_dropdown").css("display", "none");
            $("#category_level_3").html("");
            $("#category_level_3").val("");
        }
    });

</script>
<script type="text/javascript" src="{{ asset('assets/image-uploader/image-uploader.min.js') }}"></script>

<script type="text/javascript">
    $('.input-images').imageUploader({
            imagesInputName: 'images',
            maxSize: 100 * 1024 * 1024,
            maxFiles: 6
        });
</script>
@endsection