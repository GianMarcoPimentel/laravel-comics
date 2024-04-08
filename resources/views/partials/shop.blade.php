<section>

    <div class="container">
        <div class="posts">

           {{--  @foreach($cards as $currentCard)

                <div class="card">

                    <img src="{{ $currentCard['image']}}" alt="">

                    <span>{{ $currentCard['action']  }}</span>

                </div>
        
            @endforeach --}}
            <div class="post">

                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="post">

                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </div>

            <div class="post">

                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                <span>SUBSCRIPTION </span>
            </div>

            <div class="post">

                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>

            <div class="post">

                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISE</span>
            </div>




        </div>
    </div>
</section>