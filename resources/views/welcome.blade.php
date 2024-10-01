@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ config('app.name', 'Student Management System') }}</div>

                    <div class="card-body">
                        <h2>Welcome to Student Management System</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('admin.login') }}">Login</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.register') }}">Register</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection