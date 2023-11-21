<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    // Orders Home Page
    public function index(Request $request){
    	$response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/orders');
        
        if($response->ok()){
        	$data = [
	    		'pageTitle' => "Orders",
	    		'orders' => $response->json('data')
	    	];
        }
    	
    	return view('orders.index', $data);
    }

    // POS Orders Home Page
    public function pos_index(Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/orders');
        
        if($response->ok()){
            $data = [
                'pageTitle' => "POS Orders",
                'orders' => $response->json('data')
            ];
        }
        
        return view('orders.pos-index', $data);
    }

    // View Order Detail Page
    public function view($id, Request $request){
        // Fetch Order Details by api
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/order/'.$id);
        
        if($response->ok()){
            $order = $response->json();

            // Check the Order Status and store value
            if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "open"){
                $status = "Open";
            }
            if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid"){
                 $status = "Paid";
            }
          	if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "cancelled"){
                 $status = "Cancel";
            }
            if($order['stateMachineState']['technicalName'] == "completed" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid"){
                 $status = "Complete";
            }

            if($order['stateMachineState']['technicalName'] == "paid" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid"){
                 $status = "POS Order";
            }

            $data = [
                'pageTitle' => "Orders",
                'order' => $order,
                'status' => $status
            ];
        }
        return view('orders.view', $data);
    }

    // View POS Order Detail Page
    public function pos_view($id, Request $request){
        // Fetch Order Details by api
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->get(env("API_BASE_URL").'/merchant-api/v1/order/'.$id);
        
        if($response->ok()){
            $order = $response->json();

            // Check the Order Status and store value
            if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "open"){
                $status = "Open";
            }
            if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid"){
                 $status = "Paid";
            }
            if($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "cancelled"){
                 $status = "Cancel";
            }
            if($order['stateMachineState']['technicalName'] == "completed" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid"){
                 $status = "Complete";
            }
            if($order['stateMachineState']['technicalName'] == "paid" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid"){
                 $status = "POS Order";
            }
            $data = [
                'pageTitle' => "POS Orders",
                'order' => $order,
                'status' => $status
            ];
        }
        return view('orders.pos-view', $data);
    }

    // Mark Order as Paid
    public function markPaid($id, Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/order/'.$id.'/pay');
        
        if($response->ok()){
            $request->session()->flash('success', 'Successfully Marked as paid.');
            return redirect()->back();
        }
        $request->session()->flash('error', 'Something Went Wrong Please try again.');
        return redirect()->back();
    }
  
  	// Mark Order as Cancelled
    public function markCancel($id, Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/order/'.$id.'/cancel');
        if($response->ok()){
            $request->session()->flash('success', 'Successfully Marked as Cancelled.');
            return redirect()->back();
        }
        $request->session()->flash('error', 'Something Went Wrong Please try again.');
        return redirect()->back();
    }

    // Mark Order as Done
    public function markDone($id, Request $request){
        $response = Http::withHeaders([
            'sw-context-token' => $request->session()->get("context_token")
        ])->patch(env("API_BASE_URL").'/merchant-api/v1/order/'.$id.'/done');

        if($response->ok()){
             $request->session()->flash('success', 'Successfully Marked as done.');
            return redirect()->back();
        }
        $request->session()->flash('error', 'Something Went Wrong Please try again.');
        return redirect()->back();

    }
}
