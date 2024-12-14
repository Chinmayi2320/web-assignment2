<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Display submitted data
    echo "<h2>Registration Successful!</h2>";
    echo "<p>Your information has been submitted successfully. Here's the data you provided:</p>";
    echo "<ul>";
    echo "<li><strong>Full Name:</strong> $fullName</li>";
    echo "<li><strong>Email:</strong> $email</li>";
    echo "<li><strong>Phone:</strong> $phone</li>";
    echo "<li><strong>Date of Birth:</strong> $dob</li>";
    echo "<li><strong>Gender:</strong> $gender</li>";
    echo "<li><strong>Address:</strong> $address</li>";
    echo "</ul>";
}
?>
