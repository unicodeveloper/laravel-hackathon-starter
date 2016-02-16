@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i class="fa fa-twitter"></i> Twitter API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/thujohn/twitter" target="_blank" class="btn btn-success">
            <i class="fa fa-file-text-o"></i> Twitter library Docs</a>
            <a href="https://dev.twitter.com/docs" target="_blank" class="btn btn-success">
            <i class="fa fa-check-square-o"></i> Overview</a>
            <a href="https://dev.twitter.com/docs/api/1.1" target="_blank" class="btn btn-success">
            <i class="fa fa-code-fork"></i> API Endpoints</a>
        </div>

        <br>

        <div class="well">
            <h4>Compose new Tweet</h4>
            <form role="form" method="POST" action="{{ route('tweet.new') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('tweet') ? ' has-error' : '' }}">
                    <input type="text" name="tweet" autofocus="" class="form-control">
                    @if ($errors->has('tweet'))
                        <span class="help-block">{{ $errors->first('tweet') }}</span>
                    @endif
                </div>
                <p class="help-block">This new Tweet will be posted on your Twitter profile.</p>

                <button type="submit" class="btn btn-primary"><i class="fa fa-twitter"></i> Tweet</button>
            </form>
        </div>

        <div class="lead">Latest<strong> {{ count($tweets) }}</strong> Tweets containing the term<strong> laravelphp</strong></div>

       @if ($tweets)
            <ul class="media-list">
                @foreach($tweets as $tweet)
                    <li class="media">
                        <a href="#" class="pull-left">
                            <img src="{{ $tweet['user']['profile_image_url'] }}" style="width: 64px; height: 64px;" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong class="media-heading">{{ $tweet['user']['name'] }}</strong>
                            <span class="text-muted"> {{ '@'.$tweet['user']['screen_name'] }}</span>
                            <p>{{ $tweet['text'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
       @endif
    </div>
@stop