<?php

// Connect to the MySQL database
$connection = mysqli_connect('localhost', 'user', 'password', 'database');

// Check if the connection was successful
if (!$connection) {
  die('Error connecting to MySQL database: ' . mysqli_connect_error());
}

// Escape the user's response to prevent SQL injection
$response = mysqli_real_escape_string($connection, $_POST['response']);

// Store the user's response in the database
$query = "INSERT INTO responses (response) VALUES ('$response')";

// Check if the query was successful
if (mysqli_query($connection, $query)) {
  echo 'Successfully stored user response in database';
} else {
  echo 'Error storing user response in database: ' . mysqli_error($connection);
}
