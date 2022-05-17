<head>
<?php
include '../Config/Bootstrap.php';
?>
</head>
<div class="container-fluid text-center" id="LogForum">
  <h2>Login</h2>
  <p>Enter your details to login below. </p>

  <form action="../Admin/proccesslogin.php" method="post">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" name="username">
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password">
    </div>
    <button type="submit" value="submit" class="btn btn-dark">Submit</button>
  </form>
  <div>
  <form action="create.php">
    <button type="submit" value="submit" class="btn btn-dark">Create Account</button>
  </form>
  </div>
</div>
