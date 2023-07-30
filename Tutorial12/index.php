<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
  $academic_year = $_POST["academic_year"];
  $email = $_POST["email"];
  $phone_no = $_POST["phone_no"];

  echo "<h2>Your Registration Details</h2>";
  echo "<p>First Name: " . $firstname . "</p>";
  echo "<p>Last Name: " . $lastname . "</p>";
  echo "<p>Username: " . $username . "</p>";
  echo "<p>Password: " . $password . "</p>";
  echo "<p>Gender: " . $gender . "</p>";
  echo "<p>Academic Year: " . $academic_year . "</p>";
  echo "<p>Email: " . $email . "</p>";
  echo "<p>Phone Number: " . $phone_no . "</p>";
}
?>
