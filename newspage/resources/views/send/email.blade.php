@extends('common.master')

@section('content')
    <section id="sliderSection">
        <div class="fashion_technology_area">
            <div class="">
                <div class="single_post_content">
                    <h2><span>Hier kunt u ons direct mailen:</span></h2>
                    <!-- begin form -->

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <style type="text/css">
                        .box{
                            width:600px;
                            margin:0 auto;
                            border:1px solid #ccc;
                        }
                        .has-error
                        {
                            border-color:#cc0000;
                            background-color:#ffff99;
                        }
                    </style>
                    </head>
                    <body>
                    <br />
                    <br />
                    <br />
                    <div class="container box">
                        <h3 align="center"></h3><br />
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="post" action="{{route('contact.send')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Voeg uw naam toe</label>
                                <input type="text" name="name" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Voeg uw email toe</label>
                                <input type="text" name="email" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Typ hier uw bericht</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" class="btn btn-info" value="Send" />
                            </div>

                        </form>

                    </div>
                    <!-- end form -->
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection
