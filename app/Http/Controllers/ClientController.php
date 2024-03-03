<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function shop(){
        return view('client.shop');
    }
    public function news(){
        return view('client.news');
    }
    public function contact(){
        return view('client.contact');
    }
}
