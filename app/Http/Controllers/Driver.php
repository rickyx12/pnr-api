<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Driver extends BaseController
{

    public function sendCurrentLocation(Request $request)
    {
        $fbId = $request->input('fbId');
		$location = $request->input('location');

		DB::table('drivers_location')->insert(
		    [
				'fb_id' => $fbId,
				'location' => $location,
				'details' => date('Y-m-d H:i:s') 
		    ]
		);		

		return response()->json(['status' => 'success']);

    }	
}

