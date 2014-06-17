<?php
require_once 'spotify.inc.php';
$spotifyApi->accessToken = $_GET['access_token'];

/**
 * Test some stuff
echo "Getting info about an playlist \n";
$playlist_info = $spotifyApi->getPlaylistInfo('spotify:user:drsounds:playlist:4KreUFvTUyzz5tWcM3RXiS');
var_dump($playlist_info);

echo "Getting tracks of playlist \n";
$playlist_tracks = $spotifyApi->getTracksInPlaylist('spotify:user:drsounds:playlist:4KreUFvTUyzz5tWcM3RXiS');
var_dump($playlist_tracks);

echo "User info\n";
$user_info = $spotifyApi->getPlaylistsForUser('drsounds');
 */
 // Getting some playlist info

$spotifyApi->addTracksToPlaylist('spotify:user:drsounds:playlist:6TwBnzSA2AtpjTARigaO2d', array('spotify:track:1sDvVtcfvXAyWyedPy7av2'));
var_dump($user_info);