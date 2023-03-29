@extends('app')

@section('title','Bu Brands sahifasi')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Bu Brands sahifasi</h1>
                <form action="{{route('brands-create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="text" class="form-control" name="photo" id="photo">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" name="status" id="status">
                    </div>
                    <br>
                    <input type="submit" value="Saqlash" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
