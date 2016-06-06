<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Dandelionmood\LastFm\LastFm;

class LastFmController extends Controller
{
    /**
     * @var array
     */
    protected $sampleArtist = ['artist' => 'The Pierces'];

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
        $this->lastfm = new LastFm(env('LASTFM_API_KEY'), env('LASTFM_API_SECRET'));
    }

    /**
     * Return all tweets to the LastFM API dashboard
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
        $result = (array)$this->lastfm->artist_getInfo($this->sampleArtist);

        return $result['artist'];
    }

    /**
     * Get Top Albums
     * @return array
     */
    private function getTopAlbums()
    {
        $result = (array)$this->lastfm->artist_getTopAlbums($this->sampleArtist);

        return $result['topalbums']->album;
    }

    /**
     * Get Top Tracks
     * @return array
     */
    private function getTopTracks()
    {
        $result = (array)$this->lastfm->artist_getTopTracks($this->sampleArtist);

        return $result['toptracks']->track;
    }
}
