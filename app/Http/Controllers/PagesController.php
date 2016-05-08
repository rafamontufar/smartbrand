<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class PagesController extends Controller
{
    

	public function home(){

		return View::make('home');

	}

	public function login(){

		return View::make('login');

	}

	public function menu(){
		
		return View::make('username');

	}

}
