@extends('layouts.default')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>{{ $post->price}} </p>
    <a href="{{ route('home') }}">Вернуться</a>
@endsection
