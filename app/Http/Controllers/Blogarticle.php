<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogarticle extends Controller
{
    public function detail($slug)
    {
        $data = [
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
                    <p><span style="font-weight: 400;"><img src="' . url('img/nyabuk-gunung.jpg') . '" alt="" width="50%" height="auto" /></span></p>
                    <p><span style="font-weight: 400;">Nyabuk Gunung merupakan tradisi bercocok tanam dengan cara membuat lahan pertanian berundak-undak agar tidak terjadi longsor. Tradisi ini merupakan salah satu upaya konservasi lahan pertanian yang sering dilakukan oleh masyarakat lereng Gunung Sumbing dan Sindoro. Masyarakat beradaptasi dengan topografi lahan di Jawa Tengah yang kebanyakan tidak rata karena banyaknya pegunungan. Lahan pertanian dibuat dengan blok-blok pada lereng gunung sehingga kecepatan dan jumlah aliran air permukaan berkurang dan air hujan yang turun bisa ditahan di petak-petak pertanian agar meningkatkan penyerapan air di tanah.</span></p>
                    <p>&nbsp;</p>
                    <p><span style="font-weight: 400;">3. Paca Goya (Maluku Utara)</span></p>
                    <p><span style="font-weight: 400;"><img src="' . url('img/pacagoya.jpg') . '" alt="" width="50%" height="auto" /></span></p>
                    <p><span style="font-weight: 400;">Paca Goya dilakukan sehabis panen cengkeh atau pala. Paca berarti membersihkan dan Goya berarti tempat keramat yang ada di tengah hutan pegunungan Kalaodi. Pelaksanaan ritual ini dipimpin oleh </span><em><span style="font-weight: 400;">sowohi</span></em><span style="font-weight: 400;">, didampingi oleh bobato adat, dan diiringi oleh para anak cucu. Banyak susunan kegiatan yang dilakukan dalam ritual Paca Goya, salah satunya adalah membersihkan bukit atau gunung dan tempat keramat di sana. Hal ini bertujuan sebagai bentuk rasa syukur masyarakat kepada Tuhan akan sumber daya alam yang melimpah dan bentuk tanggung jawab masyarakat untuk melestarikan alam. Bagi penduduk Maluku Utara, </span><span style="font-weight: 400;">bukit atau gunung diyakini membawa keberuntungan dan tempat suci paling hijau harus tetap utuh dan harus selalu dilindungi.</span></p>
                    <p>&nbsp;</p>
                    <p><span style="font-weight: 400;">Itulah 3 tradisi daerah yang masih dijaga dan dilakukan oleh masyarakat. Dari tradisi-tradisi tersebut, masyarakat berusaha menekankan dan mengingatkan anak cucunya agar terus menjaga keberlangsungan hutan dan alam Indonesia. Sebagai penduduk Indonesia yang juga menikmati hasil kekayaan alam negeri ini, alangkah baiknya jika kita memiliki </span><span style="font-weight: 400;">kesadaran diri untuk menjaga alam terlepas dari tidak adanya tradisi yang melestarikan alam di daerah kita.</span></p>',
            ],
            'image' => url('img/mantari.jpg'),
            'created_at' => date('Y-m-d'),
        ];
        $data['header_active'] = 'blog-artikel';

        return view('layout.blog-article-detail', $data);
    }
}
