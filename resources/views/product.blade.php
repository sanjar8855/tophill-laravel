@extends('layout')


@section('content')
        <!-- Begin Main Content Area  -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.png')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">{{ __('words.Product details') }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                    </li>
                                    <li>{{ __('words.Product details') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-product-area section-space-top-100 section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-product-img">
                                <div class="swiper-container single-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="{{Storage::url('assets/images/product/medium-size/shop/product1.jpg')}}" class="single-img gallery-popup">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/medium-size/shop/product1.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>
{{--                                        <div class="swiper-slide">--}}
{{--                                            <a href="{{Storage::url('assets/images/product/large-size/2-2-618x578.jpg')}}" class="single-img gallery-popup">--}}
{{--                                                <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-2-618x578.jpg')}}" alt="Product Image">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="swiper-slide">--}}
{{--                                            <a href="{{Storage::url('assets/images/product/large-size/2-3-618x578.jpg')}}" class="single-img gallery-popup">--}}
{{--                                                <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-3-618x578.jpg')}}" alt="Product Image">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="swiper-slide">--}}
{{--                                            <a href="{{Storage::url('assets/images/product/large-size/2-4-618x578.jpg')}}" class="single-img gallery-popup">--}}
{{--                                                <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-4-618x578.jpg')}}" alt="Product Image">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="swiper-slide">--}}
{{--                                            <a href="{{Storage::url('assets/images/product/large-size/2-5-618x578.jpg')}}" class="single-img gallery-popup">--}}
{{--                                                <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-5-618x578.jpg')}}" alt="Product Image">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="swiper-slide">--}}
{{--                                            <a href="{{Storage::url('assets/images/product/large-size/2-6-618x578.jpg')}}" class="single-img gallery-popup">--}}
{{--                                                <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-6-618x578.jpg')}}" alt="Product Image">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title mb-3">Fashion</h2>
{{--                                <div class="price-box pb-3">--}}
{{--                                    <span class="new-price text-danger">$440.00</span>--}}
{{--                                </div>--}}
                                <p class="short-desc mb-3">{{ __('words.Category') }} : {{ __('words.Women') }}</p>
                                <p class="short-desc mb-3">{{ __('words.Sub category') }} : Ayyolar tunikasi</p>
                                <p class="short-desc mb-3">{{ __('words.Model') }}: 001</p>
                                <p class="short-desc mb-3">{{ __('words.Composition and definition') }}:  30/1 cd suprem 145 -150 gr +-5 gr</p>
                                <p class="short-desc mb-3">{{ __('words.Sizes') }} : 50/52/54/56/58/60</p>
                                <ul class="quantity-with-btn pb-5">
                                    <li class="add-to-cart">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="cart.html">{{ __('words.Order') }}</a>
                                    </li>
                                </ul>
{{--                                <div class="product-category pb-3">--}}
{{--                                    <span class="title">Categories :</span>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Office,</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Home</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="product-category product-tags pb-3">--}}
{{--                                    <span class="title">Tags :</span>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Furniture</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

                            </div>
{{--                            <div class="product-thumb-wrap pt-5 pt-lg-0 row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="thumbs-arrow-holder p-0">--}}
{{--                                        <div class="swiper-container single-product-thumbs">--}}
{{--                                            <div class="swiper-wrapper">--}}
{{--                                                <a href="#" class="swiper-slide">--}}
{{--                                                    <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-1-618x578.jpg')}}" alt="Product Thumnail">--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="swiper-slide">--}}
{{--                                                    <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-2-618x578.jpg')}}" alt="Product Thumnail">--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="swiper-slide">--}}
{{--                                                    <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-3-618x578.jpg')}}" alt="Product Thumnail">--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="swiper-slide">--}}
{{--                                                    <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-4-618x578.jpg')}}" alt="Product Thumnail">--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="swiper-slide">--}}
{{--                                                    <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-5-618x578.jpg')}}" alt="Product Thumnail">--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="swiper-slide">--}}
{{--                                                    <img class="img-full" src="{{Storage::url('assets/images/product/large-size/2-6-618x578.jpg')}}" alt="Product Thumnail">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="product-tab-area section-space-y-axis-100">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <ul class="nav product-tab-nav mb-10" role="tablist">--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">--}}
{{--                                        Information--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">--}}
{{--                                        Description--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                            <div class="tab-content product-tab-content">--}}
{{--                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">--}}
{{--                                    <div class="product-information-body">--}}
{{--                                        <h4 class="title">Shipping</h4>--}}
{{--                                        <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to deliver. Our product is good with reasonable price and we believe you will worth it. So please wait for it patiently! Thanks.Any question please kindly to contact us and we promise to work hard to help you to solve the problem</p>--}}
{{--                                        <h4 class="title">About return request</h4>--}}
{{--                                        <p class="short-desc mb-4">If you don't need the item with worry, you can contact us then we will help you to solve the problem, so please close the return request! Thanks</p>--}}
{{--                                        <h4 class="title">Guarantee</h4>--}}
{{--                                        <p class="short-desc mb-0">If it is the quality question, we will resend or refund to you; If you receive damaged or wrong items, please contact us and attach some pictures about product, we will exchange a new correct item to you after the confirmation.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">--}}
{{--                                    <div class="product-description-body">--}}
{{--                                        <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintdjrufoksk occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sitdu aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit ametg consectetur, adipisci velit, sed quia non numquam eius modi tempora incidun.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </main>
        <!-- Main Content Area End Here  -->
@endsection()
