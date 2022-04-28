@extends('guest.template.base')

@section('title', 'DC Comics - Home')

@section('content')
    {{-- @dd($comics) --}}

    <div class="hero">
        <button class="current-series">
          current-series
        </button>
    </div>

    <div class="bk-cards">
        <div class="container">
            <div class="cards">
                @foreach ($comics as $item)
                    <a href="{{ route('card', ['id' => $item['id']]) }}" class="card">


                        <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">

                        <h3>
                            {{ $item['series'] }}
                        </h3>
                    </a>
                @endforeach
            </div>

            <button class="load-cards">
                load more
            </button>

        </div>
    </div>

@endsection
