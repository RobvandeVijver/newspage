@extends('common.master')

@section('content')
<section id="contentSection">
    <div class="row">
        <div class="col-lg-16 col-md-16 col-sm-16">
            <div class="left_content">
                <div class="single_post_content">
                    <h2><span>Sport</span></h2>

                    <div>
                        @if(session('status'))
                            <div class="message is-primary">
                                <div class="message-header">
                                    {{session('status')}}
                                    <form action="{{ route('sport.index') }}">
                                        <button type="submit">OK</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>

                    @auth
                    <br>
                    <form action="{{ route('sport.create') }}">
                        <button class="btn" type="submit">Maak sport artikel aan</button>
                    </form>
                    <br>
                    @endauth
                    @foreach($sports as $sport)
                        <div class="media wow fadeInDown"> <a href="{{ route('sport.show', $sport) }}" class="featured_img"> <img alt="" src="{{ asset('/storage/sports/'. $sport->image) }}" height="400"> </a>
                            <div>
                                <a href="{{ route('sport.show', $sport) }}">
                                    <div>
                                        {{ $sports->title }} <br>
                                    </div>
                                </a>
                                <div>
                                    {{ $sport->created_at }}
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
