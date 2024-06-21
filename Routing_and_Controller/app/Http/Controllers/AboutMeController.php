<?php

// About Me Controller
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutMeController extends Controller
{
    public function show()
    {
        $data = [
            'title' => 'About Me',
            'introduction' => 'Good Day! I am Kristan Jovero.',
            'description' => 'I am not good with coding and programming but I am willing to learn and extend my knowledge.'
        ];
        return view('about-me', $data);
    }
}