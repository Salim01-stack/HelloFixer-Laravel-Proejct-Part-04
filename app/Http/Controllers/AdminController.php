<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');  // Make sure to create this view
    }
}