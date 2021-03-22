@extends('common.master')

@section('content')
    <section id="sliderSection">
        <div class="fashion_technology_area">
            <div class="left_content">
                <div class="single_post_content">
                    @auth
                        <h2><span>Bewerk uw artikel</span></h2>
                        <br>
                        <div class="media wow fadeInDown">
                            <!-- Begin Edit form -->
                            <form method="POST" action="{{ route('binnenland.update', $binnenland) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <br>
                                <div class="field">
                                    <label>Titel</label>
                                    <div class="control">
                                        <input name="title" class="form-control @error('title') is-danger @enderror"
                                               type="text" placeholder="De titel hier..."
                                               value="{{ old('title', $binnenland->title) }}" width="500"
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
                                            is-danger @enderror" placeholder="Schrijf het artikel hier..." >{{ old('body', $binnenland->body) }}</textarea>

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
                                               value="{{ old('writer', $binnenland->writer) }}"
                                        >
                                    </div>
                                    @error('writer')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <div>
                                    <p>Huidige afbeelding:</p>
                                    @if($binnenland->image)
                                        <img src="{{asset('/storage/binnenlands/'. $binnenland->image)}}" alt="" height="200">
                                    @else
                                        <br>
                                        <p>Geen huidige afbeelding voor dit artikel</p>
                                        <br>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Verander afbeelding</label>
                                        <input name="image" id="image" type="file" class="custom-file-input">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <button type="submit">Opslaan</button>
                                    <br><br>
                                </div>
                            </form>
                                <div class="row">
                                    <form action="{{ route('binnenland.show', $binnenland) }}" >
                                        <button type="submit">Ga terug</button>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                                <div class="row">
                                    <form action="{{ route('binnenland.destroy', $binnenland) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">Verwijder artikel</button>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                            <!-- End Edit form -->
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </section>
@endsection
