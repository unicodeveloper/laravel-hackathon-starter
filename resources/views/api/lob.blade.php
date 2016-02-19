@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i class="fa fa-envelope"></i> Lob API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://lob.com/docs" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> API Documentation
            </a>
            <a href="https://github.com/lob/lob-php" target="_blank" class="btn btn-primary">
                <i class="fa fa-code"></i> Lob PHP Docs
            </a>
            <a href="https://dashboard.lob.com/register" target="_blank" class="btn btn-primary">
                <i class="fa fa-gear"></i> Create API Account
            </a>
        </div>

        <h3>Delivery routes in 10007</h3>

         @if ($routes)
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Route</th>
                        <th># of Residential Addresses</th>
                        <th># of Business Addresses</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($routes as $route)
                    <tr>
                        <td>{{ $route['route'] }}</td>
                        <td>{{ $route['residential'] }}</td>
                        <td>{{ $route['business'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        <br>
    </div>
@stop