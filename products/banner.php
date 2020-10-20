

    <section class="hero-area">
                <div class="slider-one">
                    <!-- Single Slider --> 
                    <?php 
                    $banneritems=$banner->getData("banner");

                    foreach ($banneritems as $item) { 
$url="../admin/media/banner/".$item['Image'];?> 
         <div class="single-slider" style="background-image:url(
      <?php   echo "'".$url."'";?> )">      

 <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <!-- Slider Text -->
                                    <div class="slide-text">
                                        <h1><span class="short"><?php echo $item['Topic']; ?> </span><?php echo $item['Header']; ?> </h1>
                                <p class="animate__animated"><?php echo $item['Paragraph']; ?></p>
                                        <p></p>
                                        <div class="slide-btn"> 
                                      
                                            <a href="" class="btn primary">Shop now</a>
                                        </div>
                                                <div class="waves-block">
                                                    <div class="waves wave-1"></div>
                                                    <div class="waves wave-2"></div>
                                                    <div class="waves wave-3"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/ End SLider Text -->
                                </div>
                            </div>
                        </div>
                    </div>

                     <?php } ?>
                    <!--/ End Single Slider -->
     
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Slider -->
                </div>
            </section>
