<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LobController extends Controller
{
    /**
     * Return all data to the Lob API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.lob');
    }
}
