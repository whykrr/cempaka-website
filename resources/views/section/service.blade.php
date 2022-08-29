<!-- ======= Services Section ======= -->
<section id="unit-usaha" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Hutan Cempaka</h2>
        </div>
        <?php
        $color_usaha = ['blue', 'orange', 'yellow', 'red'];
        ?>
        {{-- icon diganti gambar --}}
        <div class="row">
            @foreach ($usaha as $iu)
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <img src="{{ $iu['image'] }}" alt="{{ $iu['title'] }}" width="100%">
                        <h4><a href="">{{ $iu['title'] }}</a></h4>
                        <p>{{ $iu['content']['description'] }}</p>
                        <div class="social">
                            <a target="_blank" href="{{ $iu['content']['link_whatsapp'] }}">
                                <i class="bi bi-whatsapp social-icon"></i>
                            </a>
                            <a target="_blank" href="{{ $iu['content']['link_instagram'] }}">
                                <i class="bi bi-instagram social-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->
