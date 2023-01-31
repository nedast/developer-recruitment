<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverSignupRequest;
use App\Http\Requests\DriverUpdateRequest;
use App\Models\Driver;

class DriverController extends Controller
{
	public function signup(DriverSignupRequest $request)
	{
        $id = auth()->user()->id;
        //check for driver is exists
        $driver = Driver::where("id",$id)->get();
        if (! $driver) {
            $driver = Driver::create($request->all());
        }
        return response()->json($driver);

	}

	public function update(DriverUpdateRequest $request)
	{
	}
}
