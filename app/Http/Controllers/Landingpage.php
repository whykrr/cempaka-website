<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Landingpage extends Controller
{
    public function index()
    {
        $data = [];

        // http Request
        $news = Http::get('https://newsdata.io/api/1/news?apikey=pub_104699f4789ada7b0eb870b4f896ddc59d277&language=in&q=lingkungan OR sampah');
        $data['news'] = $news->json();



        return view('main', $data);
    }
}
