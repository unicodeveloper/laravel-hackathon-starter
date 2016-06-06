<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class SteamController extends Controller
{
     /**
     * Return all data to the Steam API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.steam');
    }

}
