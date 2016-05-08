<?php


namespace App\Http\Controllers;

use App\helpers\YouTube;

class GoogleController extends Controller
{
    protected $youtube;

    public function getCommentsByVideoId($videoId){
        $youtube = new YouTube();
        return $youtube->getCommentsByVideoId('rVmiP7fF71A');
    }

    public function getVideosByChannel(){
        $youtube = new YouTube();
        return $youtube->getVideosByChannel('UU7eoqLsLRu18nqF_xetFnmQ');
    }

    public function getChannels(){
        $youtube = new YouTube();
        return $youtube->getChannels('joaquinsabinaVEVO');
    }

}