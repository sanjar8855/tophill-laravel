<?php
use Illuminate\Support\Facades\Storage;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TopHill</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="TopHill">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{Storage::url('assets/images/favicon.ico')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{Storage::url('assets/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{Storage::url('assets/css/vendor/Pe-icon-7-stroke.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{Storage::url('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{Storage::url('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{Storage::url('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{Storage::url('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{Storage::url('assets/css/plugins/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{Storage::url('assets/css/plugins/ion.rangeSlider.min.css')}}" />

    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{Storage::url('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <style>
        #europa:hover div{
            background-color:orange; width:30px;height:50px;
        }
    </style>
</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header-area">
            <div class="header-middle header-sticky py-6 py-lg-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">
                                <a href="{{route('index')}}" class="header-logo">
                                    <img src="{{Storage::url('assets/images/logo/logo.png')}}" alt="Header Logo">
                                </a>
                                <div class="main-menu d-none d-lg-block">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="{{route('index')}}">{{ __('words.Home page') }}</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="#">{{ __('words.About us') }}
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="{{route('about')}}">{{ __('words.About us') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('vakant')}}">{{ __('words.Vacancies') }}</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{route('kategoriyalar')}}">{{ __('words.Categories') }}
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
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
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{route('blog')}}">{{ __('words.Blog') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">{{ __('words.Contact') }}</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="#">
                                                    @if(session('locale')=='uz')
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_525_38870)">
                                                                <path d="M0 9.80646V11.9226C0 12.8 0.696774 13.4194 1.54839 13.4194H14.4516C15.3032 13.4194 16 12.8 16 11.9226V9.80646H0Z" fill="#1EB53A"></path>
                                                                <path d="M14.4516 2.58063H1.54839C0.696774 2.58063 0 3.19998 0 4.0774V6.19353H16V4.0774C16 3.19998 15.3032 2.58063 14.4516 2.58063Z" fill="#0099B5"></path>
                                                                <path d="M16 6.19352H0V9.80642H16V6.19352Z" fill="white"></path>
                                                                <path d="M16 5.93549H0V6.19355H16V5.93549Z" fill="#CE1126"></path>
                                                                <path d="M5.80619 6.19355H15.9997V5.93549H5.4707L5.80619 6.19355Z" fill="#A8071E"></path>
                                                                <path d="M16 9.80646H0V10.0645H16V9.80646Z" fill="#CE1126"></path>
                                                                <path d="M10.168 9.80646L10.4776 10.0645H16.0002V9.80646H10.168Z" fill="#A8071E"></path>
                                                                <path d="M2.42594 3.30321C2.37432 3.30321 2.32271 3.2774 2.2711 3.2774C1.72916 3.2774 1.26465 3.71611 1.26465 4.28386C1.26465 4.8516 1.70336 5.29031 2.2711 5.29031C2.32271 5.29031 2.37432 5.29031 2.42594 5.2645C1.96142 5.18708 1.60013 4.77418 1.60013 4.28386C1.60013 3.76773 1.96142 3.38063 2.42594 3.30321Z" fill="white"></path>
                                                                <path d="M2.91585 5.00644L2.86424 4.8774L2.81263 5.00644H2.68359L2.78682 5.10966L2.76101 5.23869L2.86424 5.16127L2.99327 5.23869L2.94166 5.10966L3.07069 5.00644H2.91585Z" fill="white"></path>
                                                                <path d="M3.71663 5.00644L3.66502 4.8774L3.61341 5.00644H3.48438L3.5876 5.10966L3.56179 5.23869L3.66502 5.16127L3.79405 5.23869L3.74244 5.10966L3.84567 5.00644H3.71663Z" fill="white"></path>
                                                                <path d="M4.51644 5.00644L4.46482 4.8774L4.41321 5.00644H4.28418L4.38741 5.10966L4.33579 5.23869L4.46482 5.16127L4.59386 5.23869L4.54224 5.10966L4.64547 5.00644H4.51644Z" fill="white"></path>
                                                                <path d="M5.31624 5.00644L5.26463 4.8774L5.21302 5.00644H5.08398L5.18721 5.10966L5.1356 5.23869L5.26463 5.16127L5.39366 5.23869L5.34205 5.10966L5.44527 5.00644H5.31624Z" fill="white"></path>
                                                                <path d="M6.11605 5.00644L6.06443 4.8774L6.01282 5.00644H5.88379L5.98702 5.10966L5.9354 5.23869L6.06443 5.16127L6.16766 5.23869L6.14185 5.10966L6.24508 5.00644H6.11605Z" fill="white"></path>
                                                                <path d="M3.66502 4.07738L3.63921 4.20641H3.48438L3.61341 4.30963L3.56179 4.43867L3.66502 4.36125L3.79405 4.43867L3.74244 4.30963L3.87147 4.20641H3.71663L3.66502 4.07738Z" fill="white"></path>
                                                                <path d="M4.46482 4.07738L4.43902 4.20641H4.28418L4.41321 4.30963L4.3616 4.43867L4.46482 4.36125L4.59386 4.43867L4.54224 4.30963L4.67128 4.20641H4.51644L4.46482 4.07738Z" fill="white"></path>
                                                                <path d="M5.26463 4.07738L5.23882 4.20641H5.08398L5.21302 4.30963L5.1614 4.43867L5.26463 4.36125L5.39366 4.43867L5.34205 4.30963L5.47108 4.20641H5.31624L5.26463 4.07738Z" fill="white"></path>
                                                                <path d="M6.11605 4.20641L6.06443 4.07738L6.03863 4.20641H5.88379L5.98702 4.30963L5.96121 4.43867L6.06443 4.36125L6.19347 4.43867L6.14185 4.30963L6.27089 4.20641H6.11605Z" fill="white"></path>
                                                                <path d="M4.38684 3.50966L4.33523 3.6387L4.46426 3.56128L4.56749 3.6387L4.54168 3.50966L4.64491 3.40644H4.51588L4.46426 3.2774L4.41265 3.40644H4.25781L4.38684 3.50966Z" fill="white"></path>
                                                                <path d="M5.18763 3.50966L5.13601 3.6387L5.26505 3.56128L5.36827 3.6387L5.34246 3.50966L5.44569 3.40644H5.31666L5.26505 3.2774L5.21343 3.40644H5.05859L5.18763 3.50966Z" fill="white"></path>
                                                                <path d="M5.98743 3.50966L5.93582 3.6387L6.06485 3.56128L6.16808 3.6387L6.14227 3.50966L6.2455 3.40644H6.09066L6.06485 3.2774L6.01324 3.40644H5.8584L5.98743 3.50966Z" fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_525_38870">
                                                                    <rect width="16" height="16" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    @elseif(session('locale')=='ru')
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_1216_14126)">
                                                                <path d="M0 9.86456V11.9549C0 12.8323 0.696774 13.5291 1.54839 13.5291H14.4516C15.3032 13.5291 16 12.8323 16 11.9549V9.86456H0Z" fill="#EC2227"></path>
                                                                <path d="M14.4516 2.53555H1.54839C0.696774 2.53555 0 3.23233 0 4.10974V6.20006H16V4.10974C16 3.23233 15.3032 2.53555 14.4516 2.53555Z" fill="#F3F3F3"></path>
                                                                <path d="M16 6.14844H0V9.89038H16V6.14844Z" fill="#005EA5"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1216_14126">
                                                                    <rect width="16" height="16" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    @elseif(session('locale')=='en')
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_525_38884)">
                                                                <path d="M18.179 2.55997H1.55477C-0.500225 2.55997 1.55477 2.55997 -2.18164 2.55997V13.5562H18.179V2.55997Z" fill="#273375"></path>
                                                                <path d="M18.1817 7.50272V6.95972H10.5181L16.1266 2.55997H14.1339L9.40105 6.27273V2.55997H6.72324V6.22386L2.05273 2.55997H1.55457C1.11863 2.55997 1.13611 2.55997 0.0049634 2.55997L5.65959 6.95972H-2.16895V7.05437V7.43907V7.50272V8.5627V9.1057V9.10617H5.78137L-0.00234246 13.6006H1.99044L6.72324 9.88782V13.6006H9.40105V9.93668L14.0716 13.6006H16.22L10.3896 9.10617H18.1739V9.1057H18.1816V8.5627H18.1739V7.50272H18.1817Z" fill="white"></path>
                                                                <path d="M8.72907 7.50272V7.49408V6.95972V2.55997H7.28377V6.95972V7.48793V7.50272H-2.16895V8.5627H6.72324H7.28377V8.61156V9.1057V13.6006H8.71603V9.1057V8.61156V8.5627H18.1739V7.50272H8.72907Z" fill="#E51D35"></path>
                                                                <path d="M6.04991 6.95972H6.72324L1.10301 2.55997C0.759052 2.55997 0.759052 2.55997 0.495117 2.55997L6.04991 6.95972Z" fill="#E51D35"></path>
                                                                <path d="M9.35156 9.10573L15.1305 13.6006H15.691L9.96118 9.10573H9.35156Z" fill="#E51D35"></path>
                                                                <path d="M0.425781 13.6006H1.04852L6.66618 9.10573H6.0445L0.425781 13.6006Z" fill="#E51D35"></path>
                                                                <path d="M15.6511 2.55997C15.6511 2.55997 15.0814 2.5605 14.9913 2.55997L9.37109 6.95972H10.0444L15.6511 2.55997Z" fill="#AF0026"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_525_38884">
                                                                    <rect y="2.56" width="16" height="10.84" rx="2" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    @endif
                                                     &nbsp;{{session('locale-word')}}
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="/locale/uz">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_525_38870)">
                                                                    <path d="M0 9.80646V11.9226C0 12.8 0.696774 13.4194 1.54839 13.4194H14.4516C15.3032 13.4194 16 12.8 16 11.9226V9.80646H0Z" fill="#1EB53A"></path>
                                                                    <path d="M14.4516 2.58063H1.54839C0.696774 2.58063 0 3.19998 0 4.0774V6.19353H16V4.0774C16 3.19998 15.3032 2.58063 14.4516 2.58063Z" fill="#0099B5"></path>
                                                                    <path d="M16 6.19352H0V9.80642H16V6.19352Z" fill="white"></path>
                                                                    <path d="M16 5.93549H0V6.19355H16V5.93549Z" fill="#CE1126"></path>
                                                                    <path d="M5.80619 6.19355H15.9997V5.93549H5.4707L5.80619 6.19355Z" fill="#A8071E"></path>
                                                                    <path d="M16 9.80646H0V10.0645H16V9.80646Z" fill="#CE1126"></path>
                                                                    <path d="M10.168 9.80646L10.4776 10.0645H16.0002V9.80646H10.168Z" fill="#A8071E"></path>
                                                                    <path d="M2.42594 3.30321C2.37432 3.30321 2.32271 3.2774 2.2711 3.2774C1.72916 3.2774 1.26465 3.71611 1.26465 4.28386C1.26465 4.8516 1.70336 5.29031 2.2711 5.29031C2.32271 5.29031 2.37432 5.29031 2.42594 5.2645C1.96142 5.18708 1.60013 4.77418 1.60013 4.28386C1.60013 3.76773 1.96142 3.38063 2.42594 3.30321Z" fill="white"></path>
                                                                    <path d="M2.91585 5.00644L2.86424 4.8774L2.81263 5.00644H2.68359L2.78682 5.10966L2.76101 5.23869L2.86424 5.16127L2.99327 5.23869L2.94166 5.10966L3.07069 5.00644H2.91585Z" fill="white"></path>
                                                                    <path d="M3.71663 5.00644L3.66502 4.8774L3.61341 5.00644H3.48438L3.5876 5.10966L3.56179 5.23869L3.66502 5.16127L3.79405 5.23869L3.74244 5.10966L3.84567 5.00644H3.71663Z" fill="white"></path>
                                                                    <path d="M4.51644 5.00644L4.46482 4.8774L4.41321 5.00644H4.28418L4.38741 5.10966L4.33579 5.23869L4.46482 5.16127L4.59386 5.23869L4.54224 5.10966L4.64547 5.00644H4.51644Z" fill="white"></path>
                                                                    <path d="M5.31624 5.00644L5.26463 4.8774L5.21302 5.00644H5.08398L5.18721 5.10966L5.1356 5.23869L5.26463 5.16127L5.39366 5.23869L5.34205 5.10966L5.44527 5.00644H5.31624Z" fill="white"></path>
                                                                    <path d="M6.11605 5.00644L6.06443 4.8774L6.01282 5.00644H5.88379L5.98702 5.10966L5.9354 5.23869L6.06443 5.16127L6.16766 5.23869L6.14185 5.10966L6.24508 5.00644H6.11605Z" fill="white"></path>
                                                                    <path d="M3.66502 4.07738L3.63921 4.20641H3.48438L3.61341 4.30963L3.56179 4.43867L3.66502 4.36125L3.79405 4.43867L3.74244 4.30963L3.87147 4.20641H3.71663L3.66502 4.07738Z" fill="white"></path>
                                                                    <path d="M4.46482 4.07738L4.43902 4.20641H4.28418L4.41321 4.30963L4.3616 4.43867L4.46482 4.36125L4.59386 4.43867L4.54224 4.30963L4.67128 4.20641H4.51644L4.46482 4.07738Z" fill="white"></path>
                                                                    <path d="M5.26463 4.07738L5.23882 4.20641H5.08398L5.21302 4.30963L5.1614 4.43867L5.26463 4.36125L5.39366 4.43867L5.34205 4.30963L5.47108 4.20641H5.31624L5.26463 4.07738Z" fill="white"></path>
                                                                    <path d="M6.11605 4.20641L6.06443 4.07738L6.03863 4.20641H5.88379L5.98702 4.30963L5.96121 4.43867L6.06443 4.36125L6.19347 4.43867L6.14185 4.30963L6.27089 4.20641H6.11605Z" fill="white"></path>
                                                                    <path d="M4.38684 3.50966L4.33523 3.6387L4.46426 3.56128L4.56749 3.6387L4.54168 3.50966L4.64491 3.40644H4.51588L4.46426 3.2774L4.41265 3.40644H4.25781L4.38684 3.50966Z" fill="white"></path>
                                                                    <path d="M5.18763 3.50966L5.13601 3.6387L5.26505 3.56128L5.36827 3.6387L5.34246 3.50966L5.44569 3.40644H5.31666L5.26505 3.2774L5.21343 3.40644H5.05859L5.18763 3.50966Z" fill="white"></path>
                                                                    <path d="M5.98743 3.50966L5.93582 3.6387L6.06485 3.56128L6.16808 3.6387L6.14227 3.50966L6.2455 3.40644H6.09066L6.06485 3.2774L6.01324 3.40644H5.8584L5.98743 3.50966Z" fill="white"></path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_525_38870">
                                                                        <rect width="16" height="16" fill="white"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            {{ __('words.Uzbek') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/locale/ru">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1216_14126)">
                                                                    <path d="M0 9.86456V11.9549C0 12.8323 0.696774 13.5291 1.54839 13.5291H14.4516C15.3032 13.5291 16 12.8323 16 11.9549V9.86456H0Z" fill="#EC2227"></path>
                                                                    <path d="M14.4516 2.53555H1.54839C0.696774 2.53555 0 3.23233 0 4.10974V6.20006H16V4.10974C16 3.23233 15.3032 2.53555 14.4516 2.53555Z" fill="#F3F3F3"></path>
                                                                    <path d="M16 6.14844H0V9.89038H16V6.14844Z" fill="#005EA5"></path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_1216_14126">
                                                                        <rect width="16" height="16" fill="white"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            {{ __('words.Russian') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/locale/en">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_525_38884)">
                                                                    <path d="M18.179 2.55997H1.55477C-0.500225 2.55997 1.55477 2.55997 -2.18164 2.55997V13.5562H18.179V2.55997Z" fill="#273375"></path>
                                                                    <path d="M18.1817 7.50272V6.95972H10.5181L16.1266 2.55997H14.1339L9.40105 6.27273V2.55997H6.72324V6.22386L2.05273 2.55997H1.55457C1.11863 2.55997 1.13611 2.55997 0.0049634 2.55997L5.65959 6.95972H-2.16895V7.05437V7.43907V7.50272V8.5627V9.1057V9.10617H5.78137L-0.00234246 13.6006H1.99044L6.72324 9.88782V13.6006H9.40105V9.93668L14.0716 13.6006H16.22L10.3896 9.10617H18.1739V9.1057H18.1816V8.5627H18.1739V7.50272H18.1817Z" fill="white"></path>
                                                                    <path d="M8.72907 7.50272V7.49408V6.95972V2.55997H7.28377V6.95972V7.48793V7.50272H-2.16895V8.5627H6.72324H7.28377V8.61156V9.1057V13.6006H8.71603V9.1057V8.61156V8.5627H18.1739V7.50272H8.72907Z" fill="#E51D35"></path>
                                                                    <path d="M6.04991 6.95972H6.72324L1.10301 2.55997C0.759052 2.55997 0.759052 2.55997 0.495117 2.55997L6.04991 6.95972Z" fill="#E51D35"></path>
                                                                    <path d="M9.35156 9.10573L15.1305 13.6006H15.691L9.96118 9.10573H9.35156Z" fill="#E51D35"></path>
                                                                    <path d="M0.425781 13.6006H1.04852L6.66618 9.10573H6.0445L0.425781 13.6006Z" fill="#E51D35"></path>
                                                                    <path d="M15.6511 2.55997C15.6511 2.55997 15.0814 2.5605 14.9913 2.55997L9.37109 6.95972H10.0444L15.6511 2.55997Z" fill="#AF0026"></path>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_525_38884">
                                                                        <rect y="2.56" width="16" height="10.84" rx="2" fill="white"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            {{ __('words.English') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mobile-menu_wrap d-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                    <i class="pe-7s-menu"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="{{route('index')}}">
                                            <span class="mm-text">{{ __('words.Home page') }}</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">{{ __('words.About us') }}
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('about')}}">
                                                    <span class="mm-text">{{ __('words.About us') }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('vakant')}}">
                                                    <span class="mm-text">{{ __('words.Vacancies') }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">{{ __('words.Categories') }}
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="{{route('kategoriya',['id'=>$category->id])}}"> <span class="mm-text">
                                                        @if(session('locale')=='uz')
                                                            {{$category->name_uz}}
                                                        @elseif(session('locale')=='ru')
                                                            {{$category->name_ru}}
                                                        @elseif(session('locale')=='en')
                                                            {{$category->name_eng}}
                                                        @endif
                                                    </span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('blog')}}">
                                            <span class="mm-text">{{ __('words.Blog') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">
                                            <span class="mm-text">{{ __('words.Contact') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header Area End Here -->

            @yield('content')

        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top section-space-y-axis-100 text-lavender" data-bg-image="{{Storage::url('assets/images/background-img/1-4-1920x419.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-item">
                                <div class="footer-logo pb-4">
                                    <a href="index.html">
                                        <img src="{{Storage::url('assets/images/logo/logo-white.png')}}" width="150" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc mb-2">{{ __('words.About us t1') }}</p>
                                <div class="social-link pt-2">
                                    <ul>
                                        <li>
                                            <a href="https://t.me/tophilltextile" data-tippy="Telegram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-telegram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/people/Top-Hill-textile/100057418510945/" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/tophilltextile" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">{{ __('words.Menu') }}</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="{{route('about')}}">{{ __('words.About us') }}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="{{route('vakant')}}">{{ __('words.Vacancies') }}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="{{route('blog')}}">{{ __('words.Blog') }}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="{{route('contact')}}">{{ __('words.Contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">{{ __('words.Categories') }}</h3>
                                <ul class="widget-list-item">
                                    @foreach($categories as $category)
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
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
                        <div class="col-lg-3 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">{{ __('words.Phones for calling') }}</h3>
                            </div>
                            <div class="widget-item pb-2">
                                <ul  class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        {{ __('words.Sales manager in Russia') }}: <br> Muzaffarjon - <a href="tel:+79263658221">+79263658221</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        {{ __('words.Sales manager in Uzbekistan') }}: <br> Biloliddin - <a href="tel:+998916767343">+998916767343</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-midnight-express py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text">
                                    © <script>document.write(new Date().getFullYear())</script>
                                    Tophill Textile. Made by <a href="https://mrtm.uz/" rel="noopener" target="_blank">RTM</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{Storage::url('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{Storage::url('assets/js/plugins/wow.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/jquery.nice-select.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/parallax.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/tippy.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
    <script src="{{Storage::url('assets/js/plugins/mailchimp-ajax.js')}}"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script> -->
    <!-- <script src="assets/js/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{Storage::url('assets/js/main.js')}}"></script>
    <!-- <script src="assets/js/main.min.js"></script> -->
</body>

</html>
