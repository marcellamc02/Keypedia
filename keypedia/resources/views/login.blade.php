@extends('master')

@section('title') Login | Keypedia @endsection

@section('content')

<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container ">
        <p class="fw-bold fs-4">Login</p>
        <hr>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email-text" class="form-label">Email address</label>
              <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              @error('email')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password-text" class="form-label">Password</label>
              <input type="password" class="form-control {{$errors->has('password')?'is-invalid':''}}" id="exampleInputPassword1" name="password">
              @error('password')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3 form-check remember-me">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rm">
              <label class="form-check-label px-2" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            @if (session('fail'))
            <small class="text-danger">{{ session('fail') }}</small>
            @endif
          </form>

    </div>
</div>


@endsection
