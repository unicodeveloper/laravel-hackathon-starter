<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SlackUser;
use SlackChat;
use App\Http\Requests;

class SlackController extends Controller
{
    /**
     * Return all data to the Slack API dashboard
     * @return mixed
     */
    public function getPage()
    {
        $members = $this->getAllUsersOnYourTeam(4);

        return view('api.slack')->withMembers($members);
    }

    /**
     * Get All Users on Your Team
     * @return array
     */
    private function getAllUsersOnYourTeam($count = null)
    {
        $list = (array)SlackUser::lists();

        if (is_null($count)) {
           return $list['members'];
        }

        return array_slice($list['members'], 0, $count);
    }

    /**
     * Send Message to Channel or Group
     * @param  Request $request
     * @return Session
     */
    public function sendMessageToTeam(Request $request)
    {
         $this->validate($request, [
            'message'  => 'required'
        ]);

        $message = $request->input('message') . ' #FromLaravelHackathonStarter :smile:';

        SlackChat::message('#general', $message);

        return redirect()->back()->with('info', trans('texts.message.sent_success'));
    }
}
