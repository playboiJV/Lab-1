<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 100px;
        }
        .error {
            color: red;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        input[type="radio"] {
            width: auto;
        }
        input[type="submit"], input[type="reset"] {
            width: 48%;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="auf logo.jpg" alt="AUF Logo"> <!-- Ensure the logo is saved in the same directory as auf-logo.png -->
        </div>
        <h2>AUF Student Registration Form</h2>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<p class="error">Please fill in the required fields.</p>';
        }
        ?>
        <form action="summary.php" method="post">
            <label for="name">Name (Required):</label>
            <input type="text" name="name" id="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob">

            <label>Sex:</label>
            <input type="radio" name="sex" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="sex" value="Female" id="female">
            <label for="female">Female</label>

            <label for="email">Email (Required):</label>
            <input type="email" name="email" id="email" required>

            <label for="address">Address:</label>
            <textarea name="address" id="address"></textarea>

            <label for="department">College Department:</label>
            <select name="department" id="department">
                <option value="CIT">College of Information Technology</option>
                <option value="COE">College of Engineering</option>
                <option value="CAS">College of Arts and Sciences</option>
                <!-- Add more options as needed -->
            </select>

            <label for="program">Program:</label>
            <input type="text" name="program" id="program">

            <label for="mobile">Mobile Number:</label>
            <input type="text" name="mobile" id="mobile">

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>
