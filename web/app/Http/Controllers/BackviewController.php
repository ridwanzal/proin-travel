<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackviewController extends Controller
{
    public function index()
    {
        return view('backview/pages.login');
    }
}
