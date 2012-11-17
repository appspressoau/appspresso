<?php 
require_once("lib/FoursquareAPI.class.php");
// Set your client key and secret
$client_key = "YTRI2IGK4PCLZ404QVGL4CVHFKKUO1YOMJXYNPFCOUH5B3VG";
$client_secret = "JF4HONACL3XZ1FVO0GRRSEUIYKFYVV1WH4OW3UWHV4RTUDWN";

$foursquare = new FoursquareAPI($client_key,$client_secret);

$location = isset($_GET['query']) ? $_GET['query'] : 'flinders uni building adelaide';

// Generate a latitude/longitude pair using Google Maps API
list($lat,$lng) = $foursquare->GeoLocate($location);

// Prepare parameters
$params = array("ll"=>"$lat,$lng","query"=>"coffee");

// Perform a request to a public resource
$response = $foursquare->GetPublic("venues/search",$params);
$venues = json_decode($response);
$results = array();
foreach($venues->response->venues as $venue) {
  $result = array('name' => $venue->name,
                     'distance' => $venue->location->distance . 'm');
  if (isset($venue->location->address)) {
    $result['address'] = $venue->location->address;
  }
  $results[] = $result;
}
print json_encode($results);
?>
