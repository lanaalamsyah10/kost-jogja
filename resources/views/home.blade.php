@extends('layouts.main')

@section('container')
    <h1 class=" text-end">Mau nyari kost?</h1>
    <h4 class="section-subheading font-weight-normal mb-4">Dapatkan infonya dan langsung sewa di KostJogja.</h4>
    <div class="row justify-content-start">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary rounded-right" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div id="hero">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-6">
                    <h1 class="display-4">
                        Kost jogja
                    </h1>
                    <p>
                        keren pisannn
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/img/home.svg" class="img-fluid" alt="">

                </div>
            </div>
        </div>
    </div>
@endsection
