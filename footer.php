




			<!-- Start Footer -->
			<footer id="footer" class="footer dark">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12 ">
								<!-- Address Widget -->
								<div class="single-widget address logo f">
									<img src="images/logo.png" alt="logo">
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
							<div class="col-md-4 col-sm-6 col-xs-12">
							
								<div class="single-widget links">
									<h2>Quick Links</h2>
									<ul class="list">
										<li><a href="about-us.php"><i class="fa fa-angle-right"></i>ABOUT US</a></li>
										<li><a href="service.php"><i class="fa fa-angle-right"></i>OUR SERVICES</a></li>
										<li><a href="product/index.php"><i class="fa fa-angle-right"></i>PRODUCTS</a></li>
										<li><a href="ideanation.php"><i class="fa fa-angle-right"></i>IDEANATION</a></li>
										<li><a href="clients.php"><i class="fa fa-angle-right"></i>OUR CLIENTS</a></li>
										<li><a href="career.php"><i class="fa fa-angle-right"></i>CAREERS</a></li>
										<li><a href="contact.php"><i class="fa fa-angle-right"></i>CONTACT US</a></li>
									</ul>
								</div>
				
							</div>
					
							<div class="col-md-4 col-sm-6 col-xs-12">
								
								<div class="single-widget photo-gallery">
									<h2>Gallery</h2>
									<ul class="list">
											<?php
												 while($row2=mysqli_fetch_assoc($resglry2)){ ?>
										<?php echo "<li><a href='images/".$row2['Image']."'data-fancybox='photo'>";?>
										<?php echo "<img src='images/".$row2['Image']."' alt=''/>";?></a></li>
									<?php } ?>
										
								
									</ul>
								</div>
							
							</div>
						</div>
					</div> 
				</div> 
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								copyright
								<div class="copyright">
									<p>&copy; 2020 All Right Reserved.</p>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</footer>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		var words = ['MARKETING OJO', 'Eyes That Your Business Needs'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});
	</script>
				 <script type='text/javascript' style='display:none;' async>
__ez.queue.addFile('edmonton.html', '/detroitchicago/edmonton.webp?a=a&cb=0&shcb=32', true, [], true, false, false, false);
__ez.queue.addFile('jellyfish.html', '/porpoiseant/jellyfish.webp?a=a&cb=0&shcb=32', false, [], true, false, false, false);
</script>

<script>var _audins_dom="azmind_com",_audins_did=104629;__ez.queue.addDelayFunc("audins.js","__ez.script.add", "../../../../go.ezoic.net/detroitchicago/audins3317.js?cb=187-0");</script><noscript><div style="display:none;"><img src="../../../../pixel.quantserve.com/pixel/p-31iz6hfFutd166b69.gif?labels=Domain.azmind_com,DomainId.104629" border="0" height="1" width="1" alt="Quantcast"/></div></noscript><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&amp;c2=20015427&amp;cv=2.0&amp;cj=1"/></noscript>

			<!-- Jquery -->
			<script src="js/jquery.min.js" type="text/javascript"></script>
			<!-- Bootstrap JS -->
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
			<!-- Modernizer JS -->
			<script src="js/modernizr.min.js" type="text/javascript"></script>
			<!-- Tromas JS -->
			<script src="js/tromas.js" type="text/javascript"></script>
			<!-- Tromas Plugins -->
			<script src="js/theme-plugins.js" type="text/javascript"></script>
			<!-- Google Map JS -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
			<script src="js/gmap.min.js"  type="text/javascript" ></script>
			<!-- Main JS -->
			<script src="js/main.js" type="text/javascript"></script>
				<script type="text/javascript">
			$(document).ready(function () {
				$('.first').click(function () {
					$(this).toggleClass('second');

				});

			});
				$(document).ready(function () {
				$('.mystyle').click(function () {
					$(this).toggleClass('my');

				});

			});
		</script>
		<script>
<script>
document.getElementById("services").onload = function() { $('.service-nav').toggleClass('active');};

function myFunction() {
 
}
</script>
</script>
<script type="text/javascript">
		(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();



	</script>
	<script type="text/javascript">
				var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
			</script>
		</div>
    </body>
</html>