<?php

class UserReview {
	public $id;
	public $order_id;
	public $product_id;
	public $user_id;
	public $rating;
	public $review;
	public $created_at;
	public $updated_at;

	function __construct() {
       
    }

    public function save() {
    	require 'dbConnect.php';
    	$preparedStmt = $conn->prepare("INSERT INTO user_review (order_id, product_id, user_id, rating, review) VALUES (?,?,?,?,?)");

		$preparedStmt->bind_param("iiids", $this->order_id, $this->product_id, $this->user_id, $this->rating, $this->review);
		$success = $preparedStmt->execute();
		$preparedStmt->close();
		$conn->close();
		return $success;
    }

    public static function find($id) {
    	require 'dbConnect.php';
    	$stmt = $conn->query("SELECT * FROM `user_review` where id = ".$id);
		$count = $stmt->num_rows;
		$user_review = new UserReview();
		if ($count > 0) {
			while($row = $stmt->fetch_assoc()) {
                $user_review->id = $row['id'];
                $user_review->order_id = $row['order_id'];
				$user_review->product_id = $row['product_id'];
				$user_review->user_id = $row['user_id'];
				$user_review->rating = $row['rating'];
				$user_review->review = $row['review'];
				$user_review->created_at = $row['created_at'];
				$user_review->updated_at = $row['updated_at'];
            }
		} else {
			$user_review = null;
		}
		$conn->close();
		return $user_review;
    }

    public static function all() {
    	require 'dbConnect.php';
    	$stmt = $conn->query("SELECT * FROM `user_review`");
		$user_reviews = array();
		if ($stmt) {
			while($row = $stmt->fetch_assoc()) {
				$user_review = new UserReview();
                $user_review->id = $row['id'];
                $user_review->order_id = $row['order_id'];
				$user_review->product_id = $row['product_id'];
				$user_review->user_id = $row['user_id'];
				$user_review->rating = $row['rating'];
				$user_review->review = $row['review'];
				$user_review->created_at = $row['created_at'];
				$user_review->updated_at = $row['updated_at'];
				array_push($user_reviews,$user_review);
            }
		} 
		$conn->close();
		return $user_reviews;
    }

    public function update() {
    	require 'dbConnect.php';
    	$preparedStmt = $conn->prepare("UPDATE user_review SET order_id = ?, product_id = ?, user_id = ?, rating = ?, review = ? WHERE id = ?");
    	$preparedStmt->bind_param("iiidsi", $this->order_id, $this->product_id, $this->user_id, $this->rating, $this->review, $this->id);
		$success = $preparedStmt->execute();
		$preparedStmt->close();
		$conn->close();
		return $success;
    }

    public function delete() {
    	require 'dbConnect.php';
    	$preparedStmt = $conn->prepare("DELETE FROM `user_review` WHERE `id` = ?");
		$preparedStmt->bind_param("i",$this->id);
		$success = $preparedStmt->execute();
		$preparedStmt->close();
		$conn->close();
		return $success;
    }
}

?>