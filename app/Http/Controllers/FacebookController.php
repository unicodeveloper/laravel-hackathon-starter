<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Facebook;
use Auth;
use Session;

class FacebookController extends Controller
{
    protected $user;

    /**
     * Return all data to the Facebook API dashboard
     * @return mixed
     */
    public function getPage()
    {
        if(Session::get('provider') !== 'facebook') {
            Auth::logout();

            Session::flush();

            return redirect('/auth/facebook');
        }

        $userDetails = $this->getData();

        return view('api.facebook')->withDetails($userDetails);
    }


    /**
     * @return mixed
     */
    private function getData()
    {
       $data = Facebook::get('/me?fields=id,name,cover,email,gender,first_name,last_name,locale,timezone,link,picture', Auth::user()->getAccessToken());

      return json_decode($data->getGraphUser(),true);
    }
}
