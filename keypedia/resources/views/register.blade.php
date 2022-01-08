@extends('guest-master')

@section('title') Register | Keypedia @endsection

@section('content')

<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container">
        <p class="fw-bold fs-4">Register</p>
        <hr>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email-text" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="email-text" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password-text" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="password-text" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="address-text">Address</label>
              <div class="text-field"><textarea name="message" id="messagetf"></textarea></div>
            </div>
            <div class="mb-3">
                <label for="gender" class="me-4">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Male" value="Male">
                    <label class="form-check-label" for="Male">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Female" value="Female">
                    <label class="form-check-label" for="Female">Female</label>
                  </div>
            </div>
            <div class="mb-3">
                <label for="birthday">Date of Birth</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>

    </div>
</div>

@endsection

