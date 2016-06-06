<?php

namespace App\Http\Controllers;

use FoursquareApi;
use App\Http\Requests;

class FoursquareController extends Controller
{
    /**
     * Instance of Foursquare API
     * @var object
     */
    protected $foursquare;

     /**
     * Initialize the Controller with necessary arguments
     */
    public function __construct()
    {
        $this->foursquare = new FoursquareApi(env('FOURSQUARE_CLIENT_ID'), env('FOURSQUARE_CLIENT_SECRET'));
    }

    /**
     * Search For Venues
     * @return array
     */
    private function getVenues()
    {
        // Searching for venues nearby e.g Lagos, Nigeria
        $endpoint = 'venues/search';

        // Prepare parameters
        $params = ['near' => 'Lagos, Nigeria'];

        // Perform a request to a public resource
        $response = json_decode($this->foursquare->GetPublic($endpoint,$params),true);

        return $response['response']['venues'];
    }

    /**
     * Return all data to the Foursquare API dashboard
     * @return mixed
     */
    public function getPage()
    {
        $venues = $this->getVenues();

        return view('api.foursquare')->withVenues($venues);
    }

}
