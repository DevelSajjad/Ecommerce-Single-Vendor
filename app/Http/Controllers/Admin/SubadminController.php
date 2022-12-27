<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SubadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role')->where('role_id', '!=', 2)->orderBy('id', 'desc')->get();
        return view('admin.subadmin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('id', '!=', 2)->latest()->get();
        return view('admin.subadmin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name'      => 'required|max:191',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required|numeric',
            'password'  => 'required|string|min:8|confirmed',
            'role_id'   => 'required|numeric'
        ]);
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        return redirect()->route('subadmin.index')->with('message', 'Sub-Admin Create Successful');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subadmin = User::findOrFail($id);
        $roles = Role::where('id', '!=', 2)->latest()->get();
        return view('admin.subadmin.edit', compact('subadmin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required|max:191',
            'email'     => 'required|email',
            'phone'     => 'required|numeric',
            'password'  => 'nullable|string|min:8|confirmed',
            'role_id'   => 'required|numeric'
        ]);

        $user = User::findOrFail($id);

        if($request->password != null) {
            
            $request['password'] = Hash::make($request['password']);
        } else {

            $request['password'] = $user->password;
        }

        $user->update($request->all());
        return redirect()->route('subadmin.index')->with('message', 'Subadmin Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('subadmin.index')->with('message', 'Subadmin Delete Successful');
    }
}
