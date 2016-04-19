<?php

namespace App\Model;

use GuzzleHttp\Client;

class Movie
{
    const API_KEY = '51a0abce642402e7b8d43b2081302e77';

    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://api.themoviedb.org'
        ]);
    }

    public function getAllMovies($query)
    {
        return json_decode($this->client
            ->request('GET', '/3/search/movie?query='.$query.'&api_key='.self::API_KEY)
            ->getBody()
        );
    }

    public function getMovieById($id)
    {
        return json_decode($this->client
            ->request('GET', '/3/movie/'.$id.'?api_key='.self::API_KEY)
            ->getBody()
        );
    }

    public function getSimilarMoviesById($id)
    {
        return json_decode($this->client
            ->request('GET', '/3/movie/'.$id.'/similar?api_key='.self::API_KEY)
            ->getBody()
        );
    }
}
