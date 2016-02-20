@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i style="color: #335397" class="fa fa-foursquare-square"></i> Foursquare API</h3>
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

        <h3><i class="fa fa-user"></i> List Of Venues Near Lagos, Nigeria (You can specify your location)</h3>

        @if ($venues)
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Geopoints</th>
                    </tr>
                </thead>
                <tbody>

                <?php $kar = 1; ?>
                @foreach ($venues as $venue)
                    <tr>
                        <td>{{ $kar }}</td>
                        <td>{{ $venue['name'] }}</td>
                        <td>{{ $venue['location']['lat'] . ',' . $venue['location']['lng'] }}</td>
                    </tr>
                <?php $kar++ ?>
                @endforeach
                </tbody>
            </table>
        @endif


        <br>
    </div>
@stop