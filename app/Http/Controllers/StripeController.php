<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class StripeController extends Controller
{
    /**
     * Return all data to the Stripe API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.stripe');
    }
}
