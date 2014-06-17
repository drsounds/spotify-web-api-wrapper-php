<?php
require_once 'spotify.inc.php';
$result = $spotifyApi->startAuthorization(array('user-read-private'));
die(var_dump($result));
