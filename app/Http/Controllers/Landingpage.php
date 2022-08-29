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
                'content' => 'Ruang interaksi alam dan manusia',
                'image' => url('img/slider1.jpg'),
            ],
            [
                'title' => 'Welcome to Cempaka Foundation',
                'slug' => '',
                'content' => 'Ruang interaksi alam dan manusia',
                'image' => url('img/gk1.jpg'),
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

        $data['program'] = [
            [
                'title' => 'Program Kampung Peduli Gizi',
                'slug' => 'program-kampung-peduli-gizi',
                'content' => [
                    'description' => 'Ketersediaan pangan selalu menjadi prioritas utama masyarakat di tengah-tengah masa pandemi Covid-19.Akan tetapi, tak jarang masyarakat menemukan bahan makanan yang mulai langka dan berharga tinggi.Apalagi jenis jenis bahan makanan sumber protein hewani,yang semakin hari harganya semakin tinggi.Sehingga sulit di jangkau oleh masyarakat terutama di masa pandemic seperti sakarang.Namun telur dapat menjadi alternatif makanan sehat di masa pandemi Covid-19. Pasalnya, makanan ini harganya cukup terjangkau dibandingkan sumber protein hewani lainnya. Ditambah lagi, telur mengandung banyak nutrisi sehat seperti air, karbohidrat, lemak dan protein.',
                    'content' => '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ketersediaan pangan selalu menjadi prioritas utama masyarakat di tengah-tengah masa pandemi Covid-19.Akan tetapi, tak jarang masyarakat menemukan bahan makanan yang mulai langka dan berharga tinggi.Apalagi jenis jenis bahan makanan sumber protein hewani,yang semakin hari harganya semakin tinggi.Sehingga sulit di jangkau oleh masyarakat terutama di masa pandemic seperti sakarang.Namun telur dapat menjadi alternatif makanan sehat di masa pandemi Covid-19. Pasalnya, makanan ini harganya cukup terjangkau dibandingkan sumber protein hewani lainnya. Ditambah lagi, telur mengandung banyak nutrisi sehat seperti air, karbohidrat, lemak dan protein.</p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Di latar belakangi atas hal tersebut maka Cempaka Foundation bersama PT Cargil Indonesia meluncurkan program &ldquo;Kampung Peduli Gizi&rdquo; .Program yang di rancang untuk memenuhi kebutuhan protein masyarakat di Jawa dan Sulawesi.Realisasi dari program ini adalah dengan di bangunya 3 pusat pembelajaran terpadu di Magelang,Pasuruan dan sidrap untuk melatih sikitar 1.000 peternak ayam petelur.Dan hasil telur dari tiga lokasi tersebut akan di alokasikan kepada sekitar 3.000 masyarakat setempat yang mengalami kesulitan dalam memenuhi kebutuhan asupan protein akibat pandemi COVID 19.</p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PINSAR Petelur Nasional Magelang dan LOC Makasar di rangkul untuk bekerjasama membuat modul modul pelatihan yang juga merupakan respon cepat tanggap terhadap dampak COVID 19,untuk memperbaiki taraf hidup masyarakat setempat.Lebih dari ini,secara Nasional Cargil bersama Cempaka juga memberikan donasi dalam bentuk sembako,alat kesehatan dan obat obatan.Untuk membantu masyarakat dalam menghadapi pandemi COVID 19.</p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ldquo;Kami sangat mengapresiasi dukungan dan inisiatif Cargill Indonesia melalui Cempaka Foundation dalam membantu memperkuat pemberdayaan masyarakat setempat, khususnya para peternak, sehingga dapat lebih maksimal dalam mengelola peternakan ayam petelur. Selama pandemi, rantai pasokan protein mengalami keterhambatan yang mana sangat berdampak kepada peternak, masyarakat, dan perekonomian kita. Oleh karena itu, program seperti ini sangat penting karena dapat meningkatkan keahlian dan kecakapan para peternak dalam mengelola perternakan mereka, meningkatkan produktivitas peternakan, meningkatkan efisiensi, menjaga pasokan protein, dan meningkatkan taraf kehidupan mereka,&rdquo; kata Dr. Ir. Nasrullah, M.Sc, Direktur Jenderal Peternakan dan Kesehatan Hewan Kementerian Pertanian.</p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada masing-masing pusat pelatihan, peternak setempat akan memperoleh beragam pengetahuan yang terdapat di dalam modul pelatihan, seperti pengetahuan tentang manajemen produksi telur, serta manajemen nutrisi dan kesehatan pada peternakan ayam petelur, termasuk langkah-langkah biosekuriti. Tidak hanya untuk peternak, pusat pelatihan ini juga terbuka untuk para mahasiswa yang ingin belajar mengenai peternakan ayam petelur. Selain sebagai sarana edukasi, pusat pembelajaran ini juga akan turut berperan sebagai sumber penyediaan pasokan protein untuk masyarakat. Tiga ribu kilogram telur yang dihasilkan dari ketiga pusat pelatihan, akan diberikan kepada masyarakat setempat.</p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sarifudin Lathif, Direktur Cempaka Foundation menuturkan&rdquo;,bahwa sangat senang dipilih Cargill menjadi salah satu bagian dari Kampung Peduli Gizi, sebuah program yang dibuat untuk memberikan dukungan kepada peternak ayam petelur skala kecil sehingga mereka dapat mengelola peternakannya dan memungkinkan mereka untuk memiliki pendapatan yang berkelanjutan. Sementara itu, di saat yang bersamaan, sebagian telur yang dihasilkan selama modul pelatihan akan juga diberikan dalam bentuk donasi kepada masyarakat sekitar.</p>',
                ],
                'image' => url('img/program-kampung-peduli-gizi.jpg'),
                'created_at' => date('Y-m-d'),
            ],
        ];

        $data['usaha'] = [
            [
                'title' => 'Kedai Hutan Cempaka',
                'slug' => '',
                'content' => [
                    'description' => 'Cafe || Traditional Culinary || Outbound || Camping || Venue',
                    'content' => '',
                    'link_whatsapp' => 'http://wa.me/6281216742910',
                    'link_instagram' => 'https://www.instagram.com/hutan.cempaka',
                ],
                'image' => url('img/gk1.jpg'),
            ],
            [
                'title' => 'Cempaka Adventure',
                'slug' => '',
                'content' => [
                    'description' => 'Camping, Persewaan motor ATV, Panahan, Rope Course dan Flying Fox.',
                    'content' => '',
                    'link_whatsapp' => 'http://wa.me/6281216742910',
                    'link_instagram' => 'https://www.instagram.com/cempaka.adventure',
                ],
                'image' => url('img/ga1.jpg'),
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
                'title' => 'Cheers',
                'slug' => '',
                'content' => '',
                'image' => url('img/cheers.png'),
            ],
            [
                'title' => 'KTG',
                'slug' => '',
                'content' => '',
                'image' => url('img/ktg.png'),
            ],
            [
                'title' => 'STBC',
                'slug' => '',
                'content' => '',
                'image' => url('img/stbc.png'),
            ],
            [
                'title' => 'Universitas Brawijaya',
                'slug' => '',
                'content' => '',
                'image' => url('img/ub.png'),
            ],
        ];

        $data['galeri_kategori'] = [];
        $galeri = [
            // [
            //     'title' => 'Kedai',
            //     'slug' => '',
            //     'content' => [
            //         'category' => 'Kedai'
            //     ],
            //     'image' => url('img/gk1.jpg'),
            // ],
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
            // [
            //     'title' => 'Adventure',
            //     'slug' => '',
            //     'content' => [
            //         'category' => 'Adventure'
            //     ],
            //     'image' => url('img/ga1.jpg'),
            // ],
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


        // dd($data);

        // http Request
        // $news = Http::get('https://newsdata.io/api/1/news?apikey=pub_104699f4789ada7b0eb870b4f896ddc59d277&language=in&q=lingkungan OR sampah');
        // $data['news'] = $news->json();

        $data['news'] = [
            [
                'title' => '3 Tradisi Daerah di Indonesia yang Berguna untuk Pelestarian Alam',
                'slug' => '3-tradisi',
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
