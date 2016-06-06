<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Http\Requests;
use GuzzleHttp\Client;

class LinkedInController extends Controller
{
    const LINKEDIN_API = 'https://api.linkedin.com/v1';

    /**
     * LinkedIn API base Url
     * @var string
     */
    protected $baseUrl;

    /**
     * Instance of Client
     * @var object
     */
    protected $client;

    /**
     *  Response from requests made to LinkedIn
     * @var mixed
     */
    protected $response;

     /**
     * Initialize the Controller with necessary arguments
     */
    public function __construct()
    {
        $this->baseUrl = self::LINKEDIN_API;
        $this->client = new Client(['base_uri' => $this->baseUrl]);
    }

     /**
     * Set options for making the Client request
     * @return  void
     */
    private function setRequestOptions()
    {
        $authBearer = 'Bearer '. Auth::user()->getAccessToken();
        $this->client = new Client(['base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => $authBearer,
                'Content-Type'  => 'application/json',
                'Accept'        => 'application/json'
        ]]);
    }

    /**
     * Get the response from New York times API
     * @param string $relativeUrl
     */
    private function setGetResponse($relativeUrl)
    {
        $this->response = $this->client->get($this->baseUrl . $relativeUrl, []);
    }

    /**
     * Get the whole response from a get operation
     * @return array
     */
    private function getResponse()
    {
        return json_decode($this->response->getBody(), true);
    }

    /**
     * Get the data response from a get operation
     * @return array
     */
    private function getData()
    {
        return $this->getResponse();
    }

    /**
     * Return all data to the LinkedIn API dashboard
     * @return mixed
     */
    public function getPage()
    {
        if (Session::get('provider') !== 'linkedin') {
            Auth::logout();

            Session::flush();

            return redirect('/auth/linkedin');
        }

        $this->setRequestOptions();

        $relativeUrl = '/people/~:(firstName,lastName,emailAddress,pictureUrl,location,industry,numConnections,numConnectionsCapped,summary,publicProfileUrl)?format=json';

        $this->setGetResponse($relativeUrl);

        $userDetails = $this->getData();

        return view('api.linkedin')->withDetails($userDetails);
    }
}

