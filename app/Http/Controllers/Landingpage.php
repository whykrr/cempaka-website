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
        // $news = Http::get('https://newsdata.io/api/1/news?apikey=pub_104699f4789ada7b0eb870b4f896ddc59d277&language=in&q=lingkungan OR sampah');
        // $data['news'] = $news->json();

        $data['news'] = [
            [
                'title' => '3 Tradisi Daerah di Indonesia yang Berguna untuk Pelestarian Alam',
                'slug' => '',
                'content' => [
                    'icon' => 'mug-hot',
                    'description' => 'Indonesia memiliki tradisi yang melimpah dari daerah-daerahnya. Bahkan, daerah yang berdekatan bisa memiliki tradisi yang berbeda-beda. Tradisi di Indonesia kebanyakan melibatkan rasa syukur kepada alam atas sumber daya alam yang sudah diberikan. Kegiatan ini menjadi salah satu upaya masyarakat yang terus ada untuk melestarikan alam karena diselenggarakan tahunan. Berikut 3 tradisi daerah di Indonesia yang dapat menjadi upaya untuk melestarikan alam.',
                    'content' => '<p><span style="font-weight: 400;">Indonesia memiliki tradisi yang melimpah dari daerah-daerahnya. Bahkan, daerah yang berdekatan bisa memiliki tradisi yang berbeda-beda. Tradisi di Indonesia kebanyakan melibatkan rasa syukur kepada alam atas sumber daya alam yang sudah diberikan. Kegiatan ini menjadi salah satu upaya masyarakat yang terus ada untuk melestarikan alam karena diselenggarakan tahunan. Berikut 3 tradisi daerah di Indonesia yang dapat menjadi upaya untuk melestarikan alam.</span></p>
                    <p>&nbsp;</p>
                    <p><span style="font-weight: 400;">1. Mantari Bondar (Sumatera Utara)</span></p>
                    <p><span style="font-weight: 400;"><img src="' . url('img/mantari.jpg') . '" alt="" width="50%" height="auto" /></span></p>
                    <p><span style="font-weight: 400;">Mantari Bondar adalah tradisi yang berasal dari Desa Hatabosi yang merupakan singkatan dari empat desa, yaitu Haunatas, Tanjung Rompa, Bonan Dolok dan Siranap di wilayah Marancar, Kabupaten Tapanuli Selatan. Mantari Bondar bertujuan untuk menjaga dan mengawasi sumber air dan Kawasan Cagar Alam Sibuali-Buali. Mantari berarti Menteri dan Bondar berarti saluran atau aliran air yang pemilihannya ditentukan oleh masyarakat di rapat adat dan juga terdapat 8 orang panjago bondar untuk membantu tugas Mantari Bondar. Tradisi ini sudah berusia seabad lebih dan sebenarnya Mantari Bondar adalah petugas yang menjaga hutan dan mengawasi mata air dari kerusakan serta mengurus agar aliran air tidak tersumbat.</span></p>
                    <p>&nbsp;</p>
                    <p><span style="font-weight: 400;">2. Nyabuk Gunung (Jawa)</span></p>
                    <p><span style="font-weight: 400;">Nyabuk Gunung merupakan tradisi bercocok tanam dengan cara membuat lahan pertanian berundak-undak agar tidak terjadi longsor. Tradisi ini merupakan salah satu upaya konservasi lahan pertanian yang sering dilakukan oleh masyarakat lereng Gunung Sumbing dan Sindoro. Masyarakat beradaptasi dengan topografi lahan di Jawa Tengah yang kebanyakan tidak rata karena banyaknya pegunungan. Lahan pertanian dibuat dengan blok-blok pada lereng gunung sehingga kecepatan dan jumlah aliran air permukaan berkurang dan air hujan yang turun bisa ditahan di petak-petak pertanian agar meningkatkan penyerapan air di tanah.</span></p>
                    <p>&nbsp;</p>
                    <p><span style="font-weight: 400;">3. Paca Goya (Maluku Utara)</span></p>
                    <p><span style="font-weight: 400;">Paca Goya dilakukan sehabis panen cengkeh atau pala. Paca berarti membersihkan dan Goya berarti tempat keramat yang ada di tengah hutan pegunungan Kalaodi. Pelaksanaan ritual ini dipimpin oleh </span><em><span style="font-weight: 400;">sowohi</span></em><span style="font-weight: 400;">, didampingi oleh bobato adat, dan diiringi oleh para anak cucu. Banyak susunan kegiatan yang dilakukan dalam ritual Paca Goya, salah satunya adalah membersihkan bukit atau gunung dan tempat keramat di sana. Hal ini bertujuan sebagai bentuk rasa syukur masyarakat kepada Tuhan akan sumber daya alam yang melimpah dan bentuk tanggung jawab masyarakat untuk melestarikan alam. Bagi penduduk Maluku Utara, </span><span style="font-weight: 400;">bukit atau gunung diyakini membawa keberuntungan dan tempat suci paling hijau harus tetap utuh dan harus selalu dilindungi.</span></p>
                    <p>&nbsp;</p>
                    <p><span style="font-weight: 400;">Itulah 3 tradisi daerah yang masih dijaga dan dilakukan oleh masyarakat. Dari tradisi-tradisi tersebut, masyarakat berusaha menekankan dan mengingatkan anak cucunya agar terus menjaga keberlangsungan hutan dan alam Indonesia. Sebagai penduduk Indonesia yang juga menikmati hasil kekayaan alam negeri ini, alangkah baiknya jika kita memiliki </span><span style="font-weight: 400;">kesadaran diri untuk menjaga alam terlepas dari tidak adanya tradisi yang melestarikan alam di daerah kita.</span></p>',
                ],
                'image' => url('img/mantari.jpg'),
                'created_at' => date('Y-m-d'),
            ],
        ];


        return view('layout.landingpage', $data);
    }
}
