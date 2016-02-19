@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i style="color: #ff6600" class="fa fa-hacker-news"></i> Web Scraping</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/FriendsOfPHP/Goutte" target="_blank" class="btn btn-primary">
                <i class="fa fa-info"></i> Goutte Web Scraper
            </a>
             <a href="http://symfony.com/doc/current/components/dom_crawler.html?any" target="_blank" class="btn btn-primary">
                <i class="fa fa-book"></i> Documentation
            </a>
        </div>

        <h3>Hacker News Frontpage</h3>

        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <?php $kar = 1; ?>
                @foreach ($links as $link)
                    <tr>
                        <td>{{ $kar }}</td>
                        <td><a href="https://news.ycombinator.com/" target="_blank">{{ $link[0] }}</a></td>
                    </tr>
                <?php $kar++ ?>
                @endforeach
            </tbody>
        </table>



    </div>
@stop