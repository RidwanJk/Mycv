@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('images/assets/Me.jpg') }}" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="col-md-6 auto d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="container ">
                        <h1 class="display-4">Ridwan Jauhar Kafabihi</h1>
                        <p class="lead text-primary">Game Developer | Programmer | Web Developer</p>
                        <p class="text-muted">"To code is to learn — that’s my belief."</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ url('/about') }}" class="btn btn-success ">
                            About Me
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection