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
                <form action="{{route('contacts.update', ['contact' => $contact->id])}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="">
                        <label class="form-label" for="name">Aloqachi ismi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="name" name="name" value="{{ $contact->name }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="phone">Telefon</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="phone" name="phone" value="{{ $contact->phone }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="message">Xat</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="message" name="message" value="{{ $contact->message }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="description">Izoh</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="description" name="description" value="{{ $contact->description }}">
                    </div>
                    <div class="form-floating border border-radius-md">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="Kutmoqda" <?php if($contact->status=='Kutmoqda'){echo 'selected';};?>>Kutmoqda</option>
                            <option value="Bajarildi" <?php if($contact->status=='Bajarildi'){echo 'selected';};?>>Bajarildi</option>
                            <option value="Bajarilmadi" <?php if($contact->status=='Bajarilmadi'){echo 'selected';};?>>Bajarilmadi</option>
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
