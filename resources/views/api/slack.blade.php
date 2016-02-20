@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i style="color: #f00" class="fa fa-slack"></i> Slack API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://github.com/vluzrmos/laravel-slack-api" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> Laravel Slack
            </a>
            <a href="https://api.slack.com/" target="_blank" class="btn btn-primary">
                <i class="fa fa-code-fork"></i> REST API
            </a>
        </div>

        <br>

        <h3> Get All Users On Your Team (RED-CREEK)</h3>

        @if ($members)
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Picture</th>
                        <th>Full Name</th>
                        <th>Slack Handle</th>
                    </tr>
                </thead>
                <tbody>

                <?php $kar = 1; ?>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $kar }}</td>
                        <td><img src="{{ $member->profile->image_48 }}" /></td>
                        <td>{{ $member->profile->real_name }}</td>
                        <td>{{ $member->name }}</td>
                    </tr>
                <?php $kar++ ?>
                @endforeach
                </tbody>
            </table>
        @endif

        <h3> Send Message to a Slack Channel Or Group</h3>

        <div class="row">
            <div class="col-sm-6">
                <form role="form" method="POST" action="{{ route('slack.message') }}">
                   {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        <label class="control-label">Message</label>
                        <input type="text" name="message" class="form-control">
                        @if ($errors->has('message'))
                            <span class="help-block">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-location-arrow"></i> Send
                    </button>
                </form>
            </div>
        </div>

    </div>
@stop