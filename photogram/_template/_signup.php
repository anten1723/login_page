<?

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $error = signup($username, $password, $email, $phone);
    $signup = true;
}
?>


<?
if ($signup) {
    if (!$error) {
?>
        <main class="container">
            <div class="bg-light p-5 rounded mt-3">
                <h1>signup success</h1>
                <p class="lead">now you can login from <a href="/login.php">here</a>.</p>
            </div>
        </main>
    <?php
    } else {
    ?>
        <main class="container">
            <div class="bg-light p-5 rounded mt-3">
                <h1>signup failed</h1>
                <p class="lead">something went wrong, <?= $error ?> </p>
            </div>
        </main>
    <?
    }
} else {
    ?>

    <main class="form-signup">
        <form method="post" action="signup.php">
            <img class="mb-4" src="data:image/png;base64,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" alt="" height="80">
            <h1 class="h3 mb-3 fw-normal">Sign up here</h1>

            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="name@example.com">
                <label for="floatingInputusername">Username</label>
            </div>

            <div class="form-floating">
                <input name="phone" type="text" class="form-control" id="floatingInputusername" placeholder="name@example.com">
                <label for="floatingInputusername">Phone number</label>
            </div>

            <div class="form-floating">
                <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
<?php
}
