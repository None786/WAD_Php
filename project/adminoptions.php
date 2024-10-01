<div class="container-fluid">
  <?php
  session_start();
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
  ?>
    <div class="row bg-dark text-white p-3">
      <div class="col-sm-3">
        <center><h5>Admin Options</h5></center>
      </div>
        <div class="col-sm-3">
        <center><a href="Adminpannel/admin-view.php" class="btn btn-danger float-left">Admin pannel</a></center>
      </div>
        <div class="col-sm-3">
        <center><a href="Adminpannel/addpost.php" class="btn btn-danger float-left">Add post</a></center>
        </div>
        <div class="col-sm-3">
        <center><a href="Adminpannel/logout.php" class="btn btn-danger float-none">Logout</a></center>
        </div>
    </div>
  <?php
  }
  ?>
  <!-- Rest of your page goes here -->
</div>
