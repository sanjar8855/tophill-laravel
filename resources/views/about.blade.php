@extends('layout')


@section('content')
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">{{ __('words.About us') }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                    </li>
                                    <li>{{ __('words.About us') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-banner different-bg-position section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-banner-content text-center section-space-bottom-95">
                                <div class="section-title">
<!--                                    <span class="about-sub-title text-primary">Our History</span>-->
                                    <h2 class="about-title mb-5">Top Hill Textile</h2>
                                    <p class="short-desc mb-0">
                                        {{ __('words.About us t3') }}
                                    </p>
                                </div>
                            </div>
                            <div class="about-banner-img row">
                                <div class="col-lg-4">
                                    <div class="single-img img-hover-effect">
                                        <img class="img-full" src="{{Storage::url('assets/images/about/banner/1-1-400x500.jpg')}}" alt="About Banner">
                                    </div>
                                </div>
                                <div class="col-lg-4 section-space-top-100">
                                    <div class="single-img img-hover-effect">
                                        <img class="img-full" src="{{Storage::url('assets/images/about/banner/1-2-400x500.jpg')}}" alt="About Banner">
                                    </div>
                                </div>
                                <div class="col-lg-4 section-space-top-100 pt-lg-0">
                                    <div class="single-img img-hover-effect">
                                        <img class="img-full" src="{{Storage::url('assets/images/about/banner/1-3-400x500.jpg')}}" alt="About Banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
@endsection()
