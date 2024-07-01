@extends('layout')

@section('title', $article->title)

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <a href="{{ route('articles.index') }}">Back to Articles</a>
@endsection
