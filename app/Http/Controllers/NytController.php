<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Requests;

class NytController extends Controller
{
    const API_URL = 'http://api.nytimes.com/svc';
    const RELATIVE_URL = '/books/v3/lists/overview.json?api-key={apiKey}';

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
         $this->baseUrl = self::API_URL;
         $this->client = new Client(['base_uri' => $this->baseUrl]);
         $this->setGetResponse($this->getRelativeUrl());
    }

    /**
     * Get relative url
     *
     * @return string
     */
    public function getRelativeUrl()
    {
        return str_replace('{apiKey}', env('NYT_BOOKS_API_KEY'), self::RELATIVE_URL);
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
