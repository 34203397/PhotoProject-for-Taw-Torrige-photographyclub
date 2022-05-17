<?php
include '../config/header.php';
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$placeholder = $_SESSION['user'];
$sql = "SELECT `filepath`, `ImageID` FROM `entries`";
$result = $mysqli->query($sql);
?>

<!---->
<div class="container" id="gallery" >

<h2>Carousel</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">


  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php $row = $result->fetch_assoc(); ?>
    <div class="carousel-item active">
      <img src="<?php echo $row["filepath"] ?>" alt="<?php echo $row["ImageID"] ?>" >
    </div>

    <?php
    While ($row = $result->fetch_assoc())
    {
    ?>
    <div class="carousel-item">
      <img class="img-fluid" src="<?php echo $row["filepath"] ?>" alt="<?php echo $row["ImageID"] ?>" >
    </div>
    <?php
    }
    ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
