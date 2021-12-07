@extends('base')

@section('content')
    <h1>{{ $article['name'] }}</h1>
    <p>{{ $article['content'] }}</p>
@endsection