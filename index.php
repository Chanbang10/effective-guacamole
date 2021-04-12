<?php
 include_once 'header.php';
 ?>
    <section class="index-intro">
        <h1>You are in for an experience!</h1>
        <p>Feel free to explore</p>
    </section>
    <?php
    if (isset($_SESSION["useruid"])) {
              echo "<p>Hello there".$_SESSION["useruid"]."</p>";
          }
          ?>
    <section class="index-categories">
        <h3>Some of the Categories</h3>
        <div>
         <h4>Reads</h4>
        </div>
        <div>
            <h4>Travels</h4>
        </div>
        <div>
            <h4>Music</h4>
        </div>
        <div>
            <h4>Lifestyle</h4>
        </div>
    </section>
 <?php
 include_once 'footer.php';
 ?>