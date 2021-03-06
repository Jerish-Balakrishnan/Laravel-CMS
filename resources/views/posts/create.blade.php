@extends('layouts.app')

@section('content')
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title');}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('content', 'Content');}}
            {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::file('cover_image');}}
        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-primary']);}}
    {!! Form::close() !!}
@endsection