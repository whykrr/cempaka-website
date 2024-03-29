<!-- ======= Our Clients Section ======= -->
<section id="partner" class="clients">
    <div class="container">

        <div class="section-title">
            <h2>Partner Kami</h2>
        </div>

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @foreach ($partner as $p)
                    <div class="swiper-slide">
                        <img src="{{ $p['image'] }}" class="img-fluid" alt="{{ $p['title'] }}">
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Our Clients Section -->
