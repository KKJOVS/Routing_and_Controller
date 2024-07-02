<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'My Skills',
            'description' => "This is the skill page, please don't judge me.",
            'skills' => ['Communication skills', 'Self-Improvement', 'Attention to user experience']
        ];
        return view('skills', $data);
    }
}
