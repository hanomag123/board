@extends('layouts.default')

@section('content')
    <h1>Все элементы</h1>
    @if (count($posts) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="{{ route('detail', $post->slug) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
