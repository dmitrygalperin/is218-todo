<?php include 'views/header.php'; ?>
    <main role="main">
      <?php
        if(isset($_SESSION['logged_in'])) {
          require './dashboard/index.php';
        } else {
          require './views/home.php';
        }
      ?>
    </main>
<?php include 'views/footer.php'; ?>
