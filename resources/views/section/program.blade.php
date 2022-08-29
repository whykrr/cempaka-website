<!-- ======= Team Section ======= -->
<section id="program" class="news section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Program Cempaka</h2>
        </div>

        <div class="row">
            @foreach ($program as $item)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <a href="{{ url('program/' . $item['slug']) }}" class="content">
                        <img src="{{ $item['image'] }}" alt="">
                        <h4>{{ $item['title'] }}</h4>
                        {{-- <span class="text-muted">{{ $item['creator'] }}</span> --}}
                        <p>
                            {{ $item['content']['description'] }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Team Section -->
