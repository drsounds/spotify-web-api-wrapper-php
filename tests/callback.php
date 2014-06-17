<?php
require_once 'spotify.inc.php';
$token = $spotifyApi->requestToken();
// Add the token to a databas
$spotifyApi->accessToken = $token['access_token'];
$refresh_token = $token['refresh_token'];
$tokens = $spotifyApi->refreshToken($refresh_token);
var_dump($tokens);
?>
