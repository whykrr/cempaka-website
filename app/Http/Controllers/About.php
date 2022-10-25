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
        $data = $get_about['data'];
        $data['header_active'] = 'tentang';

        return view('layout.about', $data);
    }
}
