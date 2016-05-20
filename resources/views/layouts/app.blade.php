@extends('layouts.basic-template')

@section('container')
    @include('includes.header')
    
    @yield('content')

    @section('footer')
        @include('includes.footer')
    @show
@endsection
