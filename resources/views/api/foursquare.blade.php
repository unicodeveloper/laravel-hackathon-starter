@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i style="color: #335397" class="fa fa-foursquare-square"></i> Foursquare API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/hownowstephen/php-foursquare" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> PHP Foursquare API
            </a>
            <a href="https://developer.foursquare.com/docs/" target="_blank" class="btn btn-primary">
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