 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1>CARI CYBERSEC COMPANY</h1>
    <hr>
    <form action="output1.php" method="post">
        <h1>Registration Form</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="Last, First M.I." required><br><br>
        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address" required><br><br>
        <label for="Contact">Contact Number:</label>
        <input type="text" id="Contact" name="Contact" required><br><br>
        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="Dateofbirth" value="YYYY-MM-DD"required><br><br>
        <label for="Gender">Gender:</label>
        <input type="radio" id="male" name="Gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="Gender" value="Female"required>
        <label for="female">Female</label><br><br>
        <label for="OfficeAddr">Office Address:</label>
        <input type="text" id="OfficeAddr" name="OfficeAddr" required>
        <label for="phoneNum">Phone Number:</label>
        <input type="text" id="phoneNum" name="phoneNum" required><br><br>
        <label for="Position">Position:</label>
        <input type="text" id="Position" name="Position" required>
        <label for="EmploymentStatus">Employment Status:</label>
        <select name="EmploymentStatus" id="EmploymentStatus">
            <option>Permanent</option>
            <option>Casual</option>
        </select><br><br>
        <label for="MonthlySalary">Monthly Salary:</label>
        <select name="MonthlySalary" id="MonthlySalary">
            <option>Below Php10,000.00</option>
            <option>Php10,000 - 20,000.00</option>
            <option>Above 20,000</option>
        </select><br><br><br>

        <button type="submit">Register</button> <button type="reset">Reset</button>
    </form>
 </body>
 </html>