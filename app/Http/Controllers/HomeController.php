<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $get_coindesk_data = HTTP::get("https://api.coindesk.com/v1/bpi/currentprice.json");
        $coindesk_data = $get_coindesk_data->json();
        return view('home')->with("coindesk_data", $coindesk_data);
    }
}
