<!-- ======= About Us Section ======= -->
<section id="tentang" class="about">
    <div class="container">

        <div class="section-title">
            <h2>Tentang Kami</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{ $about['image'] }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                {!! ($about['content']) !!}
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->