<?php
session_start();
if (isset($_SESSION['user']))
{
?>
  <!DOCTYPE html>
  <html lang="en">
  <!--Bootstrap header-->
  <head>
    <title>PhotoClub</title>
    <?php include 'Bootstrap.php';?>
  </head>
  <body>
  <header>
  <div class="jumbotron text-center" id="headJumbo">
    <h1>Taw&Torridge Photography Club</h1>
    <p>The Taw&Torrigge Club for photogrophers</p>
  </div>
  <!--Navbar-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../FrontEnd/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="upload.php">PhotoUpload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="YourAccount.php">MyAccount</a>
        </li>
      </li>
      <?php
      if(isset($_SESSION['Complete']))
      {
        include '../Config/adminnavs.php';
      }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="../Admin/logoutproccess.php">Logout</a>
      </li>
      </ul>
    </div>
  </nav>
  </header>
<?php
}
else
{
  header('location: ../FrontEnd/login.php');
}
?>
</body>
</html>
