<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function getDistrict($division_id)
    {
        $district = ShipDistrict::where('division_id', $division_id)->orderBy('district_name', 'asc')->get();
        return response()->json($district);
    }
    public function getState($district_id)
    {
        $state = ShipState::where('district_id', $district_id)->orderBy('state_name', 'asc')->get();
        return response()->json($state);
    }
    public function paymentInfoStore(Request $request)
    {
        dd($request->all());
    }
}
