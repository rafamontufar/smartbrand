<?php namespace helpers;


class Heaven {


	public function getFeeling($comment){
		if(is_array($comment)){
			$url = "";
			foreach ($comment as $c){
				$url .="text=".urlencode($c['comment'])."&";
			}
			$url = rtrim($url, "&");
		}
		else{
			$url ="text=".urlencode($comment);
		}
		$url = "https://api.havenondemand.com/1/api/sync/analyzesentiment/v1?$url&language=spa&apikey=".env('HEAVEN_API_KEY');
		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$json_response = curl_exec($curl);
		curl_close($curl);
		
		return json_decode($json_response);
	}
}