<?php
require 'UserReview.php';

$user_reviews = UserReview::all();
echo json_encode($user_reviews);

?>