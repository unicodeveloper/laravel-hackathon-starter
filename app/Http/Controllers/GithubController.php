<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\GitHub\GitHubManager;

class GithubController extends Controller
{
    protected $github;
    protected $repoName;
    protected $githubHandle;

    public function __construct(GitHubManager $github)
    {
        $this->github = $github;
        $this->repoName = 'laravel-emoji';
        $this->githubHandle = 'unicodeveloper';
    }

    private function getRepoDetails()
    {
        return $this->github->connection('alternative')->repos()->show($this->githubHandle, $this->repoName);
    }

    public function getPage()
    {
        $details = $this->getRepoDetails();

        return view('api.github')->withDetails($details);
    }
}
