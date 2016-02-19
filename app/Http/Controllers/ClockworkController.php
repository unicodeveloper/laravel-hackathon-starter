<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use MJErwin\Clockwork\ClockworkClient;
use MJErwin\Clockwork\Message;

class ClockworkController extends Controller
{

    protected $apiKey;
    protected $client;

    public function __construct()
    {
        $this->apiKey = env('CLOCKWORK_API_KEY');
        $this->client = new ClockworkClient($this->apiKey);
        $this->message = new Message();
        $this->message->setNumber('07700900123');
        $this->message->setContent('Check out this message!');

    }
    /**
     * Return all data to the Clockwork API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.clockwork');
    }

    /**
     * Send a Text Message
     * @param  Request $request
     * @return string
     */
    public function sendTextMessage(Request $request)
    {
        $this->validate($request, [
            'telephone'  => 'required'
        ]);

        $number = $request->input('number');
        $message = 'Testing Clockwork SMS #LaravelHackathonStarter';

        $response = $this->client->sendMessage($this->message);

        return redirect()->back()->with('info','Your Message has been sent successfully');
    }
}
