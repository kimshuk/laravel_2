@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Sign In</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <lable for="email">Email Address:</lable>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <lable for="password">Password:</lable>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
    </div>
@endsection