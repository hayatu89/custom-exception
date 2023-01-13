<?php
namespace App\Services;

use App\Services\IMDBService;
use App\Exceptions\MoviesException;

class MoviesService  
{
    /**
     * Search for a movie on the api given the title
     * 
     * @param string @title Title of the movie
     * @return mixed Illuminate\Http\Response | App\Exceptions\MoviesExcetion
     */
    public static function get_movie($title)
    {
        $movie = json_decode(json_encode(IMDBService::search_title($title)));
        if ($movie->Response == "True") {
            return $movie;
        } else throw new MoviesException($movie->Error, 1);
        
    }
}
