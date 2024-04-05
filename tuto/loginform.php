<?php include('header.php'); ?>

<section class="form">
 <form method="post">
  <input type="text" placeholder="Enter email" name="email">
  <input type="password" placeholder="Enter password" name="pass">
  <?php include('login.php'); ?>
  <button type="submit" name="register">REGISTER</button>
 </form>
</section>


<?php include('footer.php'); ?>