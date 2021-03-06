@extends('layoutsimple')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

            <form method="POST" action="/articles">
                @csrf


                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                    <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{ old('title') }}">
                        @error('title')
                    <div class="help is-danger">{{ $errors->first('title') }}</div>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea class="textarea @error('title') is-danger @enderror" type="text" id="excerpt" name="excerpt">{{ old('excerpt') }}</textarea>
                        <div class="help is-danger">{{ $errors->first('excerpt') }}</div>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea class="textarea @error('title') is-danger @enderror" type="text" id="body" name="body">{{ old('body') }}</textarea>
                        <div class="help is-danger">{{ $errors->first('body') }}</div>
                    </div>
                </div>

                <div class="field">
                    <label for="tags" class="label">Tags</label>
                    <div class="control">

                        <select name="tags[]" multiple>
                            @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        @error('tags')
                        <div class="help is-danger">{{ $message }}</div>
                        @enderror('tags')
                    </div>
                </div>

                <div class="field-is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection