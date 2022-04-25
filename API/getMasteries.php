<?php

	$apiKey = @parse_ini_file("./config.ini")["API_KEY"];


	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/".$_GET['id']."?api_key=".$apiKey);

if ($response === FALSE){
	$response = '{"championId": 0,"championLevel": 0,"championPoints": 0,"lastPlayTime": 0,"championPointsSinceLastLevel": 0,"championPointsUntilNextLevel": 0,"chestGranted": false,"tokensEarned": 0,"summonerId": "0"}';
}

echo $response;

?>