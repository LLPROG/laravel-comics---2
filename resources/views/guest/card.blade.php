@extends('guest.template.base')

@section('title', $title)

@section('content')

    <div class="hero">

    </div>

    <div class="line">

    </div>

    <div class="container">

        <div class="single-card">
            <img src="{{ $singleCard['thumb'] }}" alt="{{ $singleCard['title'] }}">
        </div>

        <h1>
            {{ $singleCard['title'] }}
        </h1>

        <div class="disponibility">
            <div class="cont-price">
                <div class="price">U.S. Price: ${{ $singleCard['price'] }}</div>
                <div class="available">AVAILBLE</div>
            </div>
            <div class="check-available">
                Check Available
            </div>
        </div>

        <p class="description">
            {{ $singleCard['description'] }}
        </p>

    </div>

    <div class="specifity">

        <div class="container">

            <div class="talent">
                <h2>
                    Talent
                </h2>

                <div class="art">
                    <span>
                        Art by:
                    </span>
                    <p>
                        @foreach ($singleCard['artists'] as $artist)
                            <a href="#!">{{ $artist }}</a>
                        @endforeach
                    </p>
                </div>

                <div class="written">
                    <span>
                        Written by:
                    </span>
                    <p>
                        @foreach ($singleCard['writers'] as $writer)
                            <a href="#!">{{ $writer }}</a>
                        @endforeach
                    </p>
                </div>

            </div>

            <div class="specs">

                <div class="series">
                    <span>Series:</span>
                    <a href="#!" class="link-series">{{ $singleCard['series'] }}</a>
                </div>

                <div class="price">
                    <span>U.S.Price:</span>
                    <span  class="in-price">{{ $singleCard['price'] }}</a>
                </div>

                <div class="sale-date">
                    <span>On Sale Date:</span>
                    <span>{{ $singleCard['sale_date'] }}</span>
                </div>

            </div>

        </div>

    </div>


@endsection
