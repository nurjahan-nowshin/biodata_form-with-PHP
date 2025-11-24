<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name   = htmlspecialchars($_POST['name']);
    $email  = htmlspecialchars($_POST['email']);
    $phone  = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Output</title>
</head>
<body>

<h2>Your Submitted Biodata</h2>

<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Phone:</strong> <?php echo $phone; ?></p>
<p><strong>Gender:</strong> <?php echo $gender; ?></p>
<p><strong>Address:</strong> <?php echo $address; ?></p>

</body>
</html>