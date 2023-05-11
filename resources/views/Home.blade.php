@extends('layout.app')

@section('page-title', 'Home page')

@section('content')
    <div class="jumbotron">

        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="logo Dc" class="w-100">

    </div>

    <section class="position-relative img_cnt">

        <div class="container">

            <span class="badge text-bg-primary p-3 current-series">CURRENT SERIES</span>

            <div class="img_wrapper py-5">
                @foreach ($comicsList as $comic)

                    <div class="img_wrap pt-2">
                        <a href="{{$comic['href']}}"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></a>
                        <div class="text-center"><a class="text-white text-decoration-none" href="{{$comic['href']}}">{{$comic['title']}}</a></div>
                    </div>
                    
                @endforeach
            </div>
        </div>
        <div class="text-center pb-5">
            <button type="button" class="btn btn-primary px-4">LOAD MORE</button>
        </div>
    </section>

    <section class="bg-primary">

        <div class="container d-flex justify-content-center">

            <div class='cnt'>
                <div class="d-flex align-items-center">
                    @foreach ($barList as $list)
                        <div class='bar_image d-flex  align-items-center'>
                            <div>
                                <img src="{{Vite::asset($list['href'])}}" alt="$list['title']">
                            </div>
                            <p class="text-white">{{$list['title']}}</p>
                        </div>
                    @endforeach 
                </div>

            </div>

        </div>

    </section>
@endsection