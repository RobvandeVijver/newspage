@extends('common.master')

@section('content')
<section id="contentSection">
    <div class="row">
        <div class="col-lg-16 col-md-16 col-sm-16">
            <div class="left_content">
                <div class="single_post_content">
                    <h2><span>Economie</span></h2>

                    <div>
                        @if(session('status'))
                            <div class="message is-primary">
                                <div class="message-header">
                                    {{session('status')}}
                                    <form action="{{ route('economie.index') }}">
                                        <button class="btn" type="submit">OK</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>

                    @auth
                    <br>
                    <form action="{{ route('economie.create') }}">
                        <button class="btn" type="submit">Maak economie artikel aan</button>
                    </form>
                    <br>
                    @endauth
                    @foreach($economies as $economie)
                        <div class="media wow fadeInDown"> <a href="{{ route('economie.show', $economie) }}" class="featured_img"> <img alt="" src="{{ asset('/storage/economies/'. $economie->image) }}" height="400"> </a>
                            <div>
                                <a href="{{ route('economie.show', $economie) }}">
                                    <div>
                                        {{ $economies->title }} <br>
                                    </div>
                                </a>
                                <div>
                                    {{ $economie->created_at }}
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
