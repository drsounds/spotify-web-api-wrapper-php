<?php
require_once 'spotify.inc.php';
$token = $spotifyApi->requestToken();
die($token);
?>
