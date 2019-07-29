<?php
$page_title = "User Authentication - Homepage";

include_once "partials/header.php";

?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="display-4 mt-5 text-info">User Authentication System </h1>
            <div class="mt-4">
                <p class="lead">A beautiful responsive and Modern Authentication System in PHP</p>
                <?php if (!isset($_SESSION['username'])) : ?>
                    <P class="lead">You are currently not Signed In Ogbeni <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a> Not yet a member? <a href="signup.php">Signup</a> </P>
                <?php else : ?>
                    <p class="lead">You are logged in as <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<?php include_once "partials/footer.php"; ?>
</body>

</html>