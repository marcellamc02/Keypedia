@extends('master')

@section('title') {{$keyboardName}} | Keypedia @endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="form-container ">
        <p class="fw-bold fs-4">Detail Keyboard</p>
        <hr>
            @foreach($keyboardDetails as $keyboardDetail)
                <div class="row g-2" >
                    <div class="col-sm-7">
                        <img src="{{asset($keyboardDetail->imgPath)}}" alt="image" class="rounded w-100">
                    </div>
                    <div class="col-sm">
                        <p class="fw-bold">{{$keyboardDetail->name}}</p>
                        <p>Rp. {{$keyboardDetail->price}}</p>
                        <p>{{$keyboardDetail->description}}</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="5" class="me-4">
                        <button type="button" class="btn btn-primary">Add to cart</button>
                    </div>
            @endforeach
    </div>
</div>

@endsection
