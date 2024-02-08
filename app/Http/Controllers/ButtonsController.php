<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonsController extends Controller
{
    public function index()
    {
        return view('buttons');
    }
}
