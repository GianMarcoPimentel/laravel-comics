@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="single-cover">
            <img src="{{ $singleMovie['thumb']}}" alt="">
        </div>
    </div>
    <div class="container">
        {{ $singleMovie['title'] }}
        <div class="available">

            <div class="price">
                <p>U.S price :{{ $singleMovie['price'] }}</p>
                <p>AVAILABLE</p>
            </div>

        </div>
        <div class="description">
            {{ $singleMovie['description'] }}
        </div>
    </div>
@endsection