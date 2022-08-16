<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

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
        //$get_coindesk_data = HTTP::get("https://api.coindesk.com/v1/bpi/currentprice.json");
        //$coindesk_data = $get_coindesk_data->json();

        $skills = Skill::all()->sortBy('id');
        $educations = Resume::where('type', '=', 'education')->orderBy('started')->get();
        $jobs = Resume::where('type', '=', 'job')->orderBy('started')->get();

        return view('home')->with([
            "coindesk_data" => $coindesk_data ?? null,
            "skills" => $skills,
            "educations" => $educations,
            "jobs" => $jobs
        ]);
    }
}
