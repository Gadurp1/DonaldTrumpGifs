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

    $recent_gifs=\App\Gif::paginate(12);

    $new_gif= new \App\Gif;
    $new_gif->image=$gif['image_mp4_url'];
    $new_gif->thumb_url=$gif['fixed_height_small_still_url'];
    $new_gif->save();

    return view('feed.index',compact('recent_gifs'))
        ->with('gif',$gif);
  }
}
