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