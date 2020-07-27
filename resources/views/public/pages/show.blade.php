
@extends('public.layouts.app')
@section('title', 'home')
@foreach($page->content as $pageContent)
@section('content')
    <section class="hero is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="columns is-vcentered fit-content">
                <div class="column">
                    <div class="content is-left greeting has-text-centered-mobile">
                        <h1 class="title is-size-4-mobile">
                            {{$pageContent->content}}
                        </h1>
                        <h2 class="subtitle wght-300 is-size-7-mobile">
                            Studerend App- en Web ontwikkelaar
                        </h2>
                    </div>
                </div>
                <div class="column is-vhcentered">
                    <figure class="image absolute">
                        @include('components.svg.shape')
                    </figure>
                    <figure class="image has-ratio">
                        <img src={{asset("/images/michael_rotteveel_no_sunglasses.png")}} alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection
@endforeach

