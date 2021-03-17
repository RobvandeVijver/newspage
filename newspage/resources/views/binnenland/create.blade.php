@extends('common.master')

@section('content')
    <section id="sliderSection">
        <div class="fashion_technology_area">
            <div class="fashion">
                <div class="single_post_content">
                    @auth
                        <h2><span>Bewerk Modes</span></h2>
                        <br>
                        <div class="media wow fadeInDown">
                            <!-- Begin Edit form -->
                            <form method="POST" action="{{ route('binnenland.store') }}" enctype="multipart/form-data">
                                @csrf

                                <br>
                                <div class="field">
                                    <label>Titel</label>
                                    <div class="control">
                                        <input name="title" class="input @error('title') is-danger @enderror"
                                               type="text" placeholder="De titel hier..."
                                               value="{{ old('title') }}"
                                        >
                                    </div>
                                    @error('title')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="field">
                                    <label>Artikel</label>
                                    <div class="control">
                                        <textarea name="body" id="body" cols="30" rows="10" class="input @error('body')
                                            is-danger @enderror" placeholder="Schrijf het artikel hier..." >{{ old('message') }}</textarea>

                                    </div>
                                    @error('body')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="field">
                                    <label>Schrijver naam</label>
                                    <div class="control">
                                        <input name="writer" class="input @error('writer') is-danger @enderror"
                                               type="text" placeholder="Uw naam hier..."
                                               value="{{ old('writer') }}"
                                        >
                                    </div>
                                    @error('writer')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Upload afbeelding</label>
                                        <input name="image" id="image" type="file" class="custom-file-input">
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <br>
                                    <br>
                                    <button type="submit">Artikel opslaan</button>
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
