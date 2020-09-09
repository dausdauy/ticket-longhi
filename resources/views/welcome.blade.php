@extends('layouts.main')
@section('title', 'Portal Longhi')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection
@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('lg.png') }}" width="50%">
                    </a>
                </div>
                <div class="title m-b-md">
                    
                </div>

                <div class="links">
                    <a href="{{ route('login') }}" target="_blank" class="btn btn-primary btn-lg">Ticket System</a>
                    <a href="{{ url('/knowledges/dashboard') }}" target="_blank" class="btn btn-primary btn-lg">Knowledge Base</a>
                    <a href="#" class="btn btn-primary btn-lg">About Us</a>
                </div>

                <div class="subtitle m-t-hg">
                    Powered by IT Longhi Group &copy 2020
                </div>
            </div>
        </div>

@endsection
