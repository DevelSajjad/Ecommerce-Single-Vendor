<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class IndexController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::orderBy('category_name_en', 'asc')->get();
        return view('frontend.index', $data );
    }
}
