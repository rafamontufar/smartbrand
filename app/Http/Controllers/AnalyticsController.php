<?php

namespace App\Http\Controllers;

use App\helpers\YouTube;

use App\Http\Requests;
use helpers\Heaven;

class AnalyticsController extends Controller
{

	public function getTagsByVideoId($videoId){
        $youtube = new YouTube();
        $tags = $youtube->getTagsByVideoId($videoId);
        return $tags;
	}

	public function getFeelingsByVideoId($videoId){

		$heaven = new Heaven();
		$youtube = new YouTube();

		$comments = $youtube->getCommentsByVideoId($videoId);

		$feeling = $heaven->getFeeling($comments);

		//dd($feeling);

		$goods = count($feeling->positive);
		$bad  = count($feeling->negative);
		$neutral = count($comments) - ($goods + $bad);

		echo $goods."<br>";
		echo $bad."<br>";
		echo $neutral."<br>";


	}

    public function dashboard($videoId){
        $heaven = new Heaven();
        $youtube = new YouTube();

        $comments = $youtube->getCommentsByVideoId($videoId);
        $users = [];
        
        foreach ($comments as $comment){
            $users[] = $comment['author'];
        }

        $users = array_count_values($users);
        arsort($users);

        $tags = $youtube->getTagsByVideoId( $videoId );

        $totalComments = count($comments);

        $feeling = $heaven->getFeeling($comments);
        
        $goods = isset($feeling->positive)? count($feeling->positive) : 0;
        $bads  = isset($feeling->negative)? count($feeling->negative) : 0;
        
        $neutral = count($comments) - ($goods + $bads);

        return view('dashboard',compact('goods','bads','neutral','totalComments','feeling','tags','users','comments'));
    }

}
