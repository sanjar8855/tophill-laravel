@extends('layout')


@section('content')
<!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{Storage::url('assets/images/breadcrumb/bg/page_breadcrumb.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">{{ __('words.Contact') }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">{{ __('words.Home page') }} /</a>
                                    </li>
                                    <li>{{ __('words.Contact') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin Shipping Area -->
            <div class="shipping-area shipping-style-2 section-space-y-axis-100">
                <div class="container">
                    <div class="row shipping-wrap py-5 py-xl-0">
                        <div class="col-lg-4 col-sm-6">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="{{Storage::url('assets/images/shipping/icon/phone.png')}}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">{{ __('words.Phone') }}</h2>
                                    <p class="short-desc mb-0">0123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="{{Storage::url('assets/images/shipping/icon/message.png')}}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Email</h2>
                                    <p class="short-desc mb-0">demo@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="{{Storage::url('assets/images/shipping/icon/home.png')}}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">{{ __('words.Address') }}:</h2>
                                    <p class="short-desc mb-0">Your address goes here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shipping Area End Here -->

            <div class="contact-form-area section-space-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form-wrap">
                                <div class="contact-img">
                                    <img src="{{Storage::url('assets/images/contact/1-1-520x278.png')}}" alt="Contact Images">
                                </div>
                                <form class="contact-form" action="{{route('contacts.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="status" value="Kutmoqda">
                                    <input type="hidden" name="description" value="{{date('d.m.Y')}}">
                                    <h4 class="contact-form-title mb-7">{{ __('words.Send Us a Message') }}</h4>
                                    <div class="group-input">
                                        <div class="form-field me-xl-6">
                                            <input type="text" name="name" placeholder="{{ __('words.Name') }}*" class="input-field">
                                        </div>
                                        <div class="form-field mt-6 mt-xl-0">
                                            <input type="text" name="phone" placeholder="{{ __('words.Phone') }}*" class="input-field">
                                        </div>
                                    </div>
                                    <div class="form-field mt-6">
                                        <textarea name="message" placeholder="{{ __('words.Text') }}*" class="textarea-field"></textarea>
                                    </div>
                                    <div class="button-wrap mt-8">
                                        <button type="submit" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0">{{ __('words.Send message') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-with-map">
                <div class="contact-map">
                    <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

@endsection()
