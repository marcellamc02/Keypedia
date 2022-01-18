@extends('master')

@section('title') Register | Keypedia @endsection

@section('content')

<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container">
        <p class="fw-bold fs-4">Register</p>
        <hr>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username-text" class="form-label">Username</label>
                <input type="text" class="form-control {{$errors->has('username')?'is-invalid':''}}" name="username">
                @error('username')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="email-text" class="form-label ">Email address</label>
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
            <div class="mb-3">
                <label for="password-text" class="form-label">Confirm Password</label>
                <input type="password" class="form-control {{$errors->has('confirmPass')?'is-invalid':''}}" id="exampleInputPassword2" name="confirmPass">
                @error('confirmPass')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
              <label for="address-text">Address</label>
              <div class="text-field {{$errors->has('address')?'is-invalid':''}}"><textarea id="messagetf" name="address"></textarea></div>
              @error('address')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
                <label for="gender" class="me-4">Gender</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="Male" value="Male" name="gender">
                    <label class="form-check-label" for="Male">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="Female" value="Female" name="gender">
                    <label class="form-check-label" for="Female">Female</label>
                  </div>
                  @error('gender')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="birthday">Date of Birth</label>
                <input type="date" class="{{$errors->has('dob')?'is-invalid':''}}" id="birthday" name="dob">
                @error('dob')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>

    </div>
</div>

@endsection

