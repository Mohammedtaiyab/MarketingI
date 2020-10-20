

    <section class="product-tab-section py-60 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills product-nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab1" data-toggle="pill" href="#product-pills1" role="tab" aria-controls="product-pills1">New Arrival</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab2" data-toggle="pill" href="#product-pills2" role="tab" aria-controls="product-pills2">OnSale </a>
                        </li>
                     
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="product-pills1" role="tabpanel" aria-labelledby="product-tab1">
                            <div class="product-slider slick-arrow-style">
                                <?php 
$productitems=$product->getData();
   $i = 0; 
    foreach($productitems as $item): 
        if($i >= 5) {break;}else{?>


                                <div class="product-item">
                     
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                    <span class="offer discount-offer">
                        <?php
                            $o=$item['mrp'];
                            $p=$item['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."% off";
                        ?>

                    </span>
             <?php echo "<a href='product-detail.php?id=".$item['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$item['Image']."' alt='product-thumb-nail' />" ?>
        </a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal"

                                              <?php  echo "data-target='#p".$item['ID']."'"; ?>>
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info position-relative">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <?php echo "<a href='product-detail.php?id=".$item['ID']."'>"; ?><?php echo $item['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$item['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$item['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
  <?php $i++; } endforeach;?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-pills2" role="tabpanel" aria-labelledby="product-tab2">
                            <div class="product-slider slick-arrow-style">
                                  <?php 

         $i = 0; 
    foreach( array_reverse($productitems) as $item): 
        if($i >= 5) {break;}else{?>


                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                      
                    <span class="offer discount-offer">
                        <?php
                            $o=$item['mrp'];
                            $p=$item['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."%off";
                        ?>

                    </span>
                <?php echo "<a href='product-detail.php?id=".$item['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$item['Image']."' alt='product-thumb-nail' />" ?>
        </a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                  <?php echo  "<form method='post' action='index.php?action=add&id=".$item["ID"]."'>" ?>  
                      
                               <input type="hidden" name="quantity" value="1" />  
                          <?php echo    "<input type='hidden' name='hidden_name' value='".$item["Name"]."'>"; ?>
                            <?php echo    "<input type='hidden' name='hidden_price' value='".$item["Price"]."'> </form>"; ?>

                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to Cart">Add to Cart</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" 
                                              <?php  echo "data-target='#p".$item['ID']."'"; ?>>
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info position-relative">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <?php echo "<a href='product-detail.php?id=".$item['ID']."'>"; ?><?php echo $item['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$item['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$item['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
  <?php $i++; } endforeach;?>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab end -->