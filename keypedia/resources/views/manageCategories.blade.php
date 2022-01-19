@extends('master')

@section('title') Manage Categories | Keypedia @endsection

@section('content')
    <div class="text-center mt-3">
        <h3 class="fw-bold my-5">Manage Categories</h3>
    </div>
    <div class="container Categories-container">
        <div class="category-list-container mt-4">
            <ul class="category-list ps-0 d-flex justify-content-evenly ">
                {{-- pake for --}}
                @foreach($categories as $category)
                <a href="/category/{{$category->id}}">
                    <li class="card mt-3 text-decoration-none" style="width: 350px ">
                        <div class="card-body text-center" >
                            <img src="{{asset($category->imgPath)}}" alt="image">
                            <p class="fw-bold text-dark">{{$category->name}}</p>
                        
                            <div class="row g-3">
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <a href="/delete-category" class="text-light">Delete Categories</a>
                                    </button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <a href="/updateCategory/{{$category->id}}" class="text-light">Update Categories</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
