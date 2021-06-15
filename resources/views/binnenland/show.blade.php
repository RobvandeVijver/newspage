@extends('common.master')

@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>{{ $binnenland->title }}</span></h2>
                        @auth
                            <br>
                            <form action="{{ route('binnenland.edit', $binnenland) }} " class="media wow fadeInDown">
                                <button class="btn" type="submit">Bewerk deze pagina</button>
                            </form>
                            <br>
                        @endauth
                        <div class="media wow fadeInDown"><img alt="" src="{{ asset('/storage/binnenlands/'. $binnenland->image) }}" height="950">
                            <div>
                                <br>
                                <br>
                                {{ $binnenland->body }}
                                <br>
                                <br>
                                Schrijver: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    {{ $binnenland->writer }}<br>
                                Aangemaakt op: &nbsp&nbsp{{ $binnenland->created_at }}<br>
                                Geupdate op: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $binnenland->updated_at }}<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
