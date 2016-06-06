<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PaypalController extends Controller
{
    /**
     * Return all data to the Paypal API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.paypal');
    }
}
