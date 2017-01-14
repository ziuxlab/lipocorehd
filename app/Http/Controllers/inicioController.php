<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    //
    public function espanol()
    {

        SEO::setTitle('LIPOCORE HD - El mejor quemador de grasa');
        SEO::setDescription('LIPOCORE HD ™ es la fórmula definitiva para ganar la guerra contra la grasa.'); //150
        SEO::setCanonical('https://lipocorehd.com/es');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('https://lipocore.com/es');
        SEOMeta::addKeyword(['lipocore hd', 'quemador de grasa', 'reduce grasa', 'reducir grasa corporal']);

        $idioma = "español";
        return view('inicio-es', compact('idioma'));
    }

    public function ingles()
    {

        SEO::setTitle('LIPOCORE HD - The best fat burner');
        SEO::setDescription('LIPOCORE HD is the ultimate formula for winning the war against fat.');
        SEO::setCanonical('https://lipocorehd.com');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('https://lipocorehd.com');
        SEOMeta::addKeyword(['lipocore hd', 'Fat burner', 'reduce fat', 'reduce body fat']);
        return view('inicio');
    }
}
