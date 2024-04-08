@extends('layouts/app')

@section('content')

<main>
    <div class="container">
        <div class="choice-series">

            <h4>CURRENT SERIES</h4>
        </div>
    </div>

    <div class="container">
       <div class="movies">

           @foreach ($movies as $currentMovie)
           <div class="movie">   
           
                <img class="movie-image" src="{{ $currentMovie['thumb'] }}" alt="">
                <div class="movie-series">
                    {{ $currentMovie['series'] }}
                </div>
                            
            </div>
            @endforeach

       </div>
    </div>
    
    <div class="bottone">
        <button class="button-movie">LOAD MORE</button>
    </div>

</main>

@endsection
