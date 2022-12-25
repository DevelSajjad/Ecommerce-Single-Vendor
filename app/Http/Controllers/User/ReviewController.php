<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function review($product_id) 
    {
        $id = $product_id; 
        return view('user.review.index', compact('id'));
    }

    public function addReview(Request $request)
    {
        $request->validate([
            "rating" => 'required',
            'comment' => 'required'
        ]);

        ProductReview::updateOrCreate([
            'user_id'           => Auth::user()->id,
            'product_id'        => $request->product_id,
        ],
         
        [
            'user_id'           => Auth::user()->id,
            'product_id'        => $request->product_id,
            'rating'            => $request->rating,
            'comment'            => $request->comment,
            'created_at'        => Carbon::now()
        ]);

        return redirect()->back()->with('message', 'Add Review Successful');
    }
}
