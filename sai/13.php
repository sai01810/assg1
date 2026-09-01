<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number:
    <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    if ($num % 2 == 0) {
        echo "<h3>$num is Even</h3>";
    } else {
        echo "<h3>$num is Odd</h3>";
    }
}
?>

</body>
</html>
