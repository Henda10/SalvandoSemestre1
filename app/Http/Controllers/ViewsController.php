<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function user_list()
    {
        return view('user_list');
    }

    public function motorcycle_guys_list()
    {
        return view('motorcycle_guys_list');
    }

    public function clients_list()
    {
        return view('clients_list');
    }

    public function orders()
    {
        return view('orders');
    }
}
