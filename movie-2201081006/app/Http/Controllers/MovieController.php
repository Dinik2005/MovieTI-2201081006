<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Using `all()` to get all movies
        return view('homepage', compact('movies'));
    }

    public function detail($id)
    {
        $movie = Movie::find($id);
        return view('detail', compact('movie'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Movie::search($query);

        return view('results', compact('results'));
    }


}
