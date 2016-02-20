@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i style="color: #335397" class="fa fa-linkedin-square"></i> LinkedIn API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/Happyr/LinkedIn-API-client" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> LinkedIn PHP Client
            </a>
            <a href="https://github.com/artesaos/laravel-linkedin" target="_blank" class="btn btn-primary">
                <i class="fa fa-facebook"></i> Laravel LinkedIn
            </a>
            <a href="https://developer.linkedin.com/docs" target="_blank" class="btn btn-primary">
                <i class="fa fa-code-fork"></i> API Reference
            </a>
        </div>

        <h3><i class="fa fa-user"></i> My Profile</h3>

        <img src="{{ $details['pictureUrl'] }}" width="90" height="90" class="thumbnail">
        <h4>{{ $details['firstName'] . ' ' . $details['lastName'] }}</h4>
        <h6>First Name: {{ $details['firstName'] }}</h6>
        <h6>Last Name: {{ $details['lastName'] }}</h6>
        <h6>Industry: {{ $details['industry'] }}</h6>
        <h6>Link: <a href="{{ $details['publicProfileUrl'] }}" target="_blank"> {{ $details['publicProfileUrl'] }}</a></h6>
        <h6>Email: {{ $details['emailAddress'] }} </h6>
        <p>{{ $details['summary'] }}</p>

        <br>
    </div>
@stop