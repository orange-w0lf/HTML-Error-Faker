<?php
include 'HTTP.php';
$x = new HEH;
$x -> createList();
$x -> err(418); //Change 418 to desired error code ( http://en.wikipedia.org/wiki/List_of_HTTP_status_codes )
?>