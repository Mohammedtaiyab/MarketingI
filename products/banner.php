<!-- Hero section -->
<section class="hero-section">
<div class="hero-slider owl-carousel">
	  <?php 
                    $banneritems=$banner->getData("banner");

                    foreach ($banneritems as $item) { 
$url="../images/banner/".$item['Image'];?> 

<div class="hs-item set-bg" data-setbg="<?php echo $url;?>">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7">
<span><?php echo $item['Topic']; ?></span>
<h2><?php echo $item['Header']; ?> </h2>
<p><?php echo $item['Paragraph']; ?></p>
<a href="category.php" class="site-btn sb-white">DISCOVER</a>
</div>
</div>
<div class="offer-card text-white">
<span>OFF</span>
<h2>25%</h2>

<p>SHOP NOW</p>
</div>
</div>
</div>


       <?php } ?>
</div>
<div class="container">
<div class="slide-num-holder" id="snh-1"></div>
</div>
</section>
<!-- Hero section end -->