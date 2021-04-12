<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
        <p>An e-mail will be send to you with instructions on how to reset your password.</p>
            <form action="includes/reset-request.inc.php" method="POST">
            <input type="text" name="email" placeholder="Enter your email address...">
            <button type="submit" name="reset-request-submit">Receive new password by email</button>
        </form>
        <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty ($selector))  empty($validator)) {
            echo'Invalid Request';
        }
         {
         if (ctype_xdigit($validator) !== false && ctype_xdigit($selector)!== false) {
         ?>
         }
        }
        ?>
        </section>
    </div>
</main>

<?php

require "footer.php";
?>