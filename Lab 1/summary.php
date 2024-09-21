<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
    
    header("Location: register.php?error=1");
    exit();
}


$name = htmlspecialchars($_POST['name']);
$dob = htmlspecialchars($_POST['dob']);
$sex = htmlspecialchars($_POST['sex']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$department = htmlspecialchars($_POST['department']);
$program = htmlspecialchars($_POST['program']);
$mobile = htmlspecialchars($_POST['mobile']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .name {
            background-color: <?php echo $sex == 'Male' ? 'blue' : 'red'; ?>;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Summary</h2>
        <table>
            <tr>
                <th>Name</th>
                <td class="name"><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <th>College Department</th>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <th>Program</th>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
