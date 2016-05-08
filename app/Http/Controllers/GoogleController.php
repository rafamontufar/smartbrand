<?php


namespace App\Http\Controllers;

use App\helpers\YouTube;

class GoogleController extends Controller
{
    protected $youtube;

    public function getCommentsByVideoId($videoId){
        $youtube  = new YouTube();
        $comments = $youtube->getCommentsByVideoId('rVmiP7fF71A');
        $users = [];
        dd($comments);
        foreach ($comments as $comment){
            $users[] = $comment['author'];
        }
        //$goodComments = $comments
        $users = array_count_values($users);
        arsort($users);

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