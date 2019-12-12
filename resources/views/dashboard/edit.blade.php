@extends('layouts.app')

@section('content')
    <form method="post" action="/home/{{ $user->name }}">
        @method('PATCH')
        @include('layouts.form', ['title'=>'Edit Profile', 'action'=>'Save', 'password'=>0])
    </form>
@endsection