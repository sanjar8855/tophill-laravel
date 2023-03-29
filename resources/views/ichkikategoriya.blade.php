@extends('layout')

@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">{{ __('words.All sub categories') }}</h2>
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                </li>
                                <li>{{ __('words.All sub categories') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-img">
            <div class="banner-area section-space-top-100 section-space-bottom-100">
                <div class="container">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-item img-hover-effect">
                                    <div class="banner-img img-zoom-effect">
                                        <img class="img-full" src="{{Storage::url('assets/images/product/').$product->photo}}" alt="Banner Image">
                                        <div class="product-content text-white">
                                            <h3 class="offer">
                                                @if(session('locale')=='uz')
                                                    {{$product->name_uz}}
                                                @elseif(session('locale')=='ru')
                                                    {{$product->name_ru}}
                                                @elseif(session('locale')=='en')
                                                    {{$product->name_eng}}
                                                @endif
                                            </h3>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="{{route('tovar',['id'=>$product->id])}}">{{ __('words.Read more') }}</a>
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
    </main>
@endsection()
