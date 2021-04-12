<?php
 include_once 'header.php';
 ?>

    <section class="signup-form">
        <h2>Log in</h2>
        <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Email/Username....">
        <input type="password" name="pwd" placeholder="Password....">
        <button type="submit" name="submit">Log In</button>
        </form>
</div>
<?php
        if (isset($_GET["error "])) {
                if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill all fields</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                        echo"<p>Select a Proper Username</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                        echo"<p>Use a Proper Username</p>";
                }
                else if ($_GET["error"] == "password don't match") {
                        echo"<p>Passwords doesn't match!!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                        echo"<p>Something went wrong. Try again.</p>";
                }
                else if ($_GET["error"] == "oops!usenametaken") {
                        echo"<p>Already Taken.</p>";
                }
                else if ($_GET["error"] == "none") {
                        echo"<p>You have signed up.</p>";
                }
                ?>
        </section>
        <?php
        include_once 'footer.php';
        }
        ?>