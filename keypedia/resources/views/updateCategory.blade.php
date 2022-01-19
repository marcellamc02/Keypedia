@extends('master')

@section('title') {{$categoryName}} | Keypedia @endsection

@section('content')

<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container ">
        <p class="fw-bold fs-4">Update Category</p>
        <hr>
        <form action="/updateCategory" method="POST">
            @csrf
            @foreach($categoryDetails as $category)
            <div class="row mb-3">
                <div class="col-sm-3">
                    <img src="{{asset($category->imgPath)}}" alt="image" class="rounded w-100">
                </div>
                <div class="col-sm-4">
                    <label for="keyboardName" class="col-sm-4 col-form-label text-center fw-bold vstack">Keyboard Name</label>
                    <label for="keyboardImage" class="col-sm-4 col-form-label text-center fw-bold">Keyboard Image</label>
                </div>
                <div class="col-sm-5">
                    <input class="mb-2 form-control vstack" type="text" name="name" id="" placeholder="{{$categoryName}}">
                    <input class="mb-5 form-control" type="file" name="image" id="image">
                    <button type="update" class="btn btn-primary">
                        <a href="/update-category" class="text-light">Update</a>
                    </button>
                </div>
              </div>
            @endforeach
        </form>
    </div>
</div>

@endsection