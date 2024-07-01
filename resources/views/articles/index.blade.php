@extends('layout')

@section('title', 'Articles')

@section('content')
    <h1>Articles</h1>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
