@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i style="color: #1B4A7D" class="fa fa-money"></i> VoguePay API</h2>
        </div>

        <div class="btn-group btn-group-justified">
           
            <a href="https://voguepay.com/developers" target="_blank" class="btn btn-primary">
                <i class="fa fa-code"></i> API Reference
            </a>
          
        </div>

        <h3>Sample Payment</h3>

        <div>
            <p>Redirects to voguepay. Use any email and password</p>
            <form method='POST' action='https://voguepay.com/pay/'>

                <input type='hidden' name='v_merchant_id' value='demo' />
                <input type='hidden' name='merchant_ref' value='234-567-890' />
                <input type='hidden' name='memo' value='Membership subscription for music club' />

                <input type='hidden' name='recurrent' value='true' />
                <input type='hidden' name='interval' value='30' />

                <input type='hidden' name='developer_code' value='pq7778ehh9YbZ' />
                <input type='hidden' name='store_id' value='25' />

                <input type='hidden' name='total' value='13000' />

                <button class="btn btn-primary">Authorize payment</button>

                </form> 
           
               
            </a>
        </div>
    </div>
@stop