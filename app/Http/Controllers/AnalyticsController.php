<?php

namespace App\Http\Controllers;

use App\helpers\YouTube;

use App\Http\Requests;
use helpers\Heaven;

class AnalyticsController extends Controller
{

	public function getTagsByVideoId($video_id){
        $youtube = new YouTube();
        $tags = $youtube->getTagsByVideoId('rVmiP7fF71A');
        return $tags;
	}

	public function getFeelingsByVideoId($video_id){

		$heaven = new Heaven();
		$youtube = new YouTube();

		$comments = $youtube->getCommentsByVideoId('rVmiP7fF71A');

		$feeling = $heaven->getFeeling($comments);

		//dd($feeling);

		$goods = count($feeling->positive);
		$bad  = count($feeling->negative);
		$neutral = count($comments) - ($goods + $bad);

		echo $goods."<br>";
		echo $bad."<br>";
		echo $neutral."<br>";


	}

    public function dashboard($video_id){
        $heaven = new Heaven();
        $youtube = new YouTube();

        $comments = $youtube->getCommentsByVideoId('rVmiP7fF71A');
        $users = [];
        
        foreach ($comments as $comment){
            $users[] = $comment['author'];
        }

        $users = array_count_values($users);
        arsort($users);

        $tags = $youtube->getTagsByVideoId('rVmiP7fF71A');

        $totalComments = count($comments);
        $feeling = $heaven->getFeeling($comments);

        $goods = count($feeling->positive);
        $bads  = count($feeling->negative);
        $neutral = count($comments) - ($goods + $bads);

        return view('dashboard',compact('goods','bads','neutral','totalComments','feeling','tags','users','comments'));
    }

}
