<?php


namespace App\Http\Controllers;

use App\helpers\YouTube;

class GoogleController extends Controller
{
    protected $youtube;

    public function getCommentsByVideoId($videoId){
        
        $youtube = new YouTube();
        
        return $youtube->getCommentsByVideoId($videoId);
    }

    public function getVideosByChannel($channelId){
        
        $youtube = new YouTube();

        return $youtube->getVideosByChannel($channelId);
    }

    public function getChannels($username){
        
        $youtube = new YouTube();

        return $youtube->getChannels($username);
    }

}