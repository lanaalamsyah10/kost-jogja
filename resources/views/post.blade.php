@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/posts? author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a>
                    in
                    <a href="/posts? category={{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}
                </p></a>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid ">
                    </div>
                @else
                    <img src="/img/house.jpg? {{ $post->category->name }}" alt="{{ $post->category->name }}"
                        class="img-fluid ">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                @if (!auth()->check())
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</a>
                @else
                    <a href="/login">Pesan</a>
                @endif


                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" >
                        Launch demo modal
                    </button> --}}

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="card-title h4 my-4 ">Masuk Ke KostJogja</p>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </div>

                            <div class="card-body">
                                <div class="modal-body">
                                    <p><a class="dropdown-item " href="/login">
                                            <img src="{{ asset('img/pck.png') }}" alt="" style="width:70px;">
                                            Pencari
                                            Kost
                                        </a></p>
                                    <hr class="dropdown-divider">
                                </div>
                                <div class="modal-body">
                                    <p><a class="dropdown-item " href="/login/pemilik">
                                            <img src="{{ asset('img/pmk1.png') }}" alt="" style="width:70px;">
                                            Pemilik
                                            Kost
                                        </a></p>
                                    <hr class="dropdown-divider">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                {{-- <a href="/posts" class="d-block mt-3">sewa</a> --}}
            </div>
        </div>
    </div>
@endsection
