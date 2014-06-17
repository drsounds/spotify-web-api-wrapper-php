<?php
require_once 'spotify.inc.php';

// We choose the permission scope to ask allowance for
$scope = array(
    'user-read-email', 
    'playlist-modify', 
    'playlist-read-private', 
    'playlist-modify-private', 
    'user-read-private', 
    'user-read-email');
    
// Then start the authorization flow
$result = $spotifyApi->startAuthorization($scope);
    
