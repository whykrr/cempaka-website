<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class About extends Controller
{
    public function index()
    {
        $API_URL = env('APP_API_URL');

        $get_about = Http::get("{$API_URL}/display/content/about-us")->json();
        $get_team = Http::get("{$API_URL}/display/content/category/team-cempaka")->json();
        $data = $get_about['data'];
        $data['team'] = $get_team['data'];
        $data['header_active'] = 'tentang';

        return view('layout.about', $data);
    }
}
