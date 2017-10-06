<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['client', 'admin']);
        return view('dashboard');
    }

    public function template(Request $request)
    {
        $request->user()->authorizeRoles(['client', 'admin']);
        return view('home');
    }

    public function admin(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('admin');
    }

    public function client(Request $request)
    {
        $request->user()->authorizeRoles(['client']);
        return view('client');
    }
}
