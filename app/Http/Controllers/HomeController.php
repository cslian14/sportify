<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return redirect()->route('admin');
            } else {
                return view('dashboard');
            }
        } else {
            // User is not authenticated, redirect to login or handle accordingly
            return redirect()->route('login');
        }
    }

    public function index()
    {
        return view('dashboard');
    }
}