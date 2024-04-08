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


@section('footer-top')
<div class="footer-top">

    <img src="{{Vite::asset('resources/img/footer-bg.jpg')}}" alt="">

    

        <div class="footer-list">
    
            @foreach($linkList as $currentLink)
            <div class="lists">
                
                    
                        <h4>{{ $currentLink['title'] }}</h4>
    
                        <ul>
                            @foreach ($currentLink['links'] as $linkItem)
                            <li>{{ $linkItem }}</li>
                            @endforeach
                        </ul>
                    
                        
                    </div>
            @endforeach
    
            <div class="logo-footer">
    
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
    
            </div>
    
        </div>

    
</div>


@endsection


