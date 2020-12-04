<?php
require('admin/connection.inc.php');
$sql="select * from client where Status='1'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
require('header.php');
?>

    <section id="clients" class="clients section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="gtco-testimonials">
    <h2>Happy Clients</h2>
    <div class="owl-carousel owl-carousel1 owl-theme">
      <div>

 <?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){
  echo "<div class='card text-center'><img class='card-img-top' src='images/client/".$row['Logo']."' alt=''>";
  ?>
          <div class="card-body">
            <h5><?php echo $row['Company']; ?><br />
              <span> <?php echo $row['ReviewBy']; ?> </span></h5>
            <p class="card-text"><?php echo $row['Review']; ?></p>
          </div>
        </div>
      </div>
      <div>

<?php } ?>

  </div>
                    </div>
                </div>
            </section>
        
</div>


	<!-- Start Footer -->
			
<?php
require('footer.php');
?>