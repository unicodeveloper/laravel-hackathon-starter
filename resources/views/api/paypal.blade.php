@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i style="color: #1B4A7D" class="fa fa-paypal"></i> PayPal API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://developer.paypal.com/docs/integration/direct/make-your-first-call/" target="_blank" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> Quickstart
            </a>
            <a href="https://developer.paypal.com/docs/api/" target="_blank" class="btn btn-primary">
                <i class="fa fa-code"></i> API Reference
            </a>
            <a href="https://devtools-paypal.com/hateoas/index.html" target="_blank" class="btn btn-primary">
                <i class="fa fa-gear"></i> API Playground
            </a>
        </div>

        <h3>Sample Payment</h3>

        <div>
            <p>Redirects to PayPal and allows authorizing the sample payment.</p>
            <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&amp;token=EC-2AJ301489F161603E">
                <button class="btn btn-primary">Authorize payment</button>
            </a>
        </div>
    </div>
@stop