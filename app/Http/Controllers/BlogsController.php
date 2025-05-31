<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function show($title)
    {
        $blogs = [
            [
                'id' => 1,
                'img' => 'assets/images/blog/1.jpg', 
                'title' => 'Building Your Corporate Identity from Upwind', 
                'desc' => 'The phrasal sequence of the is now so that many campaign and benefit', 
            ],
            [
                'id' => 2,
                'img' => 'assets/images/blog/2.jpg', 
                'title' => 'The Right Hand of Business IT World', 
                'desc' => 'The phrasal sequence of the is now so that many campaign and benefit', 
            ],
            [
                'id' => 3,
                'img' => 'assets/images/blog/3.jpg', 
                'title' => 'The Building Your Corporate Identity from Upwind', 
                'desc' => 'The phrasal sequence of the is now so that many campaign and benefit', 
            ]
        ];

        // Find the course by ID
        $item = collect($blogs)->first(function ($blog) use ($title) {
            return Str::slug($blog['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('blog-detail', compact('item'));
    }
}