<?php
use Illuminate\Support\Facades\Storage;
?>
@extends('admin.layout')

@section('admin-content')
    <div class="row justify-content-center">
        <div class="col-12 card">
            <h1>Ma'lumot qo'shish</h1>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" class="text-start" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating border border-radius-md">
                        <select name="subcategory_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->name_uz}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Status</label>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">O'zbekcha nomi</label>
                        <input type="text" class="form-control" name="name_uz" value="{{old('name_uz')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Ruscha nomi</label>
                        <input type="text" class="form-control" name="name_ru" value="{{old('name_ru')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Inglizcha nomi</label>
                        <input type="text" class="form-control" name="name_eng" value="{{old('name_eng')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Modeli</label>
                        <input type="text" class="form-control" name="model" value="{{old('model')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">O'zbekcha text</label>
                        <input type="text" class="form-control" name="text_uz" value="{{old('text_uz')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Ruscha text</label>
                        <input type="text" class="form-control" name="text_ru" value="{{old('text_ru')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Inglizcha text</label>
                        <input type="text" class="form-control" name="text_eng" value="{{old('text_eng')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">O'lchamlari</label>
                        <input type="text" class="form-control" name="sizes" value="{{old('sizes')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Ranglari</label>
                        <input type="text" class="form-control" name="colors" value="{{old('colors')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <input type="file" class="form-control border" name="photo" value="{{old('photo')}}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Izoh</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                    <div class="form-floating border border-radius-md">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="Faol">Faol</option>
                            <option value="Nofaol" selected>Nofaol</option>
                        </select>
                        <label for="floatingSelect">Status</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
