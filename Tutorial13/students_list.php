<?php
// Connect to the database
$db = new mysqli("localhost", "root", "", "university");

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Select all students from the students table
$sql = "SELECT * FROM students";
$result = $db->query($sql);

// Check if the query was successful
if ($result) {
  // Create a table to display the students' details
  echo "<table>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Name</th>";
  echo "<th>Email</th>";
  echo "<th>Password</th>";
  echo "</tr>";

  // Iterate through the results and display each student's details
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "No students found";
}
?>
