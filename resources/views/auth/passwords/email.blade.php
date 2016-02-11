@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Reset Password</h3>
        </div>

         <form role="form" method="POST" action="{{ url('/password/email') }}" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-envelope"></i> Send Password Reset Link</button>
                </div>
            </div>
        </form>
    </div>
@stop
