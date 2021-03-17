@extends('common.master')

@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>Binnenland</span></h2>
                        <div class="media wow fadeInDown"><img alt="" src="/images/slider_img2.jpg">
                            <div>
                                <!--  {{ $binnenland->image }} toevoegen aan src  -->
                                {{ $binnenland->title }}<br>
                                    <br>
                                {{ $binnenland->body }}<br>
                                    <br>
                                Schrijver: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    {{ $binnenland->writer }}<br>
                                Aangemaakt op: &nbsp&nbsp{{ $binnenland->created_at }}<br>
                                Geupdate op: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $binnenland->updated_at }}<br>
                            </div>
                        </div>
                        @auth
                            <br>
                            <form action="{{ route('binnenland.edit', $binnenland) }} " class="media wow fadeInDown">
                                <button type="submit">Bewerk deze pagina</button>
                            </form>
                            <br>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
