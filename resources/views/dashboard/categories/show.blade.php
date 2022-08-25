@extends('dashboard.layouts.main')
@section('container')
    <h1>{{ $category->name }}</h1>

    <h4 class="fw-normal mt-4">Daftar Postingan</h4>
    @foreach ($posts as $data)
        <img src="{{ asset('storage/' . $data->image) }}" alt="">
        <ul>
            <li>{!! $data->body !!}</li>
        </ul>
    @endforeach
@endsection
