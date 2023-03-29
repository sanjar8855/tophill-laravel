@extends('layout')


@section('content')
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">{{ __('words.Blog') }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                    </li>
                                    <li>{{ __('words.Blog') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row g-8">
                        <div class="col-lg-12 order-lg-2 order-1">
                            <div class="blog-item-wrap row">
                                @foreach($blogs as $blog)
                                    <div class="col-md-6">
                                        <div class="blog-item">
                                            <div class="blog-img img-hover-effect">
                                                <a class="img-zoom-effect" href="{{route('blog-detail',['id'=>$blog->id])}}">
                                                    <img class="img-full" src="{{Storage::url('assets/images/blog/').$blog->photo}}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="blog-content pt-6">
                                                <div class="blog-meta text-paynes-grey pb-1">
                                                    <ul>
                                                        <li class="date">
                                                            <i class="pe-7s-date"></i>
                                                            {{$blog->sana}}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h2 class="mb-3">
                                                    <a class="title" href="{{route('blog-detail',['id'=>$blog->id])}}">
                                                        @if(session('locale')=='uz')
                                                            {{$blog->name_uz}}
                                                        @elseif(session('locale')=='ru')
                                                            {{$blog->name_ru}}
                                                        @elseif(session('locale')=='en')
                                                            {{$blog->name_eng}}
                                                        @endif
                                                    </a>
                                                </h2>
                                                <p class="short-desc mb-7">
                                                    @if(session('locale')=='uz')
                                                        {{$blog->text_uz}}
                                                    @elseif(session('locale')=='ru')
                                                        {{$blog->text_ru}}
                                                    @elseif(session('locale')=='en')
                                                        {{$blog->text_eng}}
                                                    @endif
                                                </p>
                                                <div class="button-wrap">
                                                    <a class="btn btn-custom-size btn-matterhorn" href="{{route('blog-detail',['id'=>$blog->id])}}">{{ __('words.Read more') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12">
                                    <div class="pagination-area pt-10">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                                                </li>
                                            </ul>
                                        </nav>
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
