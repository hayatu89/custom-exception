<?php
namespace App\Services;
use Illuminate\Http\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * @author Hayatu Mohammed Abubakar
 * 
 */
Class IMDBService {
    /**
     * Check a movie given the Title
     * @param string $title Title of the Movie
     * @return Illuminate\Http\Response
     */
    public static function search_title($title)
    {
        $url = config('settings.imdb_url').'/?t='.$title.'&apikey='.config('settings.imdb_key');
        $response = Http::get($url);
        return $response->json();
    }
}