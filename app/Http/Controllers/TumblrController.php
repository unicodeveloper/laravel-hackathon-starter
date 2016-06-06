<?php

namespace App\Http\Controllers;

use Tumblr;
use App\Http\Requests;

class TumblrController extends Controller
{
    /**
     * Instance of Tumblr API
     * @var object
     */
    protected $tumblr;

     /**
     * Initialize the Controller with necessary arguments
     */
    public function __construct()
    {
        $this->tumblr = new Tumblr();

        // Set API key.
        $this->tumblr->setApiKey(env('TUMBLR_API_KEY'));
    }

    /**
     * Get Basic Information about the blog
     * @return array
     */
    private function getBlogInfo($tumblrBlogUrl)
    {
        $info = $this->tumblr->blogInfo($tumblrBlogUrl);

        return (array)$info;
    }

    /**
     * Get Posts from the Tumblr blog
     * @return array
     */
    private function getPosts($tumblrBlogUrl)
    {
        $info = $this->tumblr->posts($tumblrBlogUrl);

        return (array)$info->response->posts;
    }

    /**
     * Return all data to the Tumblr API dashboard
     * @return mixed
     */
    public function getPage()
    {
        $posts = $this->getPosts('taylorswift.tumblr.com');

        return view('api.tumblr')->withPosts($posts);
    }
}
