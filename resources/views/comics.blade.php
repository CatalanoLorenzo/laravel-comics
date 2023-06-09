@extends('layout.app')
@section('jumbo')
<section class="jumbo">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</section>
@endsection
@section('showcard')
<section class="showcard ">
    <div class="container position-relative">
        <div class="current_series p-2 text-center position-absolute">
            <h3>CURRENT SERIES</h3>
        </div>
        <div class="row row-cols-6 py-5">
            @foreach($comics as $comic)
            <!-- cards -->
            <div class="col p-2">
                <div class="cards">
                    <div class="  p-0">
                        <div class="cover">
                            <img src="{{$comic['thumb']}}" class="card-img-top " alt="{{$comic['title']}}">

                        </div>
                    </div>
                    <div class="title p-1">
                        <h6 class="card-title text-white">{{$comic['title']}}</h6>
                    </div>
                </div>
            </div>
            <!-- cards -->
            @endforeach
        </div>
        <a name="" id="" class="btn load_more position-absolute rounded-0" href="#" role="button">
            <span class="text-white"><strong>Load More</strong></span>
        </a>
    </div>
</section>
@endsection