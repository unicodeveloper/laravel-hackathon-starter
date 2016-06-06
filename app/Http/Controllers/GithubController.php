<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use GrahamCampbell\GitHub\GitHubManager;

class GithubController extends Controller
{
    /**
     * @var GitHubManager
     */
    protected $github;

    const REPO_NAME = 'laravel-emoji';
    const GITHUB_HANDLE = 'unicodeveloper';

    /**
     * Initialize the Controller with necessary arguments
     *
     * @param GitHubManager $github
     */
    public function __construct(GitHubManager $github)
    {
        $this->github = $github;
    }

    /**
     * @return mixed
     */
    private function getRepoDetails()
    {
        return $this->github->connection('alternative')->repos()->show(self::GITHUB_HANDLE, self::REPO_NAME);
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        $details = $this->getRepoDetails();

        return view('api.github')->withDetails($details);
    }
}
