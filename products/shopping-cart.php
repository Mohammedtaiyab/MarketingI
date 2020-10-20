<?php
require ('header.php');
?>
 <!-- shopping-cart start -->
    <section class="shopping-cart pt-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h3 class="title">Shopping Cart</h3>
                	<?php     if(!empty($_SESSION["cart"])){
                    $total = 0;
                    ?>
                    <div class="table-responsive pt-4 px-4 pb-2">
                        <table class="table mb-0">
                            <tbody>
                            	<?php 
          			
                    foreach ($_SESSION["cart"] as $key => $value) { ?>
                              <tr>
                                    <th scope="row">
                                        <div class="media">
                                            <img class="mr-5" src="assets/img/category/12.jpg" alt="img">
                                            <div class="media-body">
                                                <a href=""><?php echo $value["item_name"]; ?></a><br>
                                                
                                                <span class="price">₹<?php echo $value["product_price"]; ?></span>
                                              <!--   <div class="product-line-info">
                                                    <span class="label">Size:<span class="value">S</span></span>
                                                </div>
                                                <div class="product-line-info">
                                                    <span class="label">Color: <span class="value">White</span></span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="product-quantity p-0 m-0">
                                            <div class="quantity">
                                            	<span>Quantity : <?php echo $value["item_quantity"]; ?></span>
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <span class="product-price">₹
                                        <?php
                                     
                                         echo number_format($value["item_quantity"] * $value["product_price"], 2); ?>
                                         <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);?>
                                      </span></td>
                                    <td>
                                        <a href="?action=delete&id=<?php echo $value["product_id"]; ?>"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                    </td>
                                </tr>
                        <?php    }  ?>

                            </tbody>
                        </table>
                    </div>

                  
                </div>
                <div class="col-lg-4">
                    <ul class="list-group cart-summary rounded-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li><?php echo count($_SESSION["cart"]); ?> items</li>
                                <li>Shipping</li>
                            </ul>
                            <ul class="amount">
                                <li>₹<?php echo number_format($total, 2); ?></li>
                                <li>₹0.00</li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li>Total (tax excl.)</li>
                                <li>Taxes</li>
                            </ul>
                            <ul class="amount">
                                <li>₹<?php echo number_format($total, 2); ?><li>
                                <li>₹00.00<li>
                              
                            </ul>
                        </li>
                        <li class="list-group-item text-center"> <a href="check-out.html" class="btn btn-success mt-0">Proceed to checkout</a></li>
                    </ul>
<?php }?>
  <div class="continuie-btn">
                        <button class="btn btn-success mt-0 mb-3 mb-lg-0"> <i class="fas fa-chevron-left"></i> Continue shopping</button>

                    </div>
                    <div class="delivery-info mt-4">
                        <ul>
                            <li>
                                <img src="assets/img/icon/check.png" alt="icon"> Security policy (edit with Customer reassurance module)
                            </li>
                            <li>
                                <img src="assets/img/icon/track.png" alt="icon"> Delivery policy (edit with Customer reassurance module)
                            </li>
                            <li>
                                <img src="assets/img/icon/both-way.png" alt="icon"> Return policy (edit with Customer reassurance module)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shopping-cart end -->


<?php
require ('footer.php');
?>