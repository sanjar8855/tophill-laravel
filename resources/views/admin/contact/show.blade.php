@extends('admin.layout')

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Aloqa jadvali: ID - {{$contact->id}}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <a href="{{route('contacts.index')}}" class="btn btn-success ms-5">Orqaga qaytish</a>
                    <div class="table-responsive p-0">
                        <table class="table table-bordered">
                            <tr>
                                <td>O'zbekcha nomi</td>
                                <td>{{$contact->name}}</td>
                            </tr>
                            <tr>
                                <td>Telefon</td>
                                <td>{{$contact->phone}}</td>
                            </tr>
                            <tr>
                                <td>Xat</td>
                                <td>{{$contact->message}}</td>
                            </tr>
                            <tr>
                                <td>Izoh</td>
                                <td>{{$contact->description}}</td>
                            </tr>
                            <tr>
                                <td>Statusi</td>
                                <td>{{$contact->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
