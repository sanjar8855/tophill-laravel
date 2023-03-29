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
                <form action="{{route('products.update', ['product' => $product->id])}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-floating border border-radius-md">
                        <select name="subcategory_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}"
                                <?php if($product->subcategory_id==$subcategory->id){
                                    echo 'selected';
                                } ?>
                                >{{$subcategory->name_uz}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Status</label>
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="name_uz">O'zbekcha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name_uz" name="name_uz" value="{{ $product->name_uz }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="name_ru">Ruscha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name_ru" name="name_ru" value="{{ $product->name_ru }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="name_eng">Inglizcha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name_eng" name="name_eng" value="{{ $product->name_eng }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="model">Modeli</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="model" name="model" value="{{ $product->model }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="text_uz">O'zbekcha text</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="text_uz" name="text_uz" value="{{ $product->text_uz }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="text_ru">Ruscha text</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="text_ru" name="text_ru" value="{{ $product->text_ru }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="text_eng">Inglizcha text</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="text_eng" name="text_eng" value="{{ $product->text_eng }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="sizes">O'lchamlari</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="sizes" name="sizes" value="{{ $product->sizes }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="colors">Ranglari</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="colors" name="colors" value="{{ $product->colors }}">
                    </div>
                    <div class="my-3">
                        <input type="file" class="form-control border" name="photo">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="description">Izoh</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="description" name="description" value="{{ $product->description }}">
                    </div>
                    <div class="form-floating border border-radius-md">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @if($product->status=='Faol')
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
