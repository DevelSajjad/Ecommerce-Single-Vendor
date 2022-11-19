<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShipareaController extends Controller
{
    public function divisionPage()
    {
        $data['divisions'] = ShipDivision::orderBy('id', 'desc')->get();
        return view('admin.ShipArea.division_page', $data);
    }
    public function addDivision(Request $request)
    {
        $request->validate([
            'division_name' => 'required'
        ]);
        ShipDivision::insert([
            'division_name' => $request->division_name,
            'created_at'    => Carbon::now(),
        ]);
        return redirect()->back()->with('message', 'Add Division Successful');
    }
    public function editDivisionPage($id)
    {
        $division = ShipDivision::findOrFail($id);
        return view('admin.ShipArea.division_edit', compact('division'));
    }
    public function updateDivision(Request $request)
    {
        $id = $request->coupon_id;

        $request->validate([
            'division_name' => 'required'
        ]);
        ShipDivision::findOrFail($id)->update([
            'division_name' => $request->division_name,
            'created_at'    => Carbon::now(),
        ]);
        return redirect()->route('add-division-page')->with('message', 'Update Division Successful');
    }
    public function deleteDivision($id)
    {
        ShipDivision::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Delete Division Successful');
    }
    public function districtPage()
    {
        $data['districts'] = ShipDistrict::orderBy('id', 'desc')->get();
        $data['divisions'] = ShipDivision::orderBy('id', 'desc')->get();
        return view('admin.ShipArea.district_page', $data);
    }
    public function addDistrict(Request $request)
    {
        $request->validate([
            'division_name' => 'required',
            'district_name' => 'required'
        ]);
        ShipDistrict::insert([
            'division_id' => $request->division_name,
            'district_name' => $request->district_name,
            'created_at'    => Carbon::now(),
        ]);
        return redirect()->back()->with('message', 'Add District Successful');
    }
    public function deleteDistrict($id)
    {
        ShipDistrict::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Delete District Successful');
    }
    public function editUpdateDistrict(Request $request, $district_id)
    {
        if($request->isMethod('get')) {
            $data['district'] = ShipDistrict::findOrFail($district_id);
            $data['divisions']= ShipDivision::orderBy('id', 'desc')->get();
            return view('admin.ShipArea.district_edit', $data);
        }
        $request->validate([
            'division_name' => 'required',
            'district_name' => 'required'
        ]);

        ShipDistrict::findOrFail($district_id)->update([
            'division_id' => $request->division_name,
            'district_name' => $request->district_name,
            'updated_at'    => Carbon::now(),
        ]);
        return redirect()->route('add-district-page')->with('message', 'Update District Successful');
    }
    public function statePage()
    {
        $data['states'] = ShipState::orderBy('id', 'desc')->get();
        $data['divisions']= ShipDivision::orderBy('id', 'desc')->get();
        return view('admin.ShipArea.state_page', $data);
    }
    public function getDistrict($id)
    {
        $district = ShipDistrict::where('division_id', $id)->orderBy('id', 'desc')->get();
        return response()->json($district);
    }
    public function addState(Request $request)
    {
        $request->validate([
            'division_name' => 'required',
            'district_name' => 'required',
            'state_name'    => 'required'
        ]);
        ShipState::insert([
            'division_id' => $request->division_name,
            'district_id' => $request->district_name,
            'state_name'  => $request->state_name,
            'created_at'    => Carbon::now(),
        ]);
        return redirect()->back()->with('message', 'Add State Successful');
    }
    public function editState($id)
    {
        $state = ShipState::findOrFail($id);
        $divisions = ShipDivision::orderBy('id', 'desc')->get();
        return view('admin.ShipArea.editState',compact('state', 'divisions'));
    }
    public function updateState(Request $request)
    {
        $state_id = $request->state_id;
        
        $request->validate([
            'division_name' => 'required',
            'district_name' => 'required',
            'state_name'    => 'required'
        ]);   
        ShipState::findOrFail($state_id)->update([
            'division_id' => $request->division_name,
            'district_id' => $request->district_name,
            'state_name'  => $request->state_name,
            'updated_at'    => Carbon::now(),
        ]);
        return redirect()->route('add-state-page')->with('message', 'Update State Successful');
    }
    public function deleteState($id)
    {
        ShipState::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Delete State Successful');
    }
}
