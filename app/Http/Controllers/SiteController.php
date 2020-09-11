<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index', ['test' => '1234']);
    }

    public function category()
    {
        return view('category');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
