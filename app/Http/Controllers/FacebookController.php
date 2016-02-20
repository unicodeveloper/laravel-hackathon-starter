<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Facebook;
use App\User;
use Auth;
use Session;
use Illuminate\Support\Collection;

class FacebookController extends Controller
{
    protected $user;

    /**
     * Return all data to the Facebook API dashboard
     * @return mixed
     */
    public function getPage()
    {
        if( Session::get('provider') !== 'facebook') {
            Auth::logout();

            Session::flush();

            return redirect('/auth/facebook');
        }

        $userDetails = $this->getData();

        return view('api.facebook')->withDetails($userDetails);
    }

    /**
     * [getData description]
     * @return [type] [description]
     */
    private function getData()
    {
       $data = Facebook::get('/me?fields=id,name,cover,email,gender,first_name,last_name,locale,timezone,link,picture', Auth::user()->getAccessToken());

      return json_decode($data->getGraphUser(),true);
    }
}
