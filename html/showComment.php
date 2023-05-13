<?php 
$selectComments = "SELECT * FROM comment WHERE post_id = $post_id";
$queryComments = $dbconn->query($selectComments);



?>