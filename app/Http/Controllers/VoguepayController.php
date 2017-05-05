<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class VoguepayController extends Controller
{
    /**
     * Return all data to the Vogue API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.voguepay');
    }
}
