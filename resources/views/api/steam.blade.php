@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3><i class="fa fa-steam-square"></i> Steam Web API </h3>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://developer.valvesoftware.com/wiki/Steam_Web_API" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i>API Overview
            </a>
        </div>

        <br>

        <div class="alert alert-info">
            <h4>Steam ID</h4>
            <p>Displaying public information for Steam ID: 76561197982488301.</p>
        </div>

        <h3>Profile Information</h3>

        <div class="row">
            <div class="col-sm-2">
                <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/c0/c0489e413505d60330a831c447e1ab214ce16f01_full.jpg" width="92" height="92">
            </div>
            <div class="col-sm-8">
                <span class="lead">Sahat</span>
                <div>Account since: Tue May 09 2006 03:33:09 GMT+0000 (UTC)</div>
                <div>Last Online: Thu Nov 19 2015 13:57:11 GMT+0000 (UTC)</div>
                <div>Online Status:<strong class="text-danger"> Offline</strong></div>
            </div>
        </div>

        <h3>Borderlands 2 Achievements</h3>

        <ul class="lead list-unstyled">
            <li class="text-success">First One's Free</li>
            <li class="text-success">Dragon Slayer</li>
            <li class="text-success">Not Quite Dead</li>
            <li class="text-success">How Do I Look?</li>
        </ul>

        <h3>Owned Games</h3>

        <a href="http://store.steampowered.com/app/240/">
            <img src="http://media.steampowered.com/steamcommunity/public/images/apps/240/ee97d0dbf3e5d5d59e69dc20b98ed9dc8cad5283.jpg" width="92" class="thumbnail">
        </a>
        <a href="http://store.steampowered.com/app/300/">
            <img src="http://media.steampowered.com/steamcommunity/public/images/apps/300/e3a4313690bd551495a88e1c01951eb26cec7611.jpg" width="92" class="thumbnail">
        </a>
        <a href="http://store.steampowered.com/app/320/">
            <img src="http://media.steampowered.com/steamcommunity/public/images/apps/320/6dd9f66771300f2252d411e50739a1ceae9e5b30.jpg" width="92" class="thumbnail">
        </a>


    </div>
@stop