<?php
require 'UserReview.php';

$review_json = $_POST["review"];
$review_to_delete = json_decode($review_json, true);
$review_id = $review_to_delete['id'];

$user_review = UserReview::find($review_id);
$success = $user_review->delete();
if ($success) {
	echo "OK";
} else {
	echo "Failed";
}
?>