<?php
require_once 'spotify.inc.php';
$token = $spotifyApi->requestToken();
// Add the token to a databas
var_dump($token);
$spotifyApi->accessToken = $token['access_token'];
die($token['access_token']);

?>
