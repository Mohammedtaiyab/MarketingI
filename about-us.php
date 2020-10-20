<?php
require('admin/connection.inc.php');
$galy="select * from aboutgallery where Status='1'";
$resglry=mysqli_query($con,$galy);
require('header.php');
?>
	<!-- About Us -->
			<section id="about-us" class="about-us section">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="tabs-main center-nav">	
								<div class="nav-main">
									<!-- Tab Menu -->
									<ul class="nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#about" role="tab" data-toggle="tab"><i class="fa fa-user"></i><span>About US</span></a></li>
										<li role="presentation"><a href="#story" role="tab" data-toggle="tab"><i class="fa fa-pencil"></i><span>Our Story</span></a></li>
										<li role="presentation"><a href="#challanges" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i><span>Challanges</span></a></li>
									</ul>
								</div>
								<!--/ End Tab Menu -->
								<div class="tab-content">
									<!-- About Us Tab -->
									<div role="tabpanel" class="tab-pane fade in active" id="about">
										<div class="about-inner bg-white">
											<div class="row">
												<div class="col-md-5 col-sm-12 col-xs-12">
													<!-- About Image -->
													<div class="">
													<img src="images/aboutlogo.jpeg" alt="">
														<!-- Tab Video -->
														</a>
														<!--/ End tab video -->
													</div>
												</div>
												<!-- End About Image -->
												<div class="col-md-7 col-sm-12 col-xs-12">
													<div class="content">
														<h2 class="tab-title">About Company</h2>
														<p class="text"  style="text-align: justify">MarketingOJO is not a corporate but rather a community of focused entrepreneurs consisting of a strong-eyed team, willingly determined to build entrepreneurs out of the crowd, especially working for the youth of the nation. Besides helping in settling up your business, we provide you with the adrenaline rush of support, which will ignite your unique inner ideology, therefore routing towards stepping stone of success. Our optimistic eyes will focus on your business. Adding an expert mind to the strategies for your business will be laid down. The quality of the products and services won't be compromised at any cost.</p>
														<p class="text"></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--/ End About Us Tab -->
									<!-- Story Tab -->
									<div role="tabpanel" class="tab-pane fade in" id="story">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 bg-white">
												<div class="content">
													<h2 class="tab-title">Our Story</h2>
													<p class="text"  style="text-align: justify">An ordinary student with a 9-5 job was highly motivated by multiple businessmen out there, who encouraged him to do something in his life apart from his routine job. He was sure about his business idea and had his plan in hand. Luckily his friend approved after a deep thought. Fortunately, his brotherly friend proposed to be his business partner, both sitting on the same table of thoughts and decided to implement right after the pandemic cessation 2020. The quarantine time turned them into researchers. They explained to their parents and got it approved. Two passionate boys with a lot of courage stepped out of their comfort zone to set up their self-owned business and now they got their path. Today what we are, is only because of immense support and motivation from our parents, and of course our hard work with smart action without any doubt.</p>
												</div>
											</div>
										</div>
									</div>
									<!--/ End Story Tab -->
									
									<!-- challanges Tab -->
									<div role="tabpanel" class="tab-pane fade in" id="challanges">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 bg-white">
												<div class="content">
													<h2 class="tab-title">Our Challanges</h2>
													<p class="text" style="text-align: justify">Ever felt being on a roller coaster ride without actually sitting on one. Well, we felt whenever life threw multiple roller coasters rides on us, every time with a greater degree.
The difference was, we enjoyed and learned in its every twist-n-turn and hence, kept working on it, rather than leaving.
If you are wondering about, which rollercoaster rides are those? Let us showcase the hit ones.
As young entrepreneurs, the financial crisis was hard, ending us in the routine 9-5 job. Initially, due to a lack of social support, our morale scale tapered badly. A bag of responsibilities, like studies, exams, personal stress, and time barriers became eventually our friends in the long run.
After listening to the inner voice, screaming for success, and nourishment, the only way to feed our hunger was by accepting and turning the hassle into motivation for leading our dream.
</p>
												</div>
											</div>
										</div>
									</div>
									<!--/ End challanges Tab -->
								</div>
								<div>
								<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Gallery</h1>
								
							</div>
						</div>
								<div class="photo-gallery">
											<div class="row fix">		
												<?php
												 while($row=mysqli_fetch_assoc($resglry)){ ?>

												<div class="col-md-4 col-sm-6 col-xs-12 fix">
													<div class="single-gallery">
														<?php echo "<img src='images/".$row['Image']."' alt=''/>";?>
														<img src="images/post21.jpg" alt=""/>
														<a data-fancybox="gallery" href="images/post21.jpg"><i class="fa fa-search"></i></a>
														<a data-fancybox="gallery" 
														<?php echo "href='images/".$row['Image']."'"; ?> >

														<i class="fa fa-search"></i></a>
														<div class="caption">
															<p><?php echo $row['Caption']; ?></p>
														</div>
													</div>
												</div>		
											<?php } ?>
												
											</div>
											</div>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End About Us -->


			<?php
require('footer.php');
?>