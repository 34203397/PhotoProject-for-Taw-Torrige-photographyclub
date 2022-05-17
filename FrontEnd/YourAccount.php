<?php
//including the header for webdisplay and the details to access the database
include '../config/header.php';
include '../Config/AccessDatabase.php';
include '../Admin/youraccountproccess.php';
?>
<div class="container" id="usrdet">
  <h2>Your detials: </h2>
  <p>Remember to fill in all fields even if you want them to be the same:</p>
  <form action="../Admin/AccountDetailProcess.php" method="post">
    <div class="form-group">
      <label for="Name">Username:</label>
      <input type="Name" class="form-control" id="Name" placeholder="<?php echo $row["Name"]?>" name="Name">
    </div>
    <div class="form-group">
      <label for="TelNo">Telephone Number:</label>
      <input type="text" class="form-control" id="Tel" placeholder="<?php echo $row["TelNo"]?>" name="TelNo">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="Address" placeholder="<?php echo $row["Address"]?>" name="Address">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="Password" placeholder="<?php echo $row["Password"]?>" name="Password">
    </div>
    <button type="submit" value="update" class="btn btn-dark" name="update">Submit</button>
  </form>
  <div>
    <form action="../Admin/delfile.php" method="post" id="del">
      <button type="submit" value="submit" class="btn btn-dark" name="delete">Delete Account</button>
    </form>
  </div>
</div>
