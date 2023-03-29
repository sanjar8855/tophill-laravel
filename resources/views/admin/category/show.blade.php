@extends('admin.layout')

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Kategoriyalar jadvali: ID - {{$category->id}}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <a href="{{route('categories.index')}}" class="btn btn-success ms-5">Orqaga qaytish</a>
                    <div class="table-responsive p-0">
                        <table class="table table-bordered">
                            <tr>
                                <td>O'zbekcha nomi</td>
                                <td>{{$category->name_uz}}</td>
                            </tr>
                            <tr>
                                <td>Ruscha nomi</td>
                                <td>{{$category->name_ru}}</td>
                            </tr>
                            <tr>
                                <td>Inglizcha nomi</td>
                                <td>{{$category->name_eng}}</td>
                            </tr>
                            <tr>
                                <td>Rasmi</td>
                                <td><img src="{{Storage::url('assets/images/category/').$category->photo}}" class="me-3 shadow border-radius-lg" style="width: 200px;" alt="{{$category->name_uz}}"></td>
                            </tr>
                            <tr>
                                <td>Izoh</td>
                                <td>{{$category->description}}</td>
                            </tr>
                            <tr>
                                <td>Statusi</td>
                                <td>{{$category->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
