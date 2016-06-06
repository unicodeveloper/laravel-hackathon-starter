<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Goutte\Client;

class WebScrapingController extends Controller
{
    protected $crawler;

    const NEWS_URL = 'https://news.ycombinator.com/';

    /**
     * Initialize controller
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
        $links = $this->getData(self::NEWS_URL);

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
