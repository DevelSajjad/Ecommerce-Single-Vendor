<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report.index');
    }
    public function dateReports(Request $request)
    {
        $date = new DateTime($request->date);
        $dateFormat = $date->format('d F Y');
        $orders = Order::where('order_date', $dateFormat)->latest()->get();
        return view('admin.report.report', compact('orders'));
    }
    public function monthReports(Request $request)
    {
        $orders = Order::where('order_month', $request->month_name)->where('order_year', $request->year_name)->latest()->get();
        return view('admin.report.report', compact('orders'));
    }
    public function yearReports(Request $request)
    {
        $orders = Order::where('order_year', $request->year)->latest()->get();
        return view('admin.report.report', compact('orders'));
    }
}
