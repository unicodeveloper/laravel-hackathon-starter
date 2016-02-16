<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Twitter;

class TwitterController extends Controller
{
    protected $searchItem;
    protected $githubHandle;

    public function __construct()
    {
        $this->searchItem = 'laravel';
        $this->githubHandle = 'unicodeveloper';
    }

    public function getPage()
    {
        $searchedTweets = json_decode($this->searchForTweets($this->searchItem), true);

        return view('api.twitter')->withTweets($searchedTweets['statuses']);
    }

    private function getLatestTweets()
    {
        return Twitter::getHomeTimeline(['count' => 2, 'format' => 'json']);
    }

    private function searchForTweets($item)
    {
        return Twitter::getSearch(['q' => $item, 'count' => 4, 'format' => 'json']);
    }

    public function sendTweet(Request $request)
    {
        $this->validate($request, [
            'tweet' => 'required',
        ]);

        $tweet = $request->input('tweet') . ' #LaravelHackathonStarter';

        Twitter::postTweet(['status' => $tweet, 'format' => 'json']);

        return redirect()->back()->with('info','Your Tweet has been posted successfully');
    }
}
