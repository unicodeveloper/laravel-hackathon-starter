@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i style="color: #335397" class="fa fa-facebook-square"></i> Facebook API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://developers.facebook.com/docs/graph-api/quickstart/" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> Quickstart
            </a>
            <a href="https://developers.facebook.com/tools/explorer" target="_blank" class="btn btn-primary">
                <i class="fa fa-facebook"></i> Graph API Explorer
            </a>
            <a href="https://developers.facebook.com/docs/graph-api/reference/" target="_blank" class="btn btn-primary">
                <i class="fa fa-code-fork"></i> API Reference
            </a>
        </div>

        <h3><i class="fa fa-user"></i> My Profile</h3>

        <img src="{{ $details['picture']['url'] }}" width="90" height="90" class="thumbnail">
        <h4>{{ $details['name'] }} </h4>
        <h6>First Name: {{ $details['first_name'] }}</h6>
        <h6>Last Name: {{ $details['last_name'] }}</h6>
        <h6>Gender: {{ $details['gender'] }}</h6>
        <h6>Link: {{ $details['link'] }}</h6>
        <h6>Email: {{ $details['email'] }} </h6>

        <br>
    </div>
@stop