<?php include 'inc/header.php';?>
    <main class="login-container">
        <form class="form-container" accept-charset="UTF-8" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1>Login to <?php echo SITE_TITLE ?></h1>
            <label class="label-login">
                Username
            </label>
            <div class="field-wrap-login">
                <input class="input-login" type="text" required autocomplete="off" name="user"/>
            </div>
            <label class="label-login">
                Password
            </label>
            <div class="field-wrap-login">
                <input class="input-login" type="password" required autocomplete="off" name="password"/>
            </div>
            <input type="submit" value="Login" class="button-login" name="login"/>
        </form>
    </main>
    <footer>
        <?php displayMessage();?>
    </footer>
</body>
</html>