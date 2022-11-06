<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function englishLanguage()
    {
        session()->get('language');
        session()->forget('language');
        session()->put('language','english');
        return redirect()->back();
    }
    public function banglaLanguage()
    {
        session()->get('bangla');
        session()->forget('language');
        session()->put('language', 'bangla');
        return redirect()->back();
    }
}
