@extends('common.master')

@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>{{ $sport->title }}</span></h2>
                        @auth
                            <br>
                            <form action="{{ route('sport.edit', $sport) }} " class="media wow fadeInDown">
                                <button class="btn" type="submit">Bewerk deze pagina</button>
                            </form>
                            <br>
                        @endauth
                        <div class="media wow fadeInDown"><img alt="" src="{{ asset('/storage/sports/'. $sport->image) }}" height="950">
                            <div>
                                <br>
                                <br>
                                {{ $sport->body }}
                                <br>
                                <br>
                                Schrijver: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    {{ $sport->writer }}<br>
                                Aangemaakt op: &nbsp&nbsp{{ $sport->created_at }}<br>
                                Geupdate op: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $sport->updated_at }}<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
