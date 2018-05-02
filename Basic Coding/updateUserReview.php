<?php

require 'dbConnect.php';
require 'UserReview.php';

$review_json = $_POST["review"];
$review_to_update = json_decode($review_json, true);

$user_review = new UserReview();
$user_review->id = $review_to_update['id'];
$user_review->order_id = $review_to_update['order_id'];
$user_review->product_id = $review_to_update['product_id'];
$user_review->user_id = $review_to_update['user_id'];
$user_review->rating = $review_to_update['rating'];
$user_review->review = $review_to_update['review'];

$success = $user_review->update();
if ($success) {
	echo "OK";
} else {
	echo "Failed";
}

?>