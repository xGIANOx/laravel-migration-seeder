<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        // $houses = House::orderByDesc('id')->get();
        return view('trains');
    }
    
}
