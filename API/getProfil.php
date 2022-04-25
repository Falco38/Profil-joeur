<?php
	$apiKey = @parse_ini_file("./config.ini")["API_KEY"];


	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?api_key=".$apiKey);

if ($response === FALSE){
	$response = '{"id": "none","accountId": "none","puuid": "none","name": "inconnu","profileIconId": 0,"revisionDate": 0, "summonerLevel": 0}';
}

echo $response;

?>