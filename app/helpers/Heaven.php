<?php namespace helpers;

require(dirname(__FILE__) . '/hodclient.php'); 

class Heaven{

	function  getPeopleAndPlaces() {
	    
	    $hodClient = new HODClient("39db56f6-be52-4034-9702-2a11487a8744");
	    
	    $paramArr = array(
		    'url' => ["http://www.bbc.com","http://www.cnn.com"],
		    "entity_type" => ["people_eng", "places_eng", "companies_eng"],
		    "unique_entities" => "true"
		);
		$response = $hodClient->GetRequest($paramArr, HODApps::ENTITY_EXTRACTION, REQ_MODE::SYNC);

		if ($response == null)
		{
		    $errors = $hodClient->getLastError();
		    $err = $errors[0];
		    echo ("Error code: " . $err->error."</br>Error reason: " . $err->reason . "</br>Error detail: " .  $err->detail);
		} else {
		    $people = "";
		    $places = "";
		    $companies = "";
		    $entities = $response->entities;
		    for ($i = 0; $i < count($entities); $i++) {
		        $entity = $entities[$i];
		        if ($entity->type == "people_eng") {
		            $people .= $entity->normalized_text . "; ";
		            // parse any other interested information about this person ...
		        } else if ($entity->type == "places_eng") {
		            $places .= $entity->normalized_text . "; ";
		            // parse any other interested information about this place ...
		        } else if ($entity->type == "companies_eng") {
		            $companies .= $entity->normalized_text . "; ";
		            // parse any other interested information about this place ...
		        }
		    }
		    echo "PEOPLE: " . $people;
		    echo "</br>";
		    echo "PLACES: " . $places;
		    echo "</br>";
		    echo "COMPANIES: " . $companies;
		}

		var_dump($response);
		exit();
		


	}

	// implement callback function
	function requestCompletedWithContent($response) {
	
	    $jsonStr = stripslashes($response);
	    $respObj = json_decode($jsonStr);
	    $people = "";
	    $places = "";
	    $entities = $respObj->entities;
	
	    for ($i = 0; $i < count($entities); $i++) {
	        $entity = $entities[$i];
	        if ($entity->type == "people_eng") {
	            $people .= $entity->normalized_text . "; ";
	            // parse any other interested information about this person ...
	        } else if ($entity->type == "places_eng") {
	            $places .= $entity->normalized_text . "; ";
	            // parse any other interested information about this place ...
	        }
	    }
	
	}

}