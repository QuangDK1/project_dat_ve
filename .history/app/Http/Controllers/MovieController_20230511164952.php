<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Theloai;
use App\Models\Ve;
use DateTime;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $date = new DateTime();
        $movies = Movie::all();
        $Ve =Ve::all();
        return view('index', [
            'movies' => $movies,
            'date' => $date,
            'Ve' =>$Ve,
        ]);
    }

    public function movie($id)
    {
        $movie = Movie::find($id);
        $theloais = Theloai::all();
        $Ve =Ve::find($id);
        if ($movie === null&& $Ve === null) {
            return view('errors.404');
        } else {
            return view('movie', [
                'movie' => $movie,
                'theloais' =>$theloais,
                've' =>$Ve,
            ]);
        }
    }
}