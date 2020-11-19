<?php

namespace App\Http;

use GuzzleHttp\Client;

class NewsClient
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function topHeadline($country)
    {
        $res = $this->client->request('GET', 'http://newsapi.org/v2/top-headlines', [
            'query' => [
                'country' => $country,
                'apiKey' => env('NEWS_API_KEY')
            ]
        ]);
        return json_decode($res->getBody()->getContents());
    }
}
