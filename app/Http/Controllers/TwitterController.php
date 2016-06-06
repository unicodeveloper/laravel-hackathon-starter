<?php

namespace App\Http\Controllers;

use Auth;
use Twitter;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    /**
     * Item to be searched for, combing through twitter's massive data
     * @var string
     */
    protected $searchItem;

    /**
     * Initialize the Controller with necessary arguments
     */
    public function __construct()
    {
        $this->searchItem = 'laravel';
    }

    /**
     * Return all tweets to the Twitter API dashboard
     * @return mixed
     */
    public function getPage()
    {
        if( Session::get('provider') !== 'twitter') {
            Auth::logout();

            Session::flush();

            return redirect('/auth/twitter');
        }

        $searchedTweets = json_decode($this->searchForTweets($this->searchItem), true);

        return view('api.twitter')->withTweets($searchedTweets['statuses']);
    }

    /**
     * Get the latest tweets on a user timeline
     * @return Collection
     */
    private function getLatestTweets()
    {
        return Twitter::getHomeTimeline(['count' => 2, 'format' => 'json']);
    }

    /**
     * Search for tweets based on a search query
     * @param  string $item
     * @return Collection
     */
    private function searchForTweets($item)
    {
        return Twitter::getSearch(['q' => $item, 'count' => 4, 'format' => 'json']);
    }

    /**
     * Post a tweet to the timeline
     * @param  Request $request
     * @return string
     */
    public function sendTweet(Request $request)
    {
        $this->validate($request, [
            'tweet' => 'required',
        ]);

        $tweet = $request->input('tweet') . ' #LaravelHackathonStarter';

        Twitter::reconfig(['token' => Auth::user()->getAccessToken(), 'secret' => Auth::user()->getAccessTokenSecret()]);

        Twitter::postTweet(['status' => $tweet, 'format' => 'json']);

        return redirect()->back()->with('info', trans('texts.twitter.success'));
    }
}
