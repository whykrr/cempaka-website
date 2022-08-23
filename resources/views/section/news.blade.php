<?php
$news = $news['results'];
?>
<!-- ======= Team Section ======= -->
<section id="blog-artikel" class="news section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Blog & Artikel</h2>
        </div>

        <div class="row">
            @foreach ($news as $item)

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="content">
                    <img src="{{ $item['image_url'] }}" alt="">
                    <h4>{{ $item['title'] }}</h4>
                    {{-- <span class="text-muted">{{ $item['creator'] }}</span> --}}
                    <span class="text-muted">{{ date('Y-m-d', strtotime($item['pubDate'])) }}</span>
                    <p>
                        {{ $item['description'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Team Section -->