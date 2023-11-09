@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Dashboard</h4>
            </div>
        </div>
        @php
            $level = App\Models\Level::all()->count();
            $users = App\Models\User::where('id', '!=', 1)->count();

        @endphp
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body py-5">Number of levels</div>
                    <div class="card-footer d-flex">
                        {{$level}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-warning text-dark h-100">
                    <div class="card-body py-5">Number of users</div>
                    <div class="card-footer d-flex">
                        {{$users}}
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
