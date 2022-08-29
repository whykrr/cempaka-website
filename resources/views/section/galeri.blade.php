<!-- ======= Portfolio Section ======= -->
<section id="galeri" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Galeri</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($galeri_kategori as $gkkey => $gk)
                        <li data-filter=".filter-{{ $gkkey }}">{{ $gk }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            @foreach ($galeri as $g)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $g['content']['kategori_slug'] }}">
                    <div class="portfolio-wrap">
                        <img src="{{ $g['image'] }}" class="img-fluid" alt="{{ $g['title'] }}">
                        <div class="portfolio-info">
                            <h4>{{ $g['title'] }}</h4>
                            {{-- <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Portfolio Section -->
