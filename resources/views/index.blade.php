@extends('layout')

@section('content')
        <!-- Begin Slider Area -->
        <div class="slider-area">
            <!-- Main Slider -->
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="{{Storage::url('assets/images/slider/bg/slider1.jpg')}}">
                            <div class="container">
                                <div class="slide-content text-white">
                                    <h3 class="sub-title">Big Sale Offer</h3>
                                    <h2 class="title mb-3">Parts & repair</h2>
                                    <p class="short-desc different-width mb-10">Exclusive Exchange Offer & 30% Off In This Week</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="{{Storage::url('assets/images/slider/bg/slider2.jpg')}}">
                            <div class="container">
                                <div class="slide-content text-white">
                                    <h3 class="sub-title">Big Sale Offer</h3>
                                    <h2 class="title mb-3">Parts & repair</h2>
                                    <p class="short-desc different-width mb-10">Exclusive Exchange Offer & 30% Off In This Week</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="{{Storage::url('assets/images/slider/bg/slider3.jpg')}}">
                            <div class="container">
                                <div class="slide-content text-white">
                                    <h3 class="sub-title">Big Sale Offer</h3>
                                    <h2 class="title mb-3">Parts & repair</h2>
                                    <p class="short-desc different-width mb-10">Exclusive Exchange Offer & 30% Off In This Week</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination with-bg d-md-none"></div>

                <!-- Custom Arrows -->
                <div class="custom-arrow-wrap d-none d-md-block">
                    <div class="custom-button-prev"></div>
                    <div class="custom-button-next"></div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here -->

        <div class="background-img">
            <div class="banner-area section-space-top-100">
                <div class="container">
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-item img-hover-effect">
                                    <div class="banner-img img-zoom-effect">
                                        <img class="img-full" src="{{Storage::url('assets/images/category/').$category->photo}}" alt="Banner Image">
                                        <div class="product-content text-white">
                                            <h3 class="offer">
                                                @if(session('locale')=='uz')
                                                    {{$category->name_uz}}
                                                @elseif(session('locale')=='ru')
                                                    {{$category->name_ru}}
                                                @elseif(session('locale')=='en')
                                                    {{$category->name_eng}}
                                                @endif
                                            </h3>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="{{route('kategoriya',['id'=>$category->id])}}">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Product Area -->
<!--        <div class="background-img" data-bg-image="assets/images/background-img/1-1-1920x1107.jpg">-->
        <div class="background-img  ">
            <div class="product-area section-space-y-axis-100">
                <div class="container">
                    <div class="section-title pb-55">
                        <h2 class="title mb-0">{{ __('words.Special deals') }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-item-wrap row">
                                <div class="col-lg-8 col-md-6">
                                    <div class="product-item img-hover-effect">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/special-deals/special_deals_1.jpg')}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="#">Auto Clutch & Brake</a>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7 pt-md-0">
                                    <div class="product-item img-hover-effect">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/special-deals/special_deals_2.jpg')}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="#">Fuel Injector</a>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7">
                                    <div class="product-item img-hover-effect">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/special-deals/special_deals_3.jpg')}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="#">A/C Compressor</a>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7">
                                    <div class="product-item img-hover-effect">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/special-deals/special_deals_4.jpg')}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="#">Shock Absorbers</a>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7">
                                    <div class="product-item img-hover-effect">
                                        <div class="product-img img-zoom-effect">
                                            <a href="#">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/special-deals/special_deals_5.jpg')}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="#">Catalytic Converter</a>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pt-7 pt-lg-0">
                            <div class="product-banner img-hover-effect">
                                <div class="product-banner-img fixed-height img-zoom-effect">
                                    <a href="#">
                                        <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/special-deals/special_deals_6.jpg')}}" alt="Product Banner">
                                    </a>
                                    <div class="product-content product-name">
                                        <h3 class="category">Mage Sale</h3>
<!--                                        <h2 class="offer">30% Off</h2>-->
<!--                                        <p class="short-desc mb-7">To satisfy our customer we try to give support online</p>-->
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-primary" href="#">{{ __('words.Read more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-55">
                            <div class="button-wrap">
                                <a class="btn btn-link text-danger with-underline p-0" href="#">{{ __('words.See more products') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin About us -->
        <div class="newsletter-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="newsletter-img">
                            <img src="{{Storage::url('assets/images/newsletter/contact.jpg')}}" alt="Newsletter Image" height="600">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-md-center pb-10 pb-md-0">
                        <div class="newsletter-content">
                            <h2 class="newsletter-title mb-4">{{ __('words.About us') }}</h2>
                            <h4>
                                {{ __('words.About us t1') }}
                            </h4>
                            <h4>
                                {{ __('words.About us t2') }}
                            </h4>
                            <!-- Mailchimp Alerts -->
                            <div class="mailchimp-alerts text-centre pt-5">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-12">
                        <h1 class="title">{{ __('words.Export map') }}</h1>
                        <img src="{{Storage::url('assets/images/banner/map.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About us End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area section-border-y-axis section-space-y-axis-100 white-smoke-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper">
                                @foreach($brands as $brand)
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="{{Storage::url('assets/images/brand/'.$brand->photo)}}" alt="{{$brand->name}}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->
    
@endsection()
