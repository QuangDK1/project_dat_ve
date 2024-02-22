<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Theloai;
use DateTime;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $date = new DateTime();
        $movies = Movie::all();
        return view('index', [
            'movies' => $movies,
            'date' => $date,
        ]);
    }

    public function movie($id)
    {
        $movie = Movie::find($id);
        $theloais = Theloai::all();
        if ($movie === null) {
            return view('errors.404');
        } else {
            return view('movie', [
                'movie' => $movie,
                'theloais' =>$theloais,
            ]);
        }
    }
}