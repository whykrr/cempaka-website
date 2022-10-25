@extends('main')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="#">Blog & Artikel</a></li>
                        <li>{{ $title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <h1>{{ $title }}</h1>

                <div style="height: 450px; position: relative; overflow: hidden; margin-bottom: 20px; width: 100%;">
                    <img style="width: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"
                        src="{{ $image }}" alt="{{ $title }}">
                </div>

                {!! $content['content'] !!}
            </div>
        </section>

    </main>
@endsection
