@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i class="fa fa-tumblr-square"></i> Tumblr API</h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/jaapz/Tumblr" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> PHP Tumblr API
            </a>
            <a href="https://www.tumblr.com/docs/en/api/v2" target="_blank" class="btn btn-primary">
                <i class="fa fa-code-fork"></i> API Reference
            </a>
        </div>

        <h3><i class="fa fa-user"></i> Posts on Taylor Swift Tumblr</h3>

        @if ($posts)
            <ul class="media-list">
                @foreach($posts as $post)
                    <li class="media">
                        <div class="media-body">
                            <strong class="media-heading"><a href="{{ $post->post_url }}">{{ $post->slug }}</strong>
                            <span class="text-muted"> {{ $post->caption }}</span>
                            <span class="text-muted"> {{ $post->date }}</span>
                            <p>{{ $post->summary }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
       @endif
        <br>
    </div>
@stop