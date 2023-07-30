<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Connect to the database
  $db = new mysqli("localhost", "root", "", "university");

  // Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  // Insert data into the students table
  $sql = "INSERT INTO students (id, name, email, password) VALUES ('$id', '$name', '$email', '$password')";
  $result = $db->query($sql);

  // Check if the query was successful
  if ($result) {
    echo "Data inserted successfully";
  } else {
    echo "Data insertion failed";
  }
}
?>
