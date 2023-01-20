
{{-- 
        "navLinks" =>$headerNav,
        "comics" => $comics,
        "topBunnerLinks" => $topBunner,
        "footerLinks" => $footer,
        "bottomBunnerLinks" =>  $bottomBunner, --}}

        @php
       
        @endphp

@extends('layout.app')

@section('main')


    <article class="jumbotron"></article>

    <article class="cards-container py_l">
        <div class="container text-center position-relative">

            <h1 class="cards-title text-uppercase bg-primary py-2 px-4 position-absolute fs-3"> current series </h1>

            <div class="row row-cols-6">

                {{--   <div class="col"
            v-for="(comic) in comics">

          <div class="dc-card text-start">

            <div class="dc-card-img">
              <img class="img-fluid"
                  :src="comic.thumb"
                  :alt="comic.series">
            </div>

            <h6 class="text-uppercase small py-3">{{ comic.series }}</h6>
          </div> --}}
            </div>
        </div>

        <button class="btn btn-primary text-light text-uppercase rounded-0 fw-bold py-2 px-5">load more</button>
        </div>
    </article>
@endsection