<?php


namespace App\helpers;


class YouTube
{

    public function getCommentsByVideoId($videoId = 'dM6XYUYj804'){

        $url = "https://www.googleapis.com/youtube/v3/commentThreads?key=".env('GOOGLE_KEY')."&textFormat=plainText&part=snippet&videoId=$videoId&maxResults=40";
        $results = $this->getCurl($url);
   //    dd($results);
        $comments = [];
        foreach ($results->items as $comment){
            $comments[] = [ 'comment'=>$comment->snippet->topLevelComment->snippet->textDisplay,
                            'author'=>$comment->snippet->topLevelComment->snippet->authorDisplayName,
                            'authorChannel'=>$comment->snippet->topLevelComment->snippet->authorChannelUrl];
        }
        return $comments;
    }

    public function getVideosByChannel($playlistId='UUWqkzUe2mz-j5dol5Uc6UfQ'){

        $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=$playlistId&key=".env('GOOGLE_KEY')."&maxResults=50";

        $response = $this->getCurl($url);
        $videos = [];
        foreach ($response->items as $video){
            $videos[]=['videoId'=>$video->snippet->resourceId->videoId,
                        'title'=>$video->snippet->title,
                        'image'=>$video->snippet->thumbnails->default->url];
        }

        return $videos;
    
    }

    public function getTagsByVideoId($video_id){
        $url = "https://www.googleapis.com/youtube/v3/videos?key=".env('GOOGLE_KEY')."&fields=items(snippet(title,description,tags))&part=snippet&id={$video_id}";
        $response = $this->getCurl($url);
        return isset($response->items[0]->snippet->tags)?$response->items[0]->snippet->tags:[];

    }

    public function getInfoChannel($chanelId){
        $url = "https://www.googleapis.com/youtube/v3/channels?id=$chanelId&key=".env('GOOGLE_KEY')."&part=snippet,contentDetails";
        $response = $this->getCurl($url);
        return $response;
    }

    public function getChannels($username){
        $url = "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&key=".env('GOOGLE_KEY')."&forUsername=$username";

        $response = $this->getCurl($url);
        $channels = [];
        foreach ($response->items as $channel){
            $details = $this->getInfoChannel($channel->id);
            $channels[] = ['id'=>$channel->contentDetails->relatedPlaylists->uploads,
                           'title'=>$details->items[0]->snippet->title,
                           'image'=>$details->items[0]->snippet->thumbnails->default->url];
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