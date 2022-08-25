@extends('main')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>News</h2>
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
                {!! $content['content'] !!}
            </div>
        </section>

    </main>
@endsection
