@extends('dashboard.layouts.main')
@section('container')
    <h1>{{ $category->name }}</h1>
    <h2>{{ $category->slug }}</h2>

    <h2>daftar postingan</h2>
    @foreach ($posts as $data)
        <img src="{{ asset('storage/' . $data->image) }}" alt="">
        <ul>
            <li>{!! $data->body !!}</li>
        </ul>
    @endforeach
@endsection
