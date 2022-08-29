<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'slug' => '',
            'content' => '<h3><strong>VISI</strong></h3>
            <p>Terciptanya Masyarakat Mandiri Berbasis Ekonomi dan Berbudaya Lingkungan.</p>
            <h3>MISI</h3>
            <ol>
            <li>Mewujudkan Ekonomi berbasis lingkungan dan masyarakat.</li>
            <li>Melestarikan hutan dan sumber daya air.</li>
            <li>Keterlibatan sosial masyarakat untuk pengembangan ekonomi dan kelestarian hutan dengan</li>
            <li>konsep agroforestry.</li>
            <li>Pendidikan Lingkungan untuk meningkatkan kesadaran dan kepedulian&amp;#160;masyarakat terhadap tanggungjawab lingkungan.</li>
            </ol>',
            'image' => url('img/abouts.jpg'),
        ];
        $data['header_active'] = 'tentang';

        return view('layout.about', $data);
    }
}
