<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
</head>

<body>
    <h2>User Registration</h2>
    <form action="http://192.168.254.159:8080/pcup-api/signup.php" method="POST">
        <label for="user_name">Username:</label>
        <input type="text" name="user_name" required><br><br>

        <label for="user_password">Password:</label>
        <input type="password" name="user_password" required><br><br>

        <label for="user_email">Email:</label>
        <input type="email" name="user_email" required><br><br>

        <label for="user_phone">Phone:</label>
        <input type="text" name="user_phone" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>

</html>