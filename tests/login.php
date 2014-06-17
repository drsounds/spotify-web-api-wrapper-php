<?php
require_once 'spotify.inc.php';
$result = $spotifyApi->startAuthorization(array('user-read-private', 'user-read-email', 'playlist-modify', 'playlist-read-private', 'playlist-modify-private', 'user-read-private', 'user-read-email'));
    
