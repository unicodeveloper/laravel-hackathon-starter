<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Goutte\Client;
use App\Http\Controllers\Controller;

class WebScrapingController extends Controller
{
    protected $crawler;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Return all data to the Stripe API dashboard
     * @return mixed
     */
    public function getPage()
    {
        $links = $this->getData('https://news.ycombinator.com/');

        return view('api.scraping')->withLinks($links);
    }

    /**
     * Scrape the Links
     * @param $siteToCrawl
     * @return array
     */
    public function getData($siteToCrawl)
    {
        $crawler = $this->client->request('GET', $siteToCrawl);

        $arr = $crawler->filter('.title a[href^="http"], a[href^="https"]')->each(function($element) {
            $links = [];

            array_push($links, $element->text());

            return $links;
        });

        return $arr;
    }
}
