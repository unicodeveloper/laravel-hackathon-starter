<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Buzz\Browser;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use MetalMatze\LastFm\LastFm;

class LastFmController extends Controller
{
    /**
     * LastFm Object
     * @var object;
     */
    protected $lastfm;

    /**
     * Initialize the Controller with necessary arguments
     */
    public function __construct()
    {
         $this->lastfm = new LastFm(new Browser);
         $this->lastfm->setApiKey(env('LASTFM_API_KEY'));
    }

    /**
     * Return all tweets to the Twitter API dashboard
     * @return mixed
     */
    public function getPage()
    {
        $details = $this->getArtistInfo();

        $albums = array_slice($this->getTopAlbums(), 0, 4);

        $tracks = array_slice($this->getTopTracks(), 0, 10);

        return view('api.lastfm')->withDetails($details)
                                 ->withAlbums($albums)
                                 ->withTracks($tracks);
    }

    /**
     * Get Artist Info
     * @return array
     */
    private function getArtistInfo()
    {
        $result = json_decode($this->lastfm->artist_getInfo(['artist' => 'The Pierces']), true);

        return $result['artist'];
    }

    /**
     * Get Top Albums
     * @return array
     */
    private function getTopAlbums()
    {
        $result = json_decode($this->lastfm->artist_getTopAlbums(['artist' => 'The Pierces']), true);

        return $result['topalbums']['album'];
    }

    /**
     * Get Top Tracks
     * @return array
     */
    private function getTopTracks()
    {
        $result = json_decode($this->lastfm->artist_getTopTracks(['artist' => 'The Pierces']), true);

        return $result['toptracks']['track'];
    }
}
