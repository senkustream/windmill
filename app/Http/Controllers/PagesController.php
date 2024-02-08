<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function forgotPassword()
    {
        return view('pages/forgot-password');
    }

    public function notFound()
    {
        return view('pages/404');
    }

    public function blank()
    {
        return view('pages/blank');
    }
}
