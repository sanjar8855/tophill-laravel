@extends('admin.layout')

@section('admin-content')
    <div class="row justify-content-center">
        <div class="col-12 card">
            <h1>Ma'lumot o'zgartirish</h1>
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
                <form action="{{route('vacancies.update', ['vacancy' => $vacancy->id])}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="my-3">
                        <label class="form-label" for="name_uz">O'zbekcha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name_uz" name="name_uz" value="{{ $vacancy->name_uz }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="name_ru">Ruscha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name_ru" name="name_ru" value="{{ $vacancy->name_ru }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="name_eng">Inglizcha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name_eng" name="name_eng" value="{{ $vacancy->name_eng }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="text_uz">O'zbekcha text</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="text_uz" name="text_uz" value="{{ $vacancy->text_uz }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="text_ru">Ruscha text</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="text_ru" name="text_ru" value="{{ $vacancy->text_ru }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="text_eng">Inglizcha text</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="text_eng" name="text_eng" value="{{ $vacancy->text_eng }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="description">Izoh</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="description" name="description" value="{{ $vacancy->description }}">
                    </div>
                    <div class="form-floating border border-radius-md">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @if($vacancy->status=='Faol')
                                <option value="Faol" selected>Faol</option>
                                <option value="Nofaol">Nofaol</option>
                            @else
                                <option value="Faol">Faol</option>
                                <option value="Nofaol" selected>Nofaol</option>
                            @endif
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
