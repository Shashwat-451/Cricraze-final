<?php
$url="https://api.cricapi.com/v1/match_info?apikey=951bf53f-ccd0-4080-96d2-70c71a80d42a&offset=0&id=8eddf06a-6b4c-4c94-bef1-f7fcc0067616";

//file get contents give all data to result variable in json format
$result=file_get_contents($url);
//now json_decode converts all data from json format into arrays and store in result 
$result=json_decode($result,true);
echo "<pre>";
print_r($result);
?>