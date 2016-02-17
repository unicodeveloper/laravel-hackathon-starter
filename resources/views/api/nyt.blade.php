@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i class="fa fa-building-o"></i> New York Times API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="http://developer.nytimes.com/page" target="_blank" class="btn btn-primary">
            <i class="fa fa-check-square-o"></i> Overview</a>
            <a href="http://prototype.nytimes.com/gst/apitool/index.html" target="_blank" class="btn btn-primary">
            <i class="fa fa-laptop"></i> API Console</a>
            <a href="http://developer.nytimes.com/docs" target="_blank" class="btn btn-primary">
            <i class="fa fa-code-fork"></i> API Endpoints</a>
        </div>

        <h3> Young Adult Best Sellers</h3>

        @if ($data)
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Title</th>
                        <th class="hidden-xs">Description</th>
                        <th>Author</th>
                        <th class="hidden-xs">ISBN-13</th>
                    </tr>
                </thead>
                <tbody>

                <?php $kar = 1; ?>
                @foreach ($data as $info)
                    <tr>
                        <td>{{ $kar }}</td>
                        <td>{{ $info['title'] }}</td>
                        <td>{{ $info['description'] }}</td>
                        <td>{{ $info['author'] }}</td>
                        <td>{{ $info['primary_isbn13'] }}</td>
                    </tr>
                <?php $kar++ ?>
                @endforeach
                </tbody>
            </table>
        @endif

    </div>
@stop