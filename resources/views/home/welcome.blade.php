@extends('common.master')

@section('content')
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
        </nav>
    </section>
    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">
                    @foreach($random as $item)
                        @if($item instanceof \App\Models\Binnenland)
                            <div class="single_iteam"> <a href="{{ route('binnenland.show', $item) }}"> <img src="{{ asset('/storage/binnenlands/'. $item->image) }}" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="{{ route('binnenland.show', $item) }}">{{ $item->title }}</a></h2>
                                    <p>{{ $item->writer }}</p>
                                </div>
                            </div>
                        @endif
                        @if($item instanceof \App\Models\Economie)
                            <div class="single_iteam"> <a href="{{ route('economie.show', $item) }}"> <img src="{{ asset('/storage/economies/'. $item->image) }}" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="{{ route('economie.show', $item) }}">{{ $item->title }}</a></h2>
                                    <p>{{ $item->writer }}</p>
                                </div>
                            </div>
                        @endif
                        @if($item instanceof \App\Models\Sport)
                            <div class="single_iteam"> <a href="{{ route('sport.show', $item) }}"> <img src="{{ asset('/storage/sports/'. $item->image) }}" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="{{ route('sport.show', $item) }}">{{ $item->title }}</a></h2>
                                    <p>{{ $item->writer }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav">
                            @foreach($sorted as $post)
                                @if($post instanceof \App\Models\Binnenland)
                                <li>
                                    <div class="media"> <a href="{{ route('binnenland.show', $post) }}" class="media-left"></a>
                                        <div class="media-body"> <a href="{{ route('binnenland.show', $post) }}" class="catg_title">{{ $post->title }}</a> </div>
                                        <br>
                                    </div>
                                </li>
                                @endif
                                @if($post instanceof \App\Models\Sport)
                                    <li>
                                        <div class="media"> <a href="{{ route('sport.show', $post) }}" class="media-left"> </a>
                                            <div class="media-body"> <a href="{{ route('sport.show', $post) }}" class="catg_title">{{ $post->title }}</a> </div>
                                            <br>
                                        </div>
                                    </li>
                                @endif
                                @if($post instanceof \App\Models\Economie)
                                    <li>
                                        <div class="media"> <a href="{{ route('economie.show', $post) }}" class="media-left"> </a>
                                            <div class="media-body"> <a href="{{ route('economie.show', $post) }}" class="catg_title">{{ $post->title }}</a> </div>
                                            <br>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>
@endsection

