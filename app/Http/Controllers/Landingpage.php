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

        $data['slider'] = [
            [
                'title' => 'Welcome to Cempaka Foundation',
                'slug' => '',
                'content' => 'Community Empowerment to make changes',
                'image' => url('img/slider1.jpg'),
            ],
        ];

        $data['about'] = [
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

        $data['usaha'] = [
            [
                'title' => 'Kedai Hutan Cempaka',
                'slug' => '',
                'content' => [
                    'icon' => 'mug-hot',
                    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate itaque, nam rem enim tempora quas quam officiis dolorem quae eius adipisci ipsam. Rerum adipisci voluptas, nobis animi labore dolore esse?',
                    'content' => '',
                    'link_whatsapp' => '#',
                    'link_instagram' => '#',
                ],
                'image' => '',
            ],
            [
                'title' => 'Cempaka Education Center',
                'slug' => '',
                'content' => [
                    'icon' => 'campground',
                    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate itaque, nam rem enim tempora quas quam officiis dolorem quae eius adipisci ipsam. Rerum adipisci voluptas, nobis animi labore dolore esse?',
                    'content' => '',
                    'link_whatsapp' => '#',
                    'link_instagram' => '#',
                ],
                'image' => '',
            ],
        ];

        $data['partner'] = [
            [
                'title' => 'Cargill',
                'slug' => '',
                'content' => '',
                'image' => url('img/cargill.png'),
            ],
            [
                'title' => 'Cargill',
                'slug' => '',
                'content' => '',
                'image' => url('img/cargill.png'),
            ],
            [
                'title' => 'Cargill',
                'slug' => '',
                'content' => '',
                'image' => url('img/cargill.png'),
            ],
            [
                'title' => 'Cargill',
                'slug' => '',
                'content' => '',
                'image' => url('img/cargill.png'),
            ],
            [
                'title' => 'Cargill',
                'slug' => '',
                'content' => '',
                'image' => url('img/cargill.png'),
            ],
            [
                'title' => 'Cargill',
                'slug' => '',
                'content' => '',
                'image' => url('img/cargill.png'),
            ],
        ];

        $data['galeri_kategori'] = [];
        $galeri = [
            [
                'title' => 'Kedai',
                'slug' => '',
                'content' => [
                    'category' => 'Kedai'
                ],
                'image' => url('img/gk1.jpg'),
            ],
            [
                'title' => 'Kedai',
                'slug' => '',
                'content' => [
                    'category' => 'Kedai'
                ],
                'image' => url('img/gk2.jpg'),
            ],
            [
                'title' => 'Kedai',
                'slug' => '',
                'content' => [
                    'category' => 'Kedai'
                ],
                'image' => url('img/gk3.jpg'),
            ],
            [
                'title' => 'Kedai',
                'slug' => '',
                'content' => [
                    'category' => 'Kedai'
                ],
                'image' => url('img/gk4.jpg'),
            ],
            [
                'title' => 'Kedai',
                'slug' => '',
                'content' => [
                    'category' => 'Kedai'
                ],
                'image' => url('img/gk5.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga1.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga2.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga3.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga4.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga5.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga6.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga7.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga8.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga9.jpg'),
            ],
            [
                'title' => 'Adventure',
                'slug' => '',
                'content' => [
                    'category' => 'Adventure'
                ],
                'image' => url('img/ga10.jpg'),
            ],
        ];
        $data['galeri'] = $galeri;

        // remmap galeri
        foreach ($galeri as $gk => $g) {
            $ks = strtolower(str_replace(' ', '-', $galeri[$gk]['content']['category']));
            $data['galeri'][$gk]['content']['kategori_slug'] = $ks;
            $data['galeri_kategori'][$ks] = $g['content']['category'];
        }

        // dd($data);

        // http Request
        $news = Http::get('https://newsdata.io/api/1/news?apikey=pub_104699f4789ada7b0eb870b4f896ddc59d277&language=in&q=lingkungan OR sampah');
        $data['news'] = $news->json();



        return view('main', $data);
    }
}
