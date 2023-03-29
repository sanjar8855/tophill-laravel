@extends('layout')


@section('content')
        <!-- Begin Main Content Area  -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
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
                                            <a href="{{Storage::url('assets/images/product/').$product->photo}}" class="single-img gallery-popup">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/').$product->photo}}" alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title mb-3">Fashion</h2>
                                <p class="short-desc mb-3">{{ __('words.Category') }} :
                                    @if(session('locale')=='uz')
                                        {{$category->name_uz}}
                                    @elseif(session('locale')=='ru')
                                        {{$category->name_ru}}
                                    @elseif(session('locale')=='en')
                                        {{$category->name_eng}}
                                    @endif
                                </p>
                                <p class="short-desc mb-3">{{ __('words.Sub category') }} :
                                    @if(session('locale')=='uz')
                                        {{$subcategory->name_uz}}
                                    @elseif(session('locale')=='ru')
                                        {{$subcategory->name_ru}}
                                    @elseif(session('locale')=='en')
                                        {{$subcategory->name_eng}}
                                    @endif
                                </p>
                                <p class="short-desc mb-3">{{ __('words.Product name') }}:
                                    @if(session('locale')=='uz')
                                        {{$product->name_uz}}
                                    @elseif(session('locale')=='ru')
                                        {{$product->name_ru}}
                                    @elseif(session('locale')=='en')
                                        {{$product->name_eng}}
                                    @endif
                                </p>
                                <p class="short-desc mb-3">{{ __('words.Model') }}: {{$product->model}}</p>
                                <p class="short-desc mb-3">{{ __('words.Composition and definition') }}:
                                    @if(session('locale')=='uz')
                                        {{$product->text_uz}}
                                    @elseif(session('locale')=='ru')
                                        {{$product->text_ru}}
                                    @elseif(session('locale')=='en')
                                        {{$product->text_eng}}
                                    @endif
                                </p>
                                <p class="short-desc mb-3">{{ __('words.Sizes') }} : {{$product->sizes}}</p>
                                <p class="short-desc mb-3">{{ __('words.Colors') }} : {{$product->colors}}</p>

                                <form action="{{route('orders.store')}}" method="post">
                                    @csrf
                                    <div class="login-form">
                                        <h4 class="login-title">{{ __('words.Order') }}</h4>
                                        <div class="row">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <input type="hidden" name="status" value="Kutmoqda">
                                            <input type="hidden" name="description" value="{{date('d.m.Y')}}">
                                            <div class="col-lg-12">
                                                <label>{{ __('words.Name') }}*</label>
                                                <input type="text" name="firstname" placeholder="Abdullajon">
                                            </div>
                                            <div class="col-lg-12">
                                                <label>{{ __('words.Phone') }}*</label>
                                                <input type="text" name="phone" placeholder="+998901234567">
                                            </div>
                                            <div class="col-lg-12 pt-5">
                                                <button type="submit" class="btn btn-custom-size lg-size btn-primary">{{ __('words.Order') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here  -->
@endsection()
