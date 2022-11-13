<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class WishlistController extends Controller
{
    public function wishlistView()
    {
        return view('user.wishlist');
    }

    public function wishlistData()
    {
        $wishlist = Wishlist::with('product')->where('user_id', auth()->user()->id)->latest()->get();
        return response()->json($wishlist);
    }
}
