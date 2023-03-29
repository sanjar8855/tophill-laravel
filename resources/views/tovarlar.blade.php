@extends('layout')


@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">{{ __('words.All products') }}</h2>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                            </li>
                            <li>{{ __('words.All products') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                    <div class="sidebar-area style-2">
                        <div class="widgets-area mb-9">
                            <h2 class="widgets-title mb-5">{{ __('words.Categories') }}</h2>
                            <div class="widgets-item">
                                <ul class="widgets-category">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{route('kategoriya',['id'=>$category->id])}}">
                                                @if(session('locale')=='uz')
                                                    {{$category->name_uz}}
                                                @elseif(session('locale')=='ru')
                                                    {{$category->name_ru}}
                                                @elseif(session('locale')=='en')
                                                    {{$category->name_eng}}
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                    <div class="product-topbar">
                        <ul>
                            <li class="page-count">
                                <span>20</span> ta mahsulotdan <span>12</span> tasi ko'rinmoqda
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content text-charcoal pt-8">
                        <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                            <div class="product-grid-view row">
                                @foreach($products as $product)
                                    <div class="col-xl-4 col-sm-6">
                                    <div class="product-item img-hover-effect">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{route('tovar',['id'=>$product->id])}}">
                                                <img class="img-full" src="{{Storage::url('assets/images/product/').$product->photo}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="{{route('tovar',['id'=>$product->id])}}">
                                                @if(session('locale')=='uz')
                                                    {{$product->name_uz}}
                                                @elseif(session('locale')=='ru')
                                                    {{$product->name_ru}}
                                                @elseif(session('locale')=='en')
                                                    {{$product->name_eng}}
                                                @endif
                                            </a>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="{{route('tovar',['id'=>$product->id])}}">{{ __('words.Read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
