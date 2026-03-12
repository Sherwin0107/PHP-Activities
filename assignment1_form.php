<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
    <h1>My First HTML form</h1>
    <form action="assignment1_output.php" method="post">
        <label for="FirstName">First Name: </label>
        <input type="text" id="FirstName" name="FirstName" required><br><br>
        <label for="MiddleName">Midddle Name: </label>
        <input type="text" id="MiddleName" name="MiddleName" required><br><br>
        <label for="LastName">Last Name: </label>
        <input type="text" id="LastName" name="LastName" required><br><br>

        <label for="course">Course: </label>
        <select name="course" id="course"> 
            <option>Computer Science</option>
            <option>Information Technology</option>
            <option>Others</option>
        </select><br><br>
        <label for="gender">Gender: </label><br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="others" name="gender" value="Others">
        <label for="others">Other</label><br><br>

        <label for="phone">Phone: </label>
        <input type="text" id="phone" name="phone" required><br><br>
        <label for="Address">Address:</label><br>
        <textarea name="Address" id="Address" cols="100%" rows="10"></textarea><br>
        <button type="submit">Submit</button> <button type="reset">Reset</button>
    </form>
</body>
</html>