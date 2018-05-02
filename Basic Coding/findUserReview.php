<?php
require 'UserReview.php';

$review_json = $_POST["review"];
$review_to_find = json_decode($review_json, true);
$review_id = $review_to_find['id'];

$user_review = UserReview::find($review_id);
echo json_encode($user_review);
?>