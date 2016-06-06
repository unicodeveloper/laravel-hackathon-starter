<?php

namespace App\Http\Controllers;


use Lob\Lob;
use App\Http\Requests;

class LobController extends Controller
{
    const ZIPCODE = '10007';
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
     * @param string $zipcode
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
        $routes = $this->getRoutes(self::ZIPCODE);

        return view('api.lob')->withRoutes($routes);
    }
}
