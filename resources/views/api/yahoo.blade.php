@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i style="color: #7b0099" class="fa fa-yahoo"></i>Yahoo API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://developer.yahoo.com/yql/" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> YQL Getting Started
            </a>
            <a href="https://developer.yahoo.com/everything.html" target="_blank" class="btn btn-primary">
                <i class="fa fa-code"></i> Yahoo APIs
            </a>
        </div>

        <br>

        <p class="lead">Weather for ZIP Code:<strong> 10007</strong></p>

        <div class="alert alert-info">
            <p>It is currently<strong> {{ $data['item']['condition']['temp'] }}</strong> degrees in<strong> New York, NY</strong>.</p>
        </div>

        <h3>YQL Query</h3>

        <pre>SELECT * FROM weather.forecast WHERE (location = 10007)</pre>

    </div>
@stop