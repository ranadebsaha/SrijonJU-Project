@extends('frontend.layouts.main')
@section('main-container')

<a class="nav-link active" href="{{url('/view')}}" aria-current="page">Home</a>
    <a class="nav-link" href="{{url('/register')}}">Register</a>

@endsection