@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Contact Form</h3>
        </div>

         <form role="form" method="POST" action="{{ route('contact') }}" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" autofocus="" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>

            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="email" id="email" class="form-control">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                <label for="message" class="col-sm-2 control-label">Body</label>
                <div class="col-sm-8">
                    <textarea name="message" id="message" rows="7" class="form-control"></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">{{ $errors->first('message') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Send</button>
                </div>
            </div>
        </form>
    </div>
@stop