<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumsController extends Controller
{
    public function show($id){
        $album = Http::get('https://jsonplaceholder.typicode.com/albums/'.$id.'/photos')->json();

        return $album;
    }
}
