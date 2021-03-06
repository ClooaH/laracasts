@extends('layoutsimple')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Change an existing Article</h1>

        <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')


                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea class="textarea" type="text" id="excerpt" name="excerpt">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea class="textarea" type="text" id="body" name="body">{{ $article->body }}</textarea>
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