<?php


namespace App\Http\Controllers;

use App\helpers\YouTube;
use Illuminate\Http\Request;
use View;

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

}