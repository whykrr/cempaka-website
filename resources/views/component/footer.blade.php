<!-- ======= Footer ======= -->
<?php
$sosial = [
    [
        'title' => 'WhatsApp',
        'slug' => '',
        'content' => [
            'link' => 'https://api.whatsapp.com/send?phone=6281216742910',
            'icon' => 'whatsapp',
        ],
        'image' => '',
    ],
    [
        'title' => 'Instagram',
        'slug' => '',
        'content' => [
            'link' => 'https://www.instagram.com/cempaka.foundation',
            'icon' => 'instagram',
        ],
        'image' => '',
    ],
    [
        'title' => 'Youtube',
        'slug' => '',
        'content' => [
            'link' => 'https://www.youtube.com/channel/UCI9tRgdcK5xnZN9Swg-kESg',
            'icon' => 'youtube',
        ],
        'image' => '',
    ],
];
?>
<footer id="footer">
    <div class="container">
        <h3>Cempaka Foundation</h3>
        {{-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> --}}
        <div class="social-links">
            @foreach ($sosial as $s)
                <a href="{{ $s['content']['link'] }}" target="_blank"><i
                        class="bx bxl-{{ $s['content']['icon'] }}"></i></a>
            @endforeach
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Cempaka Foundation</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
            Designed by <a href="https://bingkaikarya.com/">Bingkai Karya</a>
        </div>
    </div>
</footer><!-- End Footer -->
