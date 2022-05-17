<?php
session_start();
include '../Config/Bootstrap.php';
?>
<div class="container" id="create">
  <h2>Your detials: </h2>
  <form action="../Admin/createprocess.php" method="post">
    <div class="form-group">
      <label for="Name">Username:</label>
      <input type="Name" class="form-control" id="Name" placeholder="Your Name here: " name="Name">
    </div>
    <div class="form-group">
      <label for="TelNo">Telephone Number:</label>
      <input type="text" class="form-control" id="Tel" placeholder="Your Phone Number here: " name="TelNo">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="Address" placeholder="Your Address here: " name="Address">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="Password" placeholder="Your Password here: " name="Password">
    </div>
    <button type="submit" value="create" class="btn btn-dark" name="create">Submit</button>
  </form>
</div>
