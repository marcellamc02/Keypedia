@extends('master')

@section('title') Transaction History | Keypedia @endsection

@section('content')
    <p class="fw-bold fs-4 text-center">Your Transaction History</p>

    @foreach($keyboard as $key)
        <button type="button" class="btn btn-light btn-lg btn-block text-dark">
            <a href="/transactionDetail">Transaction at {{ date('D, d-M-Y') }}</a>
        </button>
    @endforeach
@endsection
