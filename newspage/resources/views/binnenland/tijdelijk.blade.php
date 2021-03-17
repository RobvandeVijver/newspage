@auth
    <h2><span>Bewerk Modes</span></h2>
    <br>
    <div class="media wow fadeInDown">
        <!-- Begin Edit form -->
        <form method="POST" action="{{ route('binnenland.store') }}">
            @csrf
            @method('PUT')

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

            <div class="field">
                <label>Artikel</label>
                <div class="control">
                    <input name="body" class="input @error('body') is-danger @enderror"
                           type="text" placeholder="De titel hier..."
                           value="{{ old('body') }}"
                    >
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label>Schrijver naam</label>
                <div class="control">
                    <input name="writer" class="input @error('writer') is-danger @enderror"
                           type="text" placeholder="De titel hier..."
                           value="{{ old('writer') }}"
                    >
                </div>
                @error('writer')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>

        </form>
        <!-- End Edit form -->
    </div>
@endauth
