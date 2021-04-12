<?php
 include_once 'header.php';
 ?>
    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name....">
        <input type="text" name="email" placeholder="Email....">
        <input type="text" name="uid" placeholder="Username....">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
        </form>
        <a href="reset-password.php">Fogot your password?</a>
</div>
        <?php
        if (isset($_GET["error "])) {
                if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                        echo"<p>Incorrect information given!</p>";
                }               
                ?>
                </section>

                <?php
             include_once 'footer.php';
        }
         ?>