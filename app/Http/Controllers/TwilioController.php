<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwilioController extends Controller
{
    /**
     * Return all data to the Stripe API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.twilio');
    }

    /**
     * Send a Text Message
     * @param  Request $request
     * @return string
     */
    public function sendTextMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'number'  => 'required'
        ]);

        $number = $request->input('number');
        $message = $request->input('message') . ' #LaravelHackathonStarter';

        Twilio::message($number, $message);

        return redirect()->back()->with('info','Your Message has been sent successfully');
    }
}
