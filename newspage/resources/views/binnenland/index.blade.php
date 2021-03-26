@extends('common.master')

@section('content')
<section id="contentSection">
    <div class="row">
        <div class="col-lg-16 col-md-16 col-sm-16">
            <div class="left_content">
                <div class="single_post_content">
                    <h2><span>Binnenland</span></h2>

                    <div>
                        @if(session('status'))
                            <div class="message is-primary">
                                <div class="message-header">
                                    {{session('status')}}
                                    <form action="{{ route('binnenland.index') }}">
                                        <button class="btn" type="submit">OK</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>

                    @auth
                    <br>
                    <form action="{{ route('binnenland.create') }}">
                        <button class="btn" type="submit">Maak binnenland artikel aan</button>
                    </form>
                    <br>
                    @endauth
                    @foreach($binnenlands as $binnenland)
                        <div class="media wow fadeInDown"> <a href="{{ route('binnenland.show', $binnenland) }}" class="featured_img"> <img alt="" src="{{ asset('/storage/binnenlands/'. $binnenland->image) }}" height="400"> </a>
                            <div>
                                <a href="{{ route('binnenland.show', $binnenland) }}">
                                    <div>
                                        {{ $binnenland->title }} <br>
                                    </div>
                                </a>
                                <div>
                                    {{ $binnenland->created_at }}
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
