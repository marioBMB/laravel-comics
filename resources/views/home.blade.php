@extends('layouts.app')

@section('page-title', 'Home Page')


@section('content')

<section class="content">
    <div class="container">

        <section class="current_series">

           @include('commons.banner-image', ['comics' => $comics])
        </section>

    </div>
</section>

@endsection