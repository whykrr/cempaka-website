<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Landingpage extends Controller
{
    public function index()
    {
        $API_URL = env('APP_API_URL');
        // API get
        $response = Http::get("{$API_URL}/display/menubar");
        $menubar = $response->json();

        $data = [];
        $data['menubar'] = $menubar['data'];

        $get_slider = Http::get("{$API_URL}/display/content/category/slider")->json();
        $get_program = Http::get("{$API_URL}/display/content/category/program-cempaka")->json();
        $get_usaha = Http::get("{$API_URL}/display/content/category/hutan-cempaka")->json();
        $get_partner = Http::get("{$API_URL}/display/content/category/partner-bisnis")->json();
        $get_galeri = Http::get("{$API_URL}/display/content/category/galeri")->json();
        $get_news = Http::get("{$API_URL}/display/content/category/berita-artikel")->json();

        $data['slider'] = $get_slider['data'];
        $data['program'] = $get_program['data'];
        $data['usaha'] = $get_usaha['data'];
        $data['partner'] = $get_partner['data'];

        $data['galeri_kategori'] = [];
        $data['galeri'] = $get_galeri['data'];
        shuffle($data['galeri']);
        $counter_categori = [];

        // remmap galeri
        foreach ($data['galeri'] as $gk => $g) {
            $ks = strtolower(str_replace(' ', '-', $data['galeri'][$gk]['content']['category']));
            $data['galeri'][$gk]['content']['kategori_slug'] = $ks;

            if (@$counter_categori[$ks] >= 3) {
                unset($data['galeri'][$gk]);
            }

            if (!in_array($g['content']['category'], $data['galeri_kategori'])) {
                $data['galeri_kategori'][$ks] = $g['content']['category'];
                $counter_categori[$ks] = 1;
            } else {
                $counter_categori[$ks]++;
            }
        }

        $data['news'] = $get_news['data'];


        return view('layout.landingpage', $data);
    }
}
