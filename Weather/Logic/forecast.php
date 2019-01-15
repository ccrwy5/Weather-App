<?php

//https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyBfrOtludXOnCKspwxI7y-JQu8oneGgS_E

$location = htmlentities($_POST['location']);

$location = str_replace(' ', '+', $location);

$geocode_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'&key=AIzaSyBfrOtludXOnCKspwxI7y-JQu8oneGgS_E';

$location_data = json_decode(file_get_contents($geocode_url));


//echo '<pre>';
//print_r($location_data);
//echo '</pre>';


$coordinates = $location_data->results[0]->geometry->location;

$coordinates = $coordinates->lat.','.$coordinates->lng;

//$place = $location_data->results[0]->address_components[0]->long_name;
$place = $location_data->results[0]->formatted_address;

$api_url = 'https://api.darksky.net/forecast/f9e91c95700540def1f43c973cb7ec06/'.$coordinates;

$forecast = json_decode(file_get_contents($api_url));

//    echo '<pre>';
//    print_r($forecast);
//    echo '</pre>';

//current conditions

$temperature_current = round($forecast->currently->temperature);
$summary_current = $forecast->currently->summary;
$windspeed_current = $forecast->currently->windSpeed;
$humidity_current = ($forecast->currently->humidity) * 100;

date_default_timezone_set($forecast->timezone);