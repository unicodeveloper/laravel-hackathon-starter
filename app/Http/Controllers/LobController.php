<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Lob\Lob;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LobController extends Controller
{
    /**
     * LOB API KEY
     * @var string
     */
    protected $apikey;

    /**
     * Instance of Lob
     * @var object
     */
    protected $lob;

    /**
     * Initialize Lob
     */
    public function __construct()
    {
        $this->apikey = env('LOB_API_KEY');
        $this->lob = new Lob($this->apikey);
    }

    /**
     * Get all delivery routes for this zip code
     * @param  string $zipcdode
     * @return array
     */
    private function getRoutes($zipcode)
    {
        $results = $this->lob->routes()->all(['zip_codes' => $zipcode]);

        return $results[0]['routes'];
    }

    /**
     * Return all data to the Lob API dashboard
     * @return mixed
     */
    public function getPage()
    {
        $routes = $this->getRoutes('10007');

        return view('api.lob')->withRoutes($routes);
    }
}
