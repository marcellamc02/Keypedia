@extends('master')

@section('title') My Cart | Keypedia @endsection

@section('content')
<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container mt-10">
        <p class="fw-bold fs-4">My Cart</p>
        <hr>
        @if (count($carts) > 0)
            @for($i=0 ; $i < $carts->count(); $i++)
            <div class="row g-2" >
                <div class="col-sm-7">
                    <img src="{{asset($keyboard[$i]->imgPath)}}" alt="image" class="rounded w-100">
                </div>
                <div class="col-sm">
                    <p class="fw-bold">{{$keyboard[$i]->name}}</p>
                    <p>Rp. {{$keyboard[$i]->price}}</p>
                    <p>{{$keyboard[$i]->quantity}}</p>
                    <form action="/Cart/update/{{$keyboard[$i]->id}}" method="post">
                    @csrf
                    @method('put')
                        <div class="row g-2">
                            <div class="col-sm">
                                <p class="fw-bold">Quantity</p>
                            </div>
                            <div class="col-sm">
                                <input type="number" id="quantity" name="quantity" min="1" max="5" class="me-4" placeholder="{{$keyboard[$i]->quantity}}">
                                    <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                    <p class="fw-bold">Total: Rp. {{$totalPrice}}</p>
                </div>
            </div>
            @endfor
            <div class="col-sm py-5">
                <button type="submit" class="btn btn-primary center-block">
                    <a href="{{route('checkout')}}" class="text-light">Checkout</a>
                </button>
            </div>
            @else
                <p>Your cart is empty</p>
            @endif
    </div>
</div>

@endsection
