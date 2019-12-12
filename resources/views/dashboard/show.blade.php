@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body text-center">
                    <div class="row justify-content-center">
                        <img src="{{URL::asset('/images/avatar.svg')}}" alt="Profile Picture" height="100" width="100" style="margin: 25px 0 25px 0">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5"><label class="font-weight-bold" for="name">Name:</label></div>
                        <div class="col-md-8"><p>&nbsp&nbsp{{ $user->name }}</p></div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-5"><label class="font-weight-bold" for="email">Email:</label></div>
                        <div class="col-md-8"><p>&nbsp&nbsp{{ $user->email }}</p></div>
                    </div>

                    <div class="row justify-content-center"><a class="btn btn-secondary" href="/home/{{$user->name}}/edit">Edit</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection