@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i style="color: #db1302" class="fa fa-play-circle-o"></i> Last.fm API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/MetalMatze/lastfm-api-wrapper" target="_blank" class="btn btn-primary">
            <i class="fa fa-check-square-o"></i> Last.fm PHP Docs</a>
            <a href="https://apigee.com/console/github" target="_blank" class="btn btn-primary">
            <i class="fa fa-laptop"></i> Create API Account</a>
            <a href="http://developer.github.com/v3/" target="_blank" class="btn btn-primary">
            <i class="fa fa-code-fork"></i> API Endpoints</a>
        </div>

        <br>

        <h3> {{ $details->name }}</h3>

        <img src="http://img2-ak.lst.fm/i/u/arQ/548cf8296e0e446bc4193a5b5a94bfb7.png" class="thumbnail">

        <h3> Tags </h3>

        @foreach ($details->tags->tag as $tag)
            <span class="label label-primary"><i class="fa fa-tag"></i> {{ $tag->name }}</span>
        @endforeach

        <h3> Biography </h3>
        <p>{{ $details->bio->summary }}</p>

        <h3> Top Albums </h3>
        @foreach ($albums as $album)
            <img src="{{ $album->image[3]->{'#text'} }}" width="150" height="150">
        @endforeach

        <h3> Top Tracks </h3>
        <ol>
            @foreach ($tracks as $track)
                <li><a href="{{ $track->url }}">{{ $track->name }}</a></li>
            @endforeach
        </ol>

        <h3> Similar Artists </h3>
        <ul class="list-unstyled list-inline">
            @foreach ($details->similar->artist as $artist)
                <li><a href="{{ $artist->url }}">{{ $artist->name }}</a></li>
            @endforeach
        </ul>

    </div>
@stop