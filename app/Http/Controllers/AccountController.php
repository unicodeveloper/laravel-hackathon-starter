<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    //
    public function getAccountPage()
    {
        return view('account.dashboard');
    }
}
