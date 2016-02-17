@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i class="fa fa-cc-stripe"></i> Stripe API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://stripe.com/docs/tutorials/checkout" class="btn btn-primary">
                <i class="fa fa-home"></i> Stripe Checkout
            </a>
            <a href="https://stripe.com/docs/api" target="_blank" class="btn btn-primary">
                <i class="fa fa-code"></i> API Reference
            </a>
            <a href="https://manage.stripe.com/account/apikeys" target="_blank" class="btn btn-primary">
                <i class="fa fa-gear"></i> Get API Keys
            </a>
            <a href="https://github.com/laravel/cashier" target="_blank" class="btn btn-primary">
                <i class="fa fa-money"></i> Laravel Cashier
            </a>
        </div>

        <br>

        <form action="" method="POST">
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
            data-amount="2000"
            data-name="Laravel Hackathon Starter"
            data-description="2 widgets ($20.00)"
            data-image="/128x128.png"
            data-locale="auto">
          </script>
        </form>

        <h3><i class="fa fa-credit-card"></i> Test Cards</h3>
        <p>In test mode, you can use these test cards to simulate a successful transaction:</p>

        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Card type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4242 4242 4242 4242</td>
                    <td>Visa</td>
                </tr>
                <tr>
                    <td>4012 8888 8888 1881</td>
                    <td>Visa</td>
                </tr>
                <tr>
                    <td>5555 5555 5555 4444</td>
                    <td>MasterCard</td>
                </tr>
                <tr>
                    <td>5105 1051 0510 5100</td>
                    <td>MasterCard</td>
                </tr>
                <tr>
                    <td>3782 822463 10005</td>
                    <td>American Express</td>
                </tr>
                <tr>
                    <td>3714 496353 98431</td>
                    <td>American Express</td>
                </tr>
                <tr>
                    <td>6011 1111 1111 1117</td>
                    <td>Discover</td>
                </tr>
                <tr>
                    <td>6011 0009 9013 9424</td>
                    <td>Discover</td>
                </tr>
                <tr>
                    <td>3056 9309 0259 04</td>
                    <td>Diners Club</td>
                </tr>
                <tr>
                    <td>3852 0000 0232 37</td>
                    <td>Diners Club</td>
                </tr>
                <tr>
                    <td>3530 1113 3330 0000</td>
                    <td>JCB</td>
                </tr>
                <tr>
                    <td>3566 0020 2036 0505</td>
                    <td>JCB</td>
                </tr>
            </tbody>
        </table>

        <div class="panel panel-primary">
            <div class="panel-heading">Stripe Successful Charge Example</div>
            <div class="panel-body">
            <p>This is the response you will get when customer's card has been charged successfully.
                You could use some of the data below for logging purposes.</p>
                <pre>{ id: 'ch_103qzW2eZvKYlo2CiYcKs6Sw',
                  object: 'charge',
                  created: 1397510564,
                  livemode: false,
                  paid: true,
                  amount: 395,
                  currency: 'usd',
                  refunded: false,
                  card:
                    { id: 'card_103qzW2eZvKYlo2CJ2Ss4kwS',
                      object: 'card',
                      last4: '4242',
                      type: 'Visa',
                      exp_month: 11,
                      exp_year: 2015,
                      fingerprint: 'Xt5EWLLDS7FJjR1c',
                      customer: null,
                      country: 'US',
                      name: 'sahat@me.com',
                      address_line1: null,
                      address_line2: null,
                      address_city: null,
                      address_state: null,
                      address_zip: null,
                      address_country: null,
                      cvc_check: 'pass',
                      address_line1_check: null,
                      address_zip_check: null },
                  captured: true,
                  refunds: [],
                  balance_transaction: 'txn_103qzW2eZvKYlo2CNEcJV8SN',
                  failure_message: null,
                  failure_code: null,
                  amount_refunded: 0,
                  customer: null,
                  invoice: null,
                  description: 'sahat@me.com',
                  dispute: null,
                  metadata: {},
                  statement_description: null }
                  </pre>
            </div>
        </div>
    </div>
@stop