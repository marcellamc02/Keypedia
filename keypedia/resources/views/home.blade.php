@extends('master')

@section('title') Home | Keypedia @endsection

@section('content')
    <div class="text-center mt-3">
        <h3 class="fw-bold">Welcome to Keypedia</h3>
        <p>Best Keyboard and Keycaps shop</p>
    </div>
    <div class="container Categories-container ">
        <h4 class="text-center mt-4 fw-bold">Categories</h4>
        <div class="category-list-container mt-4">
            <ul class="category-list ps-0 d-flex justify-content-evenly ">
                {{-- pake for --}}
                @foreach($categories as $category)
                <a href="/category/{{$category->id}}">
                    <li class="card mt-3 text-decoration-none" style="width: 280px ">
                        <div class="card-body text-center" >
                            <p class="fw-bold">{{$category->name}}</p>
                            <img src="{{asset($category->imgPath)}}" alt="">
                        </div>
                    </li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
