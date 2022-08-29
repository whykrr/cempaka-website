@extends('main')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="#">Program Cempaka</a></li>
                        <li>{{ $title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <h1>{{ $title }}</h1>
                <center>
                    <img src="{{ $image }}" alt="{{ $title }}" width="75%" class="mb-4 px-auto">
                </center>
                {!! $content['content'] !!}
            </div>
        </section>

    </main>
@endsection
