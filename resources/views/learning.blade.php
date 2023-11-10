@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="my-wrapper">
                <div class="welcome-box">
                    <h3>Welcome<span style="color: rgb(52, 239, 176);">{{ $category->name }} contents</span></h3>
                </div>
            </div>

            {{-- <div class="slider-container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($category->contents as $content)
                            <div class="swiper-slide">
                                <img src="{{ route('storage.content.show', ['filename' => $content->image_url]) }}"
                                    alt="" class="swiper-image">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div> --}}
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($category->contents as $content)
                        <div class="carousel-item active">
                            <img src="{{ route('storage.content.show', ['filename' => $content->image_url]) }}" class="d-block w-100" alt="...">
                        </div>
                    @endforeach

                    {{-- <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    @foreach ($category->contents as $key => $content)
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}"
                            class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                            aria-label="Slide {{ $key + 1 }}">
                        </button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($category->contents as $key => $content)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="10000">
                            <img src="{{ route('storage.content.show', ['filename' => $content->image_url]) }}"
                                style="object-fit: cover;" alt="...">

                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $content->name }}</h5>
                                <p>{{ $content->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> --}}

        </div>
    </div>
@endsection
