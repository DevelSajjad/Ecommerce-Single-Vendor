<?php 

    namespace App\Traits;

use Illuminate\Support\Facades\Auth;

    trait AdminPermission {
        public function checkAdminPermission()
        {
            if (
                empty(Auth::user()->role->permission['permission']['brand']['list']) && \Route::is('brands') 
               || empty(Auth::user()->role->permission['permission']['review']['list']) && \Route::is('admin-review') 
               || empty(Auth::user()->role->permission['permission']['slider']['list']) && \Route::is('slider') 
               || empty(Auth::user()->role->permission['permission']['subadmin']['view']) && \Route::is('subamin.index') 
                
            )

            {
               return redirect()->route('admin.dashboard'); 
            }
        }
    }

?>