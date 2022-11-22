<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Program extends Controller
{
    public function detail($slug)
    {
        $API_URL = env('APP_API_URL');

        $get_data = Http::get("{$API_URL}/display/content/$slug")->json();
        $data = $get_data['data'];

        // $data = [
        //     'title' => 'Program Kampung Peduli Gizi',
        //     'slug' => 'program-kampung-peduli-gizi',
        //     'content' => [
        //         'description' => 'Ketersediaan pangan selalu menjadi prioritas utama masyarakat di tengah-tengah masa pandemi Covid-19.Akan tetapi, tak jarang masyarakat menemukan bahan makanan yang mulai langka dan berharga tinggi.Apalagi jenis jenis bahan makanan sumber protein hewani,yang semakin hari harganya semakin tinggi.Sehingga sulit di jangkau oleh masyarakat terutama di masa pandemic seperti sakarang.Namun telur dapat menjadi alternatif makanan sehat di masa pandemi Covid-19. Pasalnya, makanan ini harganya cukup terjangkau dibandingkan sumber protein hewani lainnya. Ditambah lagi, telur mengandung banyak nutrisi sehat seperti air, karbohidrat, lemak dan protein.',
        //         'content' => '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ketersediaan pangan selalu menjadi prioritas utama masyarakat di tengah-tengah masa pandemi Covid-19.Akan tetapi, tak jarang masyarakat menemukan bahan makanan yang mulai langka dan berharga tinggi.Apalagi jenis jenis bahan makanan sumber protein hewani,yang semakin hari harganya semakin tinggi.Sehingga sulit di jangkau oleh masyarakat terutama di masa pandemic seperti sakarang.Namun telur dapat menjadi alternatif makanan sehat di masa pandemi Covid-19. Pasalnya, makanan ini harganya cukup terjangkau dibandingkan sumber protein hewani lainnya. Ditambah lagi, telur mengandung banyak nutrisi sehat seperti air, karbohidrat, lemak dan protein.</p>

        //         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Di latar belakangi atas hal tersebut maka Cempaka Foundation bersama PT Cargil Indonesia meluncurkan program &ldquo;Kampung Peduli Gizi&rdquo; .Program yang di rancang untuk memenuhi kebutuhan protein masyarakat di Jawa dan Sulawesi.Realisasi dari program ini adalah dengan di bangunya 3 pusat pembelajaran terpadu di Magelang,Pasuruan dan sidrap untuk melatih sikitar 1.000 peternak ayam petelur.Dan hasil telur dari tiga lokasi tersebut akan di alokasikan kepada sekitar 3.000 masyarakat setempat yang mengalami kesulitan dalam memenuhi kebutuhan asupan protein akibat pandemi COVID 19.</p>

        //         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PINSAR Petelur Nasional Magelang dan LOC Makasar di rangkul untuk bekerjasama membuat modul modul pelatihan yang juga merupakan respon cepat tanggap terhadap dampak COVID 19,untuk memperbaiki taraf hidup masyarakat setempat.Lebih dari ini,secara Nasional Cargil bersama Cempaka juga memberikan donasi dalam bentuk sembako,alat kesehatan dan obat obatan.Untuk membantu masyarakat dalam menghadapi pandemi COVID 19.</p>

        //         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ldquo;Kami sangat mengapresiasi dukungan dan inisiatif Cargill Indonesia melalui Cempaka Foundation dalam membantu memperkuat pemberdayaan masyarakat setempat, khususnya para peternak, sehingga dapat lebih maksimal dalam mengelola peternakan ayam petelur. Selama pandemi, rantai pasokan protein mengalami keterhambatan yang mana sangat berdampak kepada peternak, masyarakat, dan perekonomian kita. Oleh karena itu, program seperti ini sangat penting karena dapat meningkatkan keahlian dan kecakapan para peternak dalam mengelola perternakan mereka, meningkatkan produktivitas peternakan, meningkatkan efisiensi, menjaga pasokan protein, dan meningkatkan taraf kehidupan mereka,&rdquo; kata Dr. Ir. Nasrullah, M.Sc, Direktur Jenderal Peternakan dan Kesehatan Hewan Kementerian Pertanian.</p>

        //         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada masing-masing pusat pelatihan, peternak setempat akan memperoleh beragam pengetahuan yang terdapat di dalam modul pelatihan, seperti pengetahuan tentang manajemen produksi telur, serta manajemen nutrisi dan kesehatan pada peternakan ayam petelur, termasuk langkah-langkah biosekuriti. Tidak hanya untuk peternak, pusat pelatihan ini juga terbuka untuk para mahasiswa yang ingin belajar mengenai peternakan ayam petelur. Selain sebagai sarana edukasi, pusat pembelajaran ini juga akan turut berperan sebagai sumber penyediaan pasokan protein untuk masyarakat. Tiga ribu kilogram telur yang dihasilkan dari ketiga pusat pelatihan, akan diberikan kepada masyarakat setempat.</p>

        //         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sarifudin Lathif, Direktur Cempaka Foundation menuturkan&rdquo;,bahwa sangat senang dipilih Cargill menjadi salah satu bagian dari Kampung Peduli Gizi, sebuah program yang dibuat untuk memberikan dukungan kepada peternak ayam petelur skala kecil sehingga mereka dapat mengelola peternakannya dan memungkinkan mereka untuk memiliki pendapatan yang berkelanjutan. Sementara itu, di saat yang bersamaan, sebagian telur yang dihasilkan selama modul pelatihan akan juga diberikan dalam bentuk donasi kepada masyarakat sekitar.</p>',
        //     ],
        //     'image' => url('img/program-kampung-peduli-gizi.jpg'),
        //     'created_at' => date('Y-m-d'),
        // ];
        $data['header_active'] = 'program';


        return view('layout.program-detail', $data);
    }
}
