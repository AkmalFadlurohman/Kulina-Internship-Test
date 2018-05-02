<?php
require 'UserReview.php';

$review_json = $_POST["review"];
$new_review = json_decode($review_json, true);

$user_review = new UserReview();
$user_review->order_id = $new_review['order_id'];
$user_review->product_id = $new_review['product_id'];
$user_review->user_id = $new_review['user_id'];
$user_review->rating = $new_review['rating'];
$user_review->review = $new_review['review'];

$success = $user_review->save();
if ($success) {
	echo "OK";
} else {
	echo "Failed";
}

?>