@extends('common.master')

@section('content')
    <section id="sliderSection">
        <div class="fashion_technology_area">
            <div class="left_content">
                <div class="single_post_content">
                    @auth
                        <h2><span>Maak &nbsp economie &nbsp artikel &nbsp aan</span></h2>
                        <br>
                        <div class="media wow fadeInDown">
                            <!-- Begin Edit form -->
                            <form method="POST" action="{{ route('economie.store') }}" enctype="multipart/form-data">
                                @csrf

                                <br>
                                <div class="field">
                                    <label>Titel</label>
                                    <div class="control">
                                        <input name="title" class="form-control @error('title') is-danger @enderror"
                                               type="text" placeholder="De titel hier..."
                                               value="{{ old('title') }}" width="500"
                                        >
                                    </div>
                                    @error('title')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="field">
                                    <label>Artikel</label>
                                    <div class="control">
                                        <textarea name="body" id="body" cols="30" rows="10" class="form-control @error('body')
                                            is-danger @enderror" placeholder="Schrijf het artikel hier..." >{{ old('body') }}</textarea>

                                    </div>
                                    @error('body')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="field">
                                    <label>Schrijver naam</label>
                                    <div class="control">
                                        <input name="writer" class="form-control @error('writer') is-danger @enderror"
                                               type="text" placeholder="Uw naam hier..."
                                               value="{{ old('writer') }}"
                                        >
                                    </div>
                                    @error('writer')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Upload afbeelding</label>
                                        <input name="image" id="image" type="file" class="custom-file-input">
                                    </div>
                                    @error('image')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="row">
                                    <br>
                                    <br>
                                    <button class="btn" type="submit">Artikel opslaan</button>
                                    <br>
                                    <br>
                                </div>
                            </form>
                            <!-- End Edit form -->
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </section>
@endsection
