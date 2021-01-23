<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return view('biz.demo');   
    }

    public function end()
    {
        return view('biz.demo-end');   
    }
}
