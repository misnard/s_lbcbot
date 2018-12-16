<?php

namespace App\Service;

use Goutte\Client;

class LbcData
{
    private $goutteClient;

    public function __construct(Client $client)
    {
        //AutoWire don't work todo
        $this->goutteClient = $client;
    }

    public function getTest()
    {
        $crawler = $this->goutteClient->request('GET', 'https://www.symfony.com/blog/');
        dump($crawler);
        return "okok";
    }
}