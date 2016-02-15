@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        @include('account.profileInfo')

        @include('account.changePassword')

        @include('account.deleteAccount')

        @include('account.linkedAccount')

    </div>
@stop