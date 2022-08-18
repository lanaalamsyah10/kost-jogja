@extends('layouts.main')

@section('container')
    <h1>Kosan bantul</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" class="rounded" alt="Cinque Terre">
@endsection
