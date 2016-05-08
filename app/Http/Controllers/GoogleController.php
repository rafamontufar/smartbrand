<?php


namespace App\Http\Controllers;

use App\helpers\YouTube;
use Illuminate\Http\Request;
use View;

class GoogleController extends Controller
{
    protected $youtube;

    public function getCommentsByVideoId($videoId){
        
        $youtube = new YouTube();
        
        return $youtube->getCommentsByVideoId($videoId);
    }

    public function getVideosByChannel($channelId){
        
        $youtube = new YouTube();

        $videos =  $youtube->getVideosByChannel($channelId);
    
        $data = [ 'videos' => $videos];

        return View::make('videos',$data);
    }

    public function getChannels(Request $request){
        
        $username = $request->input('username');

        $youtube = new YouTube();
        $channels = $youtube->getChannels($username);

        $data = [ 'channels' => $channels];

        return View::make('channels',$data);

    }


    public function channels(){

        return View::make('channels');

    }

    public function videos(){
        
        return View::make('videos');
    
    }

}