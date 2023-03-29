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
                <form action="{{route('orders.update', ['order' => $order->id])}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-floating border border-radius-md">
                        <select name="product_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @foreach($products as $product)
                                <option value="{{$product->id}}"
                                <?php if($order->product_id==$product->id){
                                    echo 'selected';
                                } ?>
                                >{{$product->name_uz}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Status</label>
                    </div>
                    <div class="">
                        <label class="form-label" for="firstname">Buyurtmachi ismi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="firstname" name="firstname" value="{{ $order->firstname }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="phone">Ruscha nomi</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="phone" name="phone" value="{{ $order->phone }}">
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="description">Izoh</label>
                        <input type="text" class="form-control border border-radius-md ps-2" id="description" name="description" value="{{ $order->description }}">
                    </div>
                    <div class="form-floating border border-radius-md">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="Kutmoqda" <?php if($order->status=='Kutmoqda'){echo 'selected';};?>>Kutmoqda</option>
                            <option value="Qabul qilindi" <?php if($order->status=='Qabul qilindi'){echo 'selected';};?>>Qabul qilindi</option>
                            <option value="Bajarilmoqda" <?php if($order->status=='Bajarilmoqda'){echo 'selected';};?>>Bajarilmoqda</option>
                            <option value="Bajarildi" <?php if($order->status=='Bajarildi'){echo 'selected';};?>>Bajarildi</option>
                            <option value="Qaytarildi" <?php if($order->status=='Qaytarildi'){echo 'selected';};?>>Qaytarildi</option>
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
