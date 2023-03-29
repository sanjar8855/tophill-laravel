@extends('layout')


@section('content')

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">{{ __('words.Blog details') }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                    </li>
                                    <li>{{ __('words.Blog details') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 order-lg-2 order-1">
                            <div class="blog-detail-item">
                                <div class="blog-img img-hover-effect">
                                    <img class="img-full" src="{{Storage::url('assets/images/blog/').$blog->photo}}" alt="Blog Image">
                                </div>
                                <div class="blog-content pt-5 pt-lg-0">
                                    <div class="meta-with-title mb-8">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    {{$blog->sana}}
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title mb-0">
                                            @if(session('locale')=='uz')
                                                {{$blog->name_uz}}
                                            @elseif(session('locale')=='ru')
                                                {{$blog->name_ru}}
                                            @elseif(session('locale')=='en')
                                                {{$blog->name_eng}}
                                            @endif
                                        </h2>
                                    </div>
                                    <p class="short-desc mb-7">
                                        @if(session('locale')=='uz')
                                            {{$blog->text_uz}}
                                        @elseif(session('locale')=='ru')
                                            {{$blog->text_ru}}
                                        @elseif(session('locale')=='en')
                                            {{$blog->text_eng}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
@endsection()
