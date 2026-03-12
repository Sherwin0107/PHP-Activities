<?php
$fullname = $_POST['FirstName'] . ' ' . $_POST['MiddleName'] . ' ' . $_POST['LastName'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['Address'];

echo "My name is <strong>$fullname</strong>. My course is <strong>$course</strong>. I am a $gender student and my mobile phone number is $phone.
I am living at $address";
?>