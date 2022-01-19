@extends('master')

@section('title') {{$categoryName}} | Keypedia @endsection

@section('content')
<div class="container">
    <div class="text-center mt-3">
        <h3>{{$categoryName}}</h3>
    </div>

    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <input type="hidden" name="search_param" value="all" id="search_param">
                {{-- <input type="text" class="form-control" name="x" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span> --}}
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Name</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Price</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container Categories-container ">
        <div class="category-list-container mt-4">
            <ul class="category-list ps-0 d-flex justify-content-evenly ">
                {{-- pake for --}}
                @foreach($keyboardCategories as $keyboard)
                <a href="/detailsKeyboard/{{$keyboard->id}}">
                    <li class="card mt-3 text-decoration-none" style="width: 350px ">
                        <div class="card-body text-center" >
                            <img src="{{asset($keyboard->imgPath)}}" alt="image">
                            <p class="fw-bold">{{$keyboard->name}}</p>
                            <p class="fw-bold">Rp. {{$keyboard->price}}</p>
                        </div>
                    </li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
