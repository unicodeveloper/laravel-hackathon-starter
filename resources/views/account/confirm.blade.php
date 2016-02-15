@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        <div class="page-header">
            <h3>Account Deletion Confirmation</h3>
        </div>

        <p> Are you sure you want to delete your account </p>


        <form  method="POST" action="{{ route('account.delete.now') }}">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger"><i class="fa fa-check"></i> Yes</button>

            <a href="{{ route('account.dont.delete') }}" class="btn btn-primary">
                <i class="fa fa-close"></i> No
            </a>
        </form>





    </div>
@stop