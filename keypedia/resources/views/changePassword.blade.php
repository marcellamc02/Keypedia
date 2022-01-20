@extends('master')

@section('title') Change Password | Keypedia @endsection

@section('content')

<div class="container main d-flex justify-content-center align-items-center">
    <div class="form-container ">
        <p class="fw-bold fs-4">Change Password</p>
        <hr>
        <form action="/changePassword" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="currentPassword" class="col-sm-4 col-form-label text-end fw-bold">Current Password</label>
                <div class="col-sm-7 text-start">
                    <input class="mb-2 form-control" type="text" name="name" id="current_password" placeholder="">
                </div>

                <label for="newPassword" class="col-sm-4 col-form-label text-end fw-bold">New Password</label>
                <div class="col-sm-7 text-start">
                    <input class="mb-2 form-control" type="text" name="name" id="new_password" placeholder="">
                </div>

                <label for="newConfirmPassword" class="col-sm-4 col-form-label text-end fw-bold">New Confirm Password</label>
                <div class="col-sm-7 text-start">
                    <input class="mb-2 form-control" type="text" name="name" id="new_confirm_password" placeholder="">
                </div>

                <label for="button" class="col-sm-4 col-form-label text-end fw-bold"></label>
                <div class="col-sm-7 text-start">
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection