<?php

$albumsString = file_get_contents('./json/albums.json');
header('Content-type: application/json');
echo $albumsString;
