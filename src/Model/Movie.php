<?php

namespace App\Model;

use GuzzleHttp\Client;

class Movie
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://api.themoviedb.org'
        ]);
    }

    public function getAllMovies($query)
    {
        $key = '51a0abce642402e7b8d43b2081302e77';

        return json_decode($this->client
            ->request('GET', '/3/search/movie?query='.$query.'&api_key='.$key)->getBody());
    }

    public function getMovieById($id)
    {

    }

    public function getSimilarMovieById($id)
    {

    }
}
