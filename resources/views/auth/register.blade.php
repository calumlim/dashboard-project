@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @include('layouts.form', ['title'=>'Register', 'action'=>'Save', 'password'=>1])
    </form>
@endsection
