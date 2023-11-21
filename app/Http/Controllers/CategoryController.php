<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    // Fetch Sub Categories of Given Main Category
    public function getSubCategories($id, Request $request){
    	$cat_response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/sub-category',[
        	'parent' => $id
        ]);
        
        if($cat_response->ok()){
        	$response_data = ['response' => true, 'categories' => $cat_response->json()];
        	return json_encode($response_data);
        }
        else{
        	return json_encode(['response' => false]);
        }
    }

}
