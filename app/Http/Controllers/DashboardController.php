<?php

namespace App\Http\Controllers;

use App\Models\PriceList;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data = PriceList::all();
        // dd($data);
        return view('admin.pages.dashboard');
    }
}
