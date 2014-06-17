<?php
require_once 'spotify.inc.php';
$token = $spotifyApi->requestToken();

// Store the refresh token and access token in your database
$access_token = $token['access_token'];
$refresh_token = $token['refresh_token'];

// For demonstration purpose we fresh the token
$token = $spotifyApi->refreshToken($refresh_token);

// Then 'install' the token into the class instance
$spotifyApi->authorize($token['access_token']);

?>
