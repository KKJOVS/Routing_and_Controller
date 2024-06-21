<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HobbiesController extends Controller
{
    public function show()
    {
        $data = [
            'title' => 'Hobbies',
            'description' => "Hobbies? I don't know, it depends on the mood. Welcome to the Hobbies page tho!",
            'hobbies' => ['Playing Online Video Games', 'Watching Anime']
        ];
        return view('hobbies', $data);
    }
}

