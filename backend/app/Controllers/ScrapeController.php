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
    $response = Http::get('https://infoscreen.sae.ch');
    $html = $response->body();
    $crawler = new Crawler($html);
    $title = $crawler->filter('.titelUnterrichte')->text();
    $lessons = $crawler->filter('.unterrichtsBox')->each(function (Crawler $x) {
      $class = $x->filter('.unterrichtsBox_Klasse')->text();
      $timeAndLocation = $x->filter('.unterrichtsBox_Uhrzeit')->text();
      $lessonAndTeacher = $x->filter('.unterrichtsBox_UnterrichtUndDozent')->text();
      return [
        'class' => $class,
        'time' => explode(' · ', $timeAndLocation)[0],
        'location' => explode(' · ', $timeAndLocation)[1],
        'lesson' => explode(' · ', $lessonAndTeacher)[0],
        'teacher' => explode(' · ', $lessonAndTeacher)[1],
      ];
    });
    return [
      'title' => $title,
      'lessons' => $lessons,
    ];
  }
}
