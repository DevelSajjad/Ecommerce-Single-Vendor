<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $reviews = ProductReview::with('user', 'product')->latest()->get();
        return view('admin.review.review', compact('reviews'));
    }

    public function reviewApprove($id)
    {
        ProductReview::findOrFail($id)->update([
            'status' => 'Approve',
            'updated_at' => Carbon::now()
        ]);
        return redirect()->back()->with('message', 'Review Approved');
    }

    public function reviewDelete($id)
    {
        ProductReview::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Review Delete Successful');
    }

}
