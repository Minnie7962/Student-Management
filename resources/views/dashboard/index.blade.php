@extends('dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Total students: 100</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Teachers</h5>
                    <p class="card-text">Total teachers: 20</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fees</h5>
                    <p class="card-text">Total fees: $1000</p>
                </div>
            </div>
        </div>
    </div>
@endsection