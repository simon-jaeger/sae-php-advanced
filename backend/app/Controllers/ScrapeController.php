<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class ScrapeController {
  function cern(Request $request) {
    $response = Http::get('https://info.cern.ch/hypertext/WWW/People.html');
    $html = $response->body();
    $crawler = new Crawler($html);
    $title = $crawler->filter('h1')->text();
    $people = $crawler->filter('h2')->each(fn(Crawler $x) => $x->text());
    return [
      'title' => $title,
      'people' => $people,
    ];
  }

  function sae(Request $request) {
  }
}
