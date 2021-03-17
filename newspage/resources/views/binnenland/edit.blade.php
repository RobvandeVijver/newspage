@extends('common.master')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        @auth
                            <h2><span>Bewerk Modes</span></h2>

                            <div class="media wow fadeInDown">
                                <!-- Begin Edit form -->
                                <img alt="" src="/images/slider_img2.jpg">


                                <!-- End Edit form -->
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


