<?php

namespace App\Http\Controllers;

use App\helpers\YouTube;

use App\Http\Requests;
use helpers\Heaven;

class AnalyticsController extends Controller
{

	public function getChannels(){

	}

	public function getFeelingsByVideoId($video_id){

		$heaven = new Heaven();
		$youtube = new YouTube();

		$comments = $youtube->getCommentsByVideoId('rVmiP7fF71A');

		$feeling = $heaven->getFeeling($comments);

		dd($feeling);

	}

}
