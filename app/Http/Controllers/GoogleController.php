<?php


namespace App\Http\Controllers;

use App\helpers\YouTube;

class GoogleController extends Controller
{
    protected $youtube;

    public function getCommentsByVideoId($videoId){
        $youtube = new YouTube();
        return $youtube->getCommentsByVideoId();
    }

    public function getVideosByChannel(){
        $youtube = new YouTube();
        return $youtube->getVideosByChannel();
    }

    public function getChannels(){
        $youtube = new YouTube();
        return $youtube->getChannels();
    }
}