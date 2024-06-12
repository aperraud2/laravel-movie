<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use DB;

class MovieController extends Controller
{
    public function topRated()
    {
        $toprated = DB::select('SELECT * FROM `movies` WHERE movie_type_id = 1 AND votes_nr >= 5000 ORDER BY `rating` DESC LIMIT 50');

        return view('toprated.topRated', compact('toprated'));
    }
}
