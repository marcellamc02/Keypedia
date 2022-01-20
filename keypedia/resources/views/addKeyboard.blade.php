@extends('master')

@section('title') Add Keyboard | Keypedia @endsection

@section('content')

<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container ">
        <p class="fw-bold fs-4">Add Keyboard</p>
        <hr>
        <form action="/addKeyboard" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="inputCategory" class="col-sm-4 col-form-label text-end fw-bold">Category</label>
                <div class="col-sm-7 text-start">
                    <select class="mb-2 form-select" name="category_id" id="category_id">
                        <option value="">Choose a Category!</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <label for="keyboardName" class="col-sm-4 col-form-label text-end fw-bold">Keyboard Name</label>
                <div class="col-sm-7 text-start">
                    <input class="mb-2 form-control" type="text" name="name" id="" placeholder="">
                </div>

                <label for="keyboardPrice" class="col-sm-4 col-form-label text-end fw-bold">Keyboard Price</label>
                <div class="col-sm-7 text-start">
                    <input class="mb-2 form-control" type="number" name="price" id="price" placeholder="">
                </div>

                <label for="keyboardDescription" class="col-sm-4 col-form-label text-end fw-bold">Description</label>
                <div class="col-sm-7 text-start">
                    <textarea class="mb-5 form-control" rows="5" type="text" name="description" id="description"></textarea>
                </div>

                <label for="keyboardImage" class="col-sm-4 col-form-label text-end fw-bold">Keyboard Image</label>
                <div class="col-sm-7 text-start">
                    <input class="mb-5 form-control" type="file" name="image" id="image">
                </div>

                <label for="button" class="col-sm-4 col-form-label text-end fw-bold"></label>
                <div class="col-sm-7 text-start">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection