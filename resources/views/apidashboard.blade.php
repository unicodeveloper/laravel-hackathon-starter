@extends('layouts.master')

@section('content')
    <div class="main-container">
        <h2>API Examples</h2>

        <hr/>

        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('api.github')}}" style="color: #fff">
                    <div style="background-color: #000" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/2AaBlpf.png" height="40">GitHub
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.twitter')}}" style="color: #fff">
                    <div style="background-color: #00abf0" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/EYA2FO1.png" height="40"> Twitter
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.facebook')}}" style="color: #fff">
                    <div style="background-color: #3b5998" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/jiztYCH.png" height="40"> Facebook
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.foursquare')}}" style="color: #fff">
                    <div style="background-color: #1cafec" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/PixH9li.png" height="40"> Foursquare
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.lastfm')}}" style="color: #fff">
                    <div style="background-color: #d21309" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/KfZY876.png" height="40"> Last.fm
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.linkedin')}}" style="color: #fff">
                    <div style="background-color: #007bb6" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/sYmVWAw.png" height="40"> LinkedIn
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.nyt')}}" style="color: #fff">
                    <div style="background-color: #454442" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/e3sjmYj.png" height="40"> New York Times
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.steam')}}" style="color: #fff">
                    <div style="background-color: #000" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/1xGmKBX.jpg" height="40"> Steam
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.stripe')}}" style="color: #fff">
                    <div style="background-color: #3da8e5" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/w3s2RvW.png" height="40"> Stripe
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.paypal')}}" style="color: #000">
                    <div style="background-color: #f5f5f5" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/JNc0iaX.png" height="40"> PayPal
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.twilio')}}" style="color: #fff">
                    <div style="background-color: #fd0404" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/mEUd6zM.png" height="40"> Twilio
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.tumblr')}}" style="color: #fff">
                    <div style="background-color: #304e6c" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/rZGQShS.png" height="40"> Tumblr
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.scraping')}}" style="color: #fff">
                    <div style="background-color: #ff6500" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/RGCVvyR.png" height="40"> Web Scraping
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.yahoo')}}" style="color: #fff">
                    <div style="background-color: #3d048b" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/Cl6WJAu.png" height="40"> Yahoo
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.clockwork')}}" style="color: #fff">
                    <div style="background-color: #000" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/YcdxZ5F.png" height="40"> Clockwork SMS
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.aviary')}}" style="color: #fff">
                    <div style="background: linear-gradient(to bottom, #1f3d95 0%,#04aade 100%)" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/npBRwMI.png" height="40"> Aviary
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('api.lob')}}" style="color: #fff">
                    <div style="background-color: #176992" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/bmgfsSg.png" height="40"> Lob
                        </div>
                    </div>
                </a>
            </div>
           {{--  <div class="col-sm-4">
                <a href="{{route('api.bitgo')}}" style="color: #fff">
                    <div style="background-color: #142834" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/v753soI.png" height="40"> BitGo
                        </div>
                    </div>
                </a>
            </div> --}}
            <div class="col-sm-4">
                <a href="{{route('api.slack')}}" style="color: #fff">
                    <div style="background-color: #4d394b" class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://i.imgur.com/fbNYOzm.png" height="40"> Slack
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop