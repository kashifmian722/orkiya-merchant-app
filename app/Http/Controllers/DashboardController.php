<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    //

    public function index(Request $request){


        $context = $request->session()->get("context_token");
    	$response = Http::withHeaders([
            'sw-context-token' => $context
        ])->get(env("API_BASE_URL").'/merchant-api/v1/dashboard');

        if($response->ok()){

        	$data = $response->json('data');
        	$todaysOrders = count($data['todaysInfo']);
        	$todaysTurnover = 0;
            $todaysPOSOrders = 0;
            $openOrders = 0;
            $completedOrders = 0;
        	foreach($data['todaysInfo'] as $order){
        		if( ($order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid") || ($order['stateMachineState']['technicalName'] == "completed" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid") ){
        			$todaysTurnover += $order['amountTotal'];
                    
        		}

                if( $order['stateMachineState']['technicalName'] == "open" && $order['transactions'][0]['stateMachineState']['technicalName'] == "open" ){
                    $openOrders++;
                }

                if( $order['stateMachineState']['technicalName'] == "completed" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid" ){
                    $completedOrders++;
                }

                if( $order['stateMachineState']['technicalName'] == "paid" && $order['transactions'][0]['stateMachineState']['technicalName'] == "paid" ){
                    $todaysPOSOrders++;
                    $todaysTurnover += $order['amountTotal'];
                }
        	}
        	$orders = $data['lastOrders'];

            $lastSevenDays = [];
            $lastSevenDaysOrder = [];
            $lastSevenDaysTurnover = [];

            for($i=0; $i<7; $i++){
                $desiredDate = date('Y-m-d', strtotime(date("Y-m-d"). ' - '.$i.' days'));
                $desiredDate = strtotime($desiredDate);
                $orderCount = 0;
                $turnOverCount = 0;
                foreach ($data['lastSevenDays'] as $ord) {
                    # code...
                    if( $desiredDate == strtotime($ord['orderDate']) ){
                        if( ($ord['stateMachineState']['technicalName'] == "open" && $ord['transactions'][0]['stateMachineState']['technicalName'] == "paid") || ($ord['stateMachineState']['technicalName'] == "completed" && $ord['transactions'][0]['stateMachineState']['technicalName'] == "paid") || ($ord['stateMachineState']['technicalName'] == "paid" && $ord['transactions'][0]['stateMachineState']['technicalName'] == "paid") ){

                            $turnOverCount += $ord['amountTotal'];
                        }
                        $orderCount++;
                    }
                }
                $day = date('D', $desiredDate);
                array_push($lastSevenDays, $day);
                array_push($lastSevenDaysOrder, $orderCount);
                array_push($lastSevenDaysTurnover, $turnOverCount);
                
            }
            

        	$product_response = Http::withHeaders([
	            'sw-context-token' => $context
	        ])->get(env("API_BASE_URL").'/merchant-api/v1/products');
	        if($product_response->ok()){
	        	$totalProducts = count($product_response->json(['data']));
	        }

            $response = Http::withHeaders([
                'sw-context-token' => $context
            ])->get(env("API_BASE_URL").'/merchant-api/v1/profile');

            $merchant = $response->json();
            
            $checkins = 0;
            if(isset($merchant['customFields']['checkin'])){
                $checkins = $merchant['customFields']['checkin'];
            }
        	$data = [
	    		'pageTitle' => "Dashboard",
	    		'orders' => $orders,
	    		'openOrders' => $openOrders,
                'completedOrders' => $completedOrders,
	    		'totalProducts' => $totalProducts,
	    		'todaysTurnover' => $todaysTurnover,
                'lastSevenDays' =>  $lastSevenDays,
                'lastSevenDaysOrder' => $lastSevenDaysOrder,
                'lastSevenDaysTurnover' => $lastSevenDaysTurnover,
                'checkins' => $checkins,
                'todaysPosOrders' => $todaysPOSOrders
	    	];
        }
    	return view('dashboard.index', $data);
    }
}
