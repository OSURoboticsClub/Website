<?php
/**
 * Created By: Corwin Perren
 * Date: 4/4/2016
 * Purpose: This php file is a middleman between the rfid readers and the google apps script for the club.
 */

//Edit this url to change what script is handling the authentication
$google_apps_script_url = "https://script.google.com/macros/s/AKfycbz7U1Ag1CBExqzIjs7jjDENNOuqqQXLU1iWFlSvYL8sqHvx43Q/exec";

//This sets the php headers to be natively JSON, as that's what the authenticator g-script returns
header('Content-Type: application/json');

//This retrieves the URL parameters from the url used to access the page.
$url_parameters = $_SERVER['QUERY_STRING'];

//Here we concatenate the base google script url with the url parameters sent to this middleman
$curl_url = $google_apps_script_url . "?" . $url_parameters;

//Next, we initialize curl with the url we just made.
$curl = curl_init($curl_url);

//We also set curl to follow re-directs as g-scripts generate one time urls for each run that need to be followed
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

//Execute the request. It will dump the results to the page in JSON.
curl_exec($curl);
