@extends('master')

@section('title') Home | Keypedia @endsection

@section('content')



    <div class="text-center mt-3">
        <h3>Welcome to Keypedia</h3>
        <p>Best Keyboard and Keycaps shop</p>
    </div>

    <div class="container Categories-container ">
        <h4 class="text-center mt-4">Categories</h4>
        <div class="category-list-container mt-4">
            <ul class="category-list ps-0 d-flex justify-content-evenly ">
                {{-- pake for --}}
                <a href="">
                    <li class="card mt-3 text-decoration-none" style="width: 280px ">
                        <div class="card-body text-center" >
                            <p>category1</p>
                            <img src="{{asset('storage/assets/61KeyBoard-img.jpg')}}" alt="">
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="card mt-3" style="width: 280px ">
                        <div class="card-body text-center" >
                            <p>category2</p>
                            <img src="{{asset('storage/assets/61KeyBoard-img.jpg')}}" alt="">
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="card mt-3" style="width: 280px ">
                        <div class="card-body text-center" >
                            <p>category3</p>
                            <img src="{{asset('storage/assets/61KeyBoard-img.jpg')}}" alt="">
                        </div>
                    </li>
                </a>

                <a href="">
                    <li class="card mt-3" style="width: 280px ">
                        <div class="card-body text-center" >
                            <p>category4</p>
                            <img src="{{asset('storage/assets/61KeyBoard-img.jpg')}}" alt="">
                        </div>
                    </li>
                </a>

            </ul>
        </div>
    </div>

@endsection
