@extends('layout')


@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">{{ __('words.Order') }}</h2>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                            </li>
                            <li>{{ __('words.Order') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area section-space-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-wrap">
                        <div class="contact-img">
                            <img src="{{Storage::url('assets/images/contact/1-1-520x278.png')}}" alt="Contact Images">
                        </div>
                        <form id="contact-form" class="contact-form" action="https://htmlmail.hasthemes.com/mamunur/tromic.php">
                            <h4 class="contact-form-title mb-7">{{ __('words.Send Us a Message') }}</h4>
                            <input type="hidden" value="{{$id}}">
                            <div class="group-input">
                                <div class="form-field me-xl-6">
                                    <input type="text" name="con_name" id="con_name" placeholder="{{ __('words.Name') }}*" class="input-field">
                                </div>
                                <div class="form-field mt-6 mt-xl-0">
                                    <input type="text" name="con_email" id="con_email" placeholder="{{ __('words.Phone') }}*" class="input-field">
                                </div>
                            </div>
                            <div class="button-wrap mt-8">
                                <button type="submit" value="submit" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" name="submit">{{ __('words.Send message') }}</button>
                                <p class="form-messege mt-5 mb-0"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->

@endsection()
