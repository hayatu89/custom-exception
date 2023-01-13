<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MoviesService;

class MoviesController extends Controller
{
    /**
     * Display the search form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }
    /**
     * Search for a movie given the Title of that movie
     * @param Illuminate\Http\Request $request The Request Object
     * @return \Illuminate\Support\Facades\View
     */
    public function search_movie(Request $request)
    {
        $result = MoviesService::get_movie($request->input('title'));
        return view('result', ['result' => $result]);
    }
}
