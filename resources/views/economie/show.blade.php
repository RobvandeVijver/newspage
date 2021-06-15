@extends('common.master')

@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>{{ $economie->title }}</span></h2>
                        @auth
                            <br>
                            <form action="{{ route('economie.edit', $economie) }} " class="media wow fadeInDown">
                                <button class="btn" type="submit">Bewerk deze pagina</button>
                            </form>
                            <br>
                        @endauth
                        <div class="media wow fadeInDown"><img alt="" src="{{ asset('/storage/economies/'. $economie->image) }}" height="950">
                            <div>
                                <br>
                                <br>
                                {{ $economie->body }}
                                <br>
                                <br>
                                Schrijver: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    {{ $economie->writer }}<br>
                                Aangemaakt op: &nbsp&nbsp{{ $economie->created_at }}<br>
                                Geupdate op: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $economie->updated_at }}<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
