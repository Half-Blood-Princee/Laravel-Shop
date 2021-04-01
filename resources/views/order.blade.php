@extends('layouts.master')


@section('content')
    <h1 class="text-warning">Підтвердження замовлення</h1>
    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <br>
    <div class="form-floating">
        <input type="Фіо" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Фіо</label>
    </div>
    <br>
    <div class="form-floating">
        <input type="Phone" class="form-control" id="floatingPassword" placeholder="+3800000000">
        <label for="floatingPassword">Phone</label>
    </div>
    <br>
    <button type="button" class="btn btn-success">Send</button>
@endsection
