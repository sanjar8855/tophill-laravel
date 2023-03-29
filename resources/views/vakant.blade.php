@extends('layout')


@section('content')
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">{{ __('words.Vacancies') }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                    </li>
                                    <li>{{ __('words.Vacancies') }}</li>
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
                                    <h2 class="about-title mb-5">{{ __('words.Vacancies') }}</h2>
                                    <h4 class="mb-5"> HR - +998901234567</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>T/R</th>
                                                <th>
                                                    @if(session('locale')=='uz')
                                                        Mutaxasisslik nomi
                                                    @elseif(session('locale')=='ru')
                                                        Название специальности
                                                    @elseif(session('locale')=='en')
                                                        Name of specialty
                                                    @endif
                                                </th>
                                                <th>
                                                    @if(session('locale')=='uz')
                                                        Bo'sh ish o'rni soni
                                                    @elseif(session('locale')=='ru')
                                                        Количество вакансий
                                                    @elseif(session('locale')=='en')
                                                        Number of vacancies
                                                    @endif
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vacancies as $vacancy)
                                                <tr>
                                                    <td>{{($loop->index +1)}}</td>
                                                    <td>
                                                        @if(session('locale')=='uz')
                                                            {{$vacancy->name_uz}}
                                                        @elseif(session('locale')=='ru')
                                                            {{$vacancy->name_ru}}
                                                        @elseif(session('locale')=='en')
                                                            {{$vacancy->name_eng}}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(session('locale')=='uz')
                                                            {{$vacancy->text_uz}}
                                                        @elseif(session('locale')=='ru')
                                                            {{$vacancy->text_ru}}
                                                        @elseif(session('locale')=='en')
                                                            {{$vacancy->text_eng}}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h4>Ishchilarga qo'yiladigan umumiy talablar</h4>
                                    <p>

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
