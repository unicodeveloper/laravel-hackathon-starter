<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use MJErwin\Clockwork\ClockworkClient;
use MJErwin\Clockwork\Message;

class ClockworkController extends Controller
{
    /**
     * @var mixed
     */
    protected $apiKey;

    /**
     * @var ClockworkClient
     */
    protected $client;

    const MSG_NUMBER = '07700900123';

    /**
     * Initialize ClockworkController
     */
    public function __construct()
    {
        $this->apiKey = env('CLOCKWORK_API_KEY');
        $this->client = new ClockworkClient($this->apiKey);
        $this->message = new Message();
        $this->message->setNumber(self::MSG_NUMBER);
        $this->message->setContent(trans('texts.message.sample_body'));
    }

    /**
     * Return all data to the Clockwork API dashboard
     */
    public function getPage()
    {
        return view('api.clockwork');
    }

    /**
     * Send a Text Message
     *
     * @param  Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendTextMessage(Request $request)
    {
        $this->validate($request, [
            'telephone'  => 'required'
        ]);

        $response = $this->client->sendMessage($this->message);

        if ($response->getMessageId()) {
            return redirect()->back()->with('info', trans('texts.message.sent_success'));
        }

        return redirect()->back()->with('errors', trans('texts.message.sent_failed'));
    }
}
