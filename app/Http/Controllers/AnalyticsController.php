<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use helpers\Heaven;

class AnalyticsController extends Controller
{
    
	public function meme(){

		$heaven = new Heaven();
		return $heaven->getPeopleAndPlaces();

	}

}
