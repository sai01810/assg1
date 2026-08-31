<!DOCTYPE html>
<html>
<head>
    <title>Username Form</title>
</head>
<body>

    <h2>Enter Your Name</h2>

    <form method="post">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        echo "<h3>Hello, " . htmlspecialchars($username) . "!</h3>";
    }
    ?>

</body>
</html>
