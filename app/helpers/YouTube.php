<?php


namespace App\helpers;


class YouTube
{

    public function getCommentsByVideoId($videoId = 'dM6XYUYj804'){

        $url = "https://www.googleapis.com/youtube/v3/commentThreads?key=".env('GOOGLE_KEY')."&textFormat=plainText&part=snippet&videoId=$videoId&maxResults=100";
        $results = $this->getCurl($url);
//      dd($results);
        $comments = [];
        foreach ($results->items as $comment){
            $comments[] = ['comment'=>$comment->snippet->topLevelComment->snippet->textDisplay];
        }
        return $comments;
    }

    public function getVideosByChannel($playlistId='UUWqkzUe2mz-j5dol5Uc6UfQ'){

        $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=$playlistId&key=".env('GOOGLE_KEY')."&maxResults=50";

        $response = $this->getCurl($url);
//      dd($response);
        $videos = [];
        foreach ($response->items as $video){
            $videos[]=['videoId'=>$video->snippet->resourceId->videoId,'title'=>$video->snippet->title];
        }
        return $videos;
    }



    public function getChannels($username = 'Mark30007'){
        $url = "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&key=".env('GOOGLE_KEY')."&forUsername=$username";

        $response = $this->getCurl($url);
//      dd($results);
        $channels = [];
        foreach ($response->items as $channel){
            $channels[] = ['id'=>$channel->id];
        }
        return $channels;

    }

    private function getCurl($url){
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $json_response = curl_exec($curl);

        curl_close($curl);

        return json_decode($json_response);

    }
}