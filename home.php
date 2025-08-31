<?php

require 'database.php';
require 'auth.php';

$db = (new Database())->connect();
$auth = new Auth($db);

if (!$auth->check()) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="home-card">
        <h1>Welcome, <?php echo htmlspecialchars($auth->student()); ?>!</h1>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <script src="script.js"></script>
</body>

</html>