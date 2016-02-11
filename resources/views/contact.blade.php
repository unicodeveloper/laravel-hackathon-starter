@extends('layouts.master')

@section('content')
    <div class="main-container">
        <div class="page-header">
            <h3>Contact Form</h3>
        </div>

         <form role="form" method="POST" class="form-horizontal" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" autofocus="" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Body</label>
                <div class="col-sm-8">
                    <textarea type="text" name="message" id="message" rows="7" class="form-control" data-gramm="" data-txt_gramm_id="311ad614-33b5-5979-3f05-052c7e438e9f"></textarea>
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