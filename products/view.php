 <?php
 $detail=mysqli_query($con,"select * from product");
while($row=mysqli_fetch_assoc($detail)){ 
    $categories_id=$row['Categories_id'];
        $name=$row['Name'];
        $mrp=$row['mrp'];
        $price=$row['Price'];
        $qty=$row['qty'];
        $min=$row['Min'];
        $max=$row['Max'];
        $short_desc=$row['Short_desc'];
        $description=$row['Description'];
        $meta_title=$row['Meta_title'];
        $meta_desc=$row['Meta_desc'];
        $meta_keyword=$row['Meta_keyword'];
        $dealer=$row['Dealer'];
        $image=$row['Image'];
?>
    <div class="modal fade"
    <?php echo  "id='p".$row['ID']."'";?>
    tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog products-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-syncing mb-20">
                        <div class="single-product">
                            <div class="product-thumb">
                                 
                                <?php  $image="<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                                <?php echo  "<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                            </div>
                        </div>
                          <?php
                          $pid=$row['ID'];
                            $imgs=mysqli_query($con,"select * from gallery where Product_Id='$pid'");
                              while($row=mysqli_fetch_assoc($imgs)){?>
                                     <div class="single-product">
                            <div class="product-thumb">
                         <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                            </div>
                        </div>
                            <?php } ?>

                    </div>

                    <div class="product-nav slick-arrow-style">
                               <div class="single-product">
                            <div class="product-thumb">
                                      <a href="javascript:void(0)">
                            <?php echo  $image; ?>
                            </a>
                            </div>
                        </div>
                           <?php
                           $img=mysqli_query($con,"select * from gallery where Product_Id='$pid'");
                              while($row=mysqli_fetch_assoc($img)){?>
                                     <div class="single-product">
                            <div class="product-thumb">
                                  <a href="javascript:void(0)">
                         <?php echo  "<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                     </a>
                            </div>
                        </div>
                            <?php } ?>
                    </div>
                </div>
                            <div class="col-md-6 mt-5 mt-md-0">
                                <div class="product-details-info">
                                    <h2 class="title"><?php echo $name; ?></h2>
                                    <h4 class="sub-title">Short Description: <?php echo $short_desc; ?></h4>
                                    <div class="star-content">
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                    
                                    </div>
                                    <div class="product-info">
                                        <span class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$mrp; ?></del>
                                                <span class="new-price"><?php echo "₹".$price; ?></span>
                                        </span>
                                        <span class="badge badge-danger">Save 20%</span>
                                        <div class="description">
                                            <p>Description :
                                               <?php echo $description; ?>
                                            </p>
                                        </div>
                                    </div>
                                   
                                   <!--  <div class="product-quantity">
                                        <h3 class="title">Quantity</h3>
                                        <div class="quantity">
                                            <input type="number" min="1" max="9" step="1" value="1" />
                                            <button class="btn btn-primary add-to-cart" data-toggle="modal" data-target="#exampleModalCenter3" type="submit">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    Add to cart
                                                </button>
                                        -->

                                      <?php echo "<form method='post' action='?action=add&id=".$pid."'"; ?>>

                                            <input type="hidden" name="hidden_name" value=<?php echo "'".$name."'" ?> >
                                            <input type="hidden" name="hidden_price" value=<?php echo "'".$price."'" ?> >
                                            <div class="product-quantity">
                                        <h3 class="title">Quantity</h3>
                                        <div class="quantity">
                                            <input type="number" name="quantity" min="1" max="9" step="1" value="1" />
                                      
                                           <button class="btn btn-primary add-to-cart" name="add" type="submit">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    Add to cart
                                                </button>
                                                    </div>
                                    </div>
                                    </form>

                                    <div class="product-social-links">
                                        <div class="social-sharing">
                                            <span>Share</span>
                                            <ul>
                                                <li>
                                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="googleplus"><i class="fab fa-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="whish-list">
                                        <a href="#"> <i class="far fa-heart"></i> Add to wishlist </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>