<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function index()
    {
        return view('discover.index');
    }
}
