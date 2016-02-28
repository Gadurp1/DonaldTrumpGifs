<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeedController extends Controller
{
  public function index(){
    $file=file_get_contents('http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=Donald+Trump');
    $gif=json_decode($file, true);
    $gif=$gif['data'];
    return view('feed.index')
        ->with('gif',$gif);
  }
  public function grid(){
    $file=file_get_contents('http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=Donald+Trump');
    $gif=json_decode($file, true);
    $gif=$gif['data'];
    return view('feed.grid')
        ->with('gif',$gif);
  }
}
