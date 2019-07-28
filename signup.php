<?php
include_once 'resource/Database.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sqlInsert = "INSERT INTO users (username, email, password, join_date)
        VALUES (:username, :email, :password, now())";

        $statement = $db->prepare($sqlInsert);
        $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));

        if ($statement->rowCount() == 1) {
            $result = "<p style='padding: 20px; color: green;'>Registration Successful!!</p>";
        }
    } catch (PDOException $exn) {
        $result = "<p style='padding: 20px; color: red;'>Oops! an error occurred: " . $exn->getMessage() . "</p>";
    }
}
?>


<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>

<body>
    <h2>User Authentication System </h2>
    <hr>

    <h3>Registration Form</h3>
    <hr>

    <?php if (isset($result)) echo $result; ?>

    <form method="post" action="">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="text" value="" name="email"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" value="" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" value="" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Signup"></td>
            </tr>
        </table>
    </form>

    <p><a href="index.php">Back to HomePage</a></p>
</body>

</html>