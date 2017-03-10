<?php
require 'head.php';
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
    echo '<p class = "feature">
	<a href="list_book.php">list Book</a>
	<a href="add_book.php">Add Book</a>
	<a href="delete_book.php">Delete Book</a>
	<a href="add_admin.php">Add Staff</a>
	<a href="delete_review.php">Delete Review</a>
	<a href="index.php">Quit & Return</a>
	</p>';
}
else { 
    echo '<p class = "feature">You are not logged in. <a href="login.php">Click here to log in</a></p>';
}
require 'foot.php';
?>