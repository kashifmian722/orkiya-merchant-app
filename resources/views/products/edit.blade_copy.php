@extends('layouts.app')

@section('style')
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
	                    	<h6 class="text-white text-capitalize ps-3">Edit Product</h6>
	                    </div>
                  	</div>
    			</div>
    		</div>
    		<div class="card-body px-0 pb-2">
    			<div class="table-responsive p-0">
    				<form class="align-items-center mx-5" id="product_form" action="{{ url('/products/edit/'.$product['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
    					<div class="form-group ">
    						<label for="productType">Product Type</label>
    						<select class="form-control" id="productType" name="type">
                                <option value="">Select Product Type</option>
    							<option value="product" @if( $product['productType'] == "product") selected="" @endif>Product</option>
      							<option value="storeWindow" @if( $product['productType'] == "storeWindow") selected="" @endif>Showcase</option>
                                
    						</select>
    					</div>
                        <div class="form-group mt-2">
                            <label for="assignedCategories">Assigned Categories</label>
                            @foreach($product['categories'] as $category)
                                <span class="badge badge-sm bg-gradient-success">{{ $category['name'] }}</span>
                            @endforeach
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
    						<input type="text" class="form-control" id="productName" name="name" placeholder="Enter Product Name" value="{{ $product['name'] }}">
    					</div>
    					<div class="form-group mt-2">
    						<label for="productDescription">Description</label>
                            <textarea class="form-control ckeditor" id="productDescription" name="description">{{ $product['description'] }}</textarea>
    					</div>
    					<div class="form-group form-check form-switch ps-0 pt-3">
    						<input class="form-check-input ms-auto" type="checkbox" id="productStatus" name="status" @if($product['active']) checked @endif>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="productStatus">Active</label>
    					</div>
                        <div id="price_section" @if( $product['productType'] == "storeWindow") style="display: none;" @endif>
                            <div class="form-group mt-2">
                                <label for="productPrice">Price</label>
                                <input type="number" class="form-control" id="productPrice" placeholder="Enter Price" name="price" value="{{ $product['price'] }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="productStock">Stock</label>
                                <input type="number" class="form-control" id="productStock" placeholder="Enter Stock" name="stock" value="{{ $product['stock'] }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="taxRate">Tax Rate</label>
                                <select class="form-control" id="taxRate" name="tax">
                                    <option value="0">Select Tax Rate</option>
                                    <option value="6" @if( $product['tax'] == "0") selected="" @endif>0%</option>
                                    <option value="6" @if( $product['tax'] == "6") selected="" @endif>6%</option>
                                  	<option value="16" @if( $product['tax'] == "16") selected="" @endif>16%</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="ean">EAN Number</label>
                            <input type="text" class="form-control" id="ean" name="ean" value="{{ $product['ean'] }}" placeholder="Enter EAN Number">
                        </div>
                        <div class="form-group mt-2">
                            <label for="delivery">Delivery Time</label>
                            <select class="form-control" id="delivery" name="delivery">
                                <option value="0">Select Delivery Time</option>
                                @foreach($delivery_times as $deliveryTime)
                                    <option value="{{ $deliveryTime['id'] }}" @if( $product['deliveryId'] == $deliveryTime['id']) selected="" @endif>{{ $deliveryTime['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mt-2">
                                    <label class="form-label" for="customFile">Product Image 1</label>
                                    <input type="file" name="image1" class="form-control" id="customFile" onchange="loadFile(event,1)" />
                                    <input type="hidden" name="image1Id" @if(count($product['media']) && isset($product['media'][0]['id'])) value="{{ $product['media'][0]['id'] }}" @else value="" @endif>
                                    <img @if(count($product['media']) && isset($product['media'][0]['url'])) src="{{ $product['media'][0]['url'] }}" @else src="" @endif class="output_image" id="output1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-2">
                                    <label class="form-label" for="customFile">Product Image 2</label>
                                    <input type="file" name="image2" class="form-control" id="customFile" onchange="loadFile(event,2)" />
                                    <input type="hidden" name="image2Id" @if(count($product['media']) && isset($product['media'][1]['id'])) value="{{ $product['media'][1]['id'] }}" @else value="" @endif>
                                    <img @if(count($product['media']) && isset($product['media'][1]['url'])) src="{{ $product['media'][1]['url'] }}" @else src="" @endif class="output_image" id="output2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-2">
                                    <label class="form-label" for="customFile">Product Image 3</label>
                                    <input type="file" name="image3" class="form-control" id="customFile" onchange="loadFile(event,3)" />
                                    <input type="hidden" name="image3Id" @if(count($product['media']) && isset($product['media'][2]['id'])) value="{{ $product['media'][2]['id'] }}" @else value="" @endif>
                                    <img @if(count($product['media']) && isset($product['media'][2]['url'])) src="{{ $product['media'][2]['url'] }}" @else src="" @endif class="output_image" id="output3">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mt-2">
                                    <label class="form-label" for="customFile">Product Image 4</label>
                                    <input type="file" name="image4" class="form-control" id="customFile" onchange="loadFile(event,4)" />
                                    <input type="hidden" name="image4Id" @if(count($product['media']) && isset($product['media'][3]['id'])) value="{{ $product['media'][3]['id'] }}" @else value="" @endif>
                                    <br>
                                    <img @if(count($product['media']) && isset($product['media'][3]['url'])) src="{{ $product['media'][3]['url'] }}" @else src="" @endif class="output_image" id="output4">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-2">
                                    <label class="form-label" for="customFile">Product Image 5</label>
                                    <input type="file" name="image5" class="form-control" id="customFile" onchange="loadFile(event,5)" />
                                    <input type="hidden" name="image5Id" @if(count($product['media']) && isset($product['media'][4]['id'])) value="{{ $product['media'][4]['id'] }}" @else value="" @endif>
                                    <img @if(count($product['media']) && isset($product['media'][4]['url'])) src="{{ $product['media'][4]['url'] }}" @else src="" @endif class="output_image" id="output5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-2">
                                    <label class="form-label" for="customFile">Product Image 6</label>
                                    <input type="file" name="image6" class="form-control" id="customFile" onchange="loadFile(event,6)" />
                                    <input type="hidden" name="image6Id" @if(count($product['media']) && isset($product['media'][5]['id'])) value="{{ $product['media'][5]['id'] }}" @else value="" @endif>
                                    <img @if(count($product['media']) && isset($product['media'][5]['url'])) src="{{ $product['media'][5]['url'] }}" @else src="" @endif class="output_image" id="output6">
                                </div>
                            </div>
                            
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
          var type = $("#productType").val();
          

          if(!product_name){
            fieldsAreOk = false;
            toastr.error("Product Name is required.");
          }
          if(!type){
            fieldsAreOk = false;
            toastr.error("Product Type is required.");
          }
          else if(type == "product"){
            var tax = $("#taxRate").val();
            var price = $("#productPrice").val();
            if(!price || price == 0){
                fieldsAreOk = false;
                toastr.error("Price is required.");
            }
            if(!tax || tax == 0){
                fieldsAreOk = false;
                toastr.error("Tax is required.");
            }
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
@endsection