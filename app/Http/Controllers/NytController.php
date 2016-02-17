<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NytController extends Controller
{

    /**
     * Instance of Guzzle Client
     * @var object
     */
    protected $client;

    /**
     * BaseUrl
     * @var string
     */
    protected $baseUrl;

    /**
     * Initialize the Controller with necessary arguments
     */
    public function __construct()
    {
         $this->baseUrl = 'http://api.nytimes.com/svc';
         $this->client = new Client(['base_uri' => $this->baseUrl]);

         $relativeUrl = '/books/v3/lists/overview.json?api-key=' . env('NYT_BOOKS_API_KEY');
         $this->setGetResponse($relativeUrl);
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
        return $this->getResponse()['results']['lists'][0]['books'];
    }

    /**
     * Return all the data to the New York times API dashboard
     * @return array
     */
    public function getPage()
    {
        $data = $this->getData();

        return view('api.nyt')->withData($data);
    }
}
