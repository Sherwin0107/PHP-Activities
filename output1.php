<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Member Information</h1>
    <?php
    $fullname = $_POST['name'];
    $address = $_POST['Address'];
    $contact = $_POST['Contact'];
    $dob = isset($_POST['Dateofbirth']) ? $_POST['Dateofbirth'] : 'YYYY-MM-DD';
    $gender = $_POST['Gender'];
    $officeAddr = $_POST['OfficeAddr'];
    $phone = $_POST['phoneNum'];
    $position = $_POST['Position'];
    $employmentStatus = $_POST['EmploymentStatus'];
    $monthlySalary = $_POST['MonthlySalary'];
    ?>

    <table border="1">
        <tr>
            <td>Name:</td>
            <td><?php echo $fullname; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td>Contact Number:</td>
            <td><?php echo $contact; ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo $dob; ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Office Address:</td>
            <td><?php echo $officeAddr; ?></td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <td>Position:</td>
            <td><?php echo $position; ?></td>
        </tr>
        <tr>
            <td>Employment Status:</td>
            <td><?php echo $employmentStatus; ?></td>
        </tr>
        <tr>
            <td>Monthly Salary:</td>
            <td><?php echo $monthlySalary; ?></td>
        </tr>
    </table>
    <br><br>
    <a href="RegistrationForm.php">Go back to Registration Form</a>
</body>
</html>