@extends('main')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Tentang Cempaka Foundation</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ $image }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        {!! $content !!}
                    </div>
                </div>
                <div class="row mt-2">
                    @foreach ($team as $it)
                        <div class="col-md-12 col-lg-12 mb-2">
                            <img src="{{ $it['image'] }}" class="img-fluid" width="100%">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
