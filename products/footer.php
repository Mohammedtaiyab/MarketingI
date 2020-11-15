<?php 
require('loginmodel.php');
?>
	<!-- Start Footer -->
			<footer id="footer" class="footer dark">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12 ">
								<!-- Address Widget -->
								<div class="single-widget address logo f"><a href="../index.php">
									<img src="../images/logo.png" style="width: 10rem;" alt="logo"></a>
									<p>From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.</p>
									<ul class="list">
										<li><i class="fa fa-phone"></i>Phone:- +91 9136773853</li>
										<li><i class="fa fa-envelope"></i>Email:- <a href="">Info@MarketingOJO.com</a></li>
										<li><i class="fa fa-map-o"></i>Address:- Pune, Maharastra</li>
									</ul>		
									<ul class="social">
									<li><a href="https://www.facebook.com/marketingojo"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.instagram.com/marketingojo/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/919136773853"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							
							</div>	
							<div class="col-md-3 col-sm-6 col-xs-12">

							
								<div class="single-widget links">
									<h2>Quick Links</h2>
									<ul class="list">
										<li><a href="../about-us.php"><i class="fa fa-angle-right"></i>ABOUT US</a></li>
										<li><a href="../service.php"><i class="fa fa-angle-right"></i>OUR SERVICES</a></li>
										<li><a href="../ideanation.php"><i class="fa fa-angle-right"></i>IDEANATION</a></li>
										<li><a href="../clients.php"><i class="fa fa-angle-right"></i>OUR CLIENTS</a></li>
										<li><a href="../career.php"><i class="fa fa-angle-right"></i>CAREERS</a></li>
										<li><a href="../contact.php"><i class="fa fa-angle-right"></i>CONTACT US</a></li>
									</ul>
								</div>
				
							</div>
						<div class="col-md-2 col-sm-6 col-xs-12">
								<div class="single-widget links">
									<h2>Categories</h2>
									<ul class="list">
										<?php 
$productlist=$product->Productcategory();
   $i = 0; 
    foreach($productlist as $item): 
        if($i >=7) {break;}else{
        	$categoryname=$category->getdatabyId($item['Categories_id']);

 foreach($categoryname as $name): ?>

<?php echo "<li><a href='category.php?id=".$name['id']."'><i class='fa fa-angle-right'></i>".$name['categories']."</a></li>";?>



  <?php endforeach; $i++; } endforeach;?>
								
									</ul>
								</div>

						</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="single-widget links">
									<h2>Our Polices</h2>
									<ul class="list">
								<li><a href=""><i class="fa fa-angle-right"></i>Complain</a></li>
								<li><a href=""><i class="fa fa-angle-right"></i>FAQs</a></li>
								<li><a href=""><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
								<li><a href=""><i class="fa fa-angle-right"></i>Refund Policy</a></li>
								<li><a href=""><i class="fa fa-angle-right"></i>Terms of Service</a></li>
									</ul>
								</div>
							
							</div>
						</div>
					</div> 
				</div> 
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 text-white">
								copyright
								<div class="copyright">
									<p>&copy; 2020 All Right Reserved.</p>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>






<script type="text/javascript">
	 function checkrideo(){
     var radios = document.getElementsByName("addr");

     for (var i = 0, len = radios.length; i < len; i++) {
          if (radios[i].checked) {
          		document.getElementById('paymentform').submit();
              return true;
          }
     }
window.alert("You need to choose an option!");
     return false;
 }
	function functionclick(){
	  var x =   document.getElementById('addressform');
	   if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
};

$(document).ready(function(){

	
	$('.dec').on('click', function(ev) {
	
     $currObj = $(ev.currentTarget);
    var currQCount = getCurrQCount($currObj);
   //alert($_SESSION["shopping_cart"][sec]['quantity']);    
    if(currQCount<=1){
    	currQCount++;
    }

  updateDataless($currObj, currQCount);
   });

	 $('.inc').on('click', function(ev) {
	
		 $currObj = $(ev.currentTarget);
		var currQCount = getCurrQCount($currObj);

	updateData($currObj, currQCount);
	
	 });


	function getCurrQCount($currObj){
		return $currObj.siblings(".quantity").val();
	}
	// function getsecid($currObj){
	// 	var secid= $currObj.siblings(".sessioncartid").val();
	// 	alert("here" + secid);
	// 	return $currObj.siblings(".sessioncartid").val();
	// }
	function updateData($currObj, currQCount){
   
		$currObj.siblings(".quantity").val(currQCount);
		var $parentObj = $currObj.closest(".item-row");
		var itemPrice = $parentObj.find(".item_price").attr("data-price");
		currQCount++;
		var itemCost = Number(itemPrice) * currQCount;
		$parentObj.find(".item-cost-val").text(itemCost);

		var subTotal = getSubTotal();
		var vatAmount = getVatAmount();
		var totalCost = subTotal + vatAmount;
		$("#subtotal").val(subTotal);
		$("#total_vat").text(vatAmount);
		$("#total_cost").text(subTotal);
	 // $(".totalbill input").val=subTotal;
	}
  function updateDataless($currObj, currQCount){
   
    $currObj.siblings(".quantity").val(currQCount);
    var $parentObj = $currObj.closest(".item-row");
    var itemPrice = $parentObj.find(".item_price").attr("data-price");
currQCount--;
    var itemCost = Number(itemPrice) * currQCount;
    $parentObj.find(".item-cost-val").text(itemCost);

    var subTotal = getSubTotal();
    var vatAmount = getVatAmount();
    var totalCost = subTotal;
    $("#subtotal").val(subTotal);
    $("#total_vat").text(vatAmount);
    $("#total_cost").text(subTotal);
   // $(".totalbill input").val=subTotal;
  }
	function getSubTotal(){
		var subTotal = 0;
		$(".item-cost-val").each(function() {
			subTotal+= Number($(this).text());
		});
		
		return subTotal;
	}

	function getVatAmount(){
		var vatPercentage = 0.2;
		return vatPercentage * getSubTotal();
	}
if(!loggedin){
// show modal
    $('#loginModal').modal('show');
}

});

</script>








<script type="text/javascript">
	$(document).ready(function(){

 $(".quantity").change(function(){
    alert("The text has been changed.");
  });
});
</script>
<script type='text/javascript' style='display:none;' async>
__ez.queue.addFile('edmonton.html', '/detroitchicago/edmonton.webp?a=a&cb=0&shcb=32', true, [], true, false, false, false);
__ez.queue.addFile('jellyfish.html', '/porpoiseant/jellyfish.webp?a=a&cb=0&shcb=32', false, [], true, false, false, false);
</script>

<script>var _audins_dom="azmind_com",_audins_did=104629;__ez.queue.addDelayFunc("audins.js","__ez.script.add", "../../../../go.ezoic.net/detroitchicago/audins3317.js?cb=187-0");</script><noscript><div style="display:none;"><img src="../../../../pixel.quantserve.com/pixel/p-31iz6hfFutd166b69.gif?labels=Domain.azmind_com,DomainId.104629" border="0" height="1" width="1" alt="Quantcast"/></div></noscript><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&amp;c2=20015427&amp;cv=2.0&amp;cj=1"/></noscript>
			<!-- Jquery -->
			<script src="../js/jquery.min.js" type="text/javascript"></script>
			<!-- Bootstrap JS -->
			<script src="../js/bootstrap.min.js" type="text/javascript"></script>
			<!-- Modernizer JS -->
			<script src="../js/modernizr.min.js" type="text/javascript"></script>
			<!-- Tromas JS -->
			<script src="../js/tromas.js" type="text/javascript"></script>
			<!-- Tromas Plugins -->
			<script src="../js/theme-plugins.js" type="text/javascript"></script>
			<!-- Google Map JS -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
			<script src="js/gmap.min.js"  type="text/javascript" ></script>
			<!-- Main JS -->
			<script src="../js/main.js" type="text/javascript"></script>
		<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
    <script src="login/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="login/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="login/assets/js/login-register.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>
		</div>
		<script type="text/javascript">
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

</script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>