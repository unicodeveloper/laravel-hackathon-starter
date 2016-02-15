@extends('layouts.master')

@section('content')
    <div class="main-container">

        @include('layouts.partials.alerts')

        @include('account.profileInfo')

        @include('account.avatar')

        @include('account.changePassword')

        @include('account.deleteAccount')

    </div>
@stop