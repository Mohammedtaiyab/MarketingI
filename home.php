
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
		<meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
		<meta name='copyright' content='MarketingOJO'>	
		
		<!-- Title Tag -->
        <title>Marketing OJO</title>
		
			<link rel="icon" type="image/png" href="images/favicon.png">	
		
        <!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Tromas CSS -->
		<link rel="stylesheet" href="css/theme-plugins.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">	
		
		<!-- Tromas Color -->
		<link rel="stylesheet" href="css/skin/skin1.css">
		<link rel="stylesheet" href="#" id="tromas">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173650006-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173650006-1');
</script>	
    </head>
    <style type="text/css">
    	 	@media screen and (max-width: 600px) {
			.logol img{
 				 width: 65%;
			    margin-left: 20%;
 				}
 				.logo img{
				width: 60%;

			}
				.address img{
					width: 25%;
				}
				.f{
					   width: 287px;
				}
			}
			.slicknav_nav a{
				    text-transform: uppercase;
			}
			.logo img{
				 width: 10rem;
  					height: auto;
			}
			.address img{
					width: 15rem;
					height: auto;
				}

.table {
  border-spacing: 0 0.85rem !important;
}

.table .dropdown {
  display: inline-block;
}

.table td,
.table th {
  vertical-align: middle;
  margin-bottom: 10px;
  border: none;
}

.table thead tr,
.table thead th {
  border: none;
  font-size: 12px;
  letter-spacing: 1px;
  text-transform: uppercase;
  background: transparent;
}

.table td {
  background: #fff;
}

.table td:first-child {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.table td:last-child {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.avatar {
  width: 2.75rem;
  height: 2.75rem;
  line-height: 3rem;
  border-radius: 50%;
  display: inline-block;
  background: transparent;
  position: relative;
  text-align: center;
  color: #868e96;
  font-weight: 700;
  vertical-align: bottom;
  font-size: 1rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.avatar-sm {
  width: 2.5rem;
  height: 2.5rem;
  font-size: 0.83333rem;
  line-height: 1.5;
}

.avatar-img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.avatar-blue {
  background-color: #c8d9f1;
  color: #467fcf;
}

table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > td:first-child:before,
table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > th:first-child:before {
  top: 28px;
  left: 14px;
  border: none;
  box-shadow: none;
}

table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
  padding-left: 48px;
}

table.dataTable > tbody > tr.child ul.dtr-details {
  width: 100%;
}

table.dataTable > tbody > tr.child span.dtr-title {
  min-width: 50%;
}

table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
  padding: 0.75rem 1rem 0.125rem;
}

div.dataTables_wrapper div.dataTables_length label,
div.dataTables_wrapper div.dataTables_filter label {
  margin-bottom: 0;
}

@media (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    -ms-flex-pack: center !important;
    justify-content: center !important;
    margin-top: 1rem;
  }
}

.btn-icon {
  background: #fff;
}
.btn-icon .bx {
  font-size: 20px;
}

.btn .bx {
  vertical-align: middle;
  font-size: 20px;
}

.dropdown-menu {
  padding: 0.25rem 0;
}

.dropdown-item {
  padding: 0.5rem 1rem;
}

.badge {
  padding: 0.5em 0.75em;
}

.badge-success-alt {
  background-color: #d7f2c2;
  color: #7bd235;
}

.table a {
  color: #212529;
}

.table a:hover,
.table a:focus {
  text-decoration: none;
}

table.dataTable {
  margin-top: 12px !important;
}

.icon > .bx {
  display: block;
  min-width: 1.5em;
  min-height: 1.5em;
  text-align: center;
  font-size: 1.0625rem;
}

.btn {
  font-size: 0.9375rem;
  font-weight: 500;
  padding: 0.5rem 0.75rem;
}

.avatar-blue {
  background-color: #c8d9f1;
  color: #467fcf;
}

.avatar-pink {
  background-color: #fcd3e1;
  color: #f66d9b;
}

    </style>
    <body id="bg" style="">
		<div id="layout" class="">
		
		
			<!-- Start Header -->
			<header id="header" class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index.html"><img src="images/logo2.png" ></a>
							</div>
							<!--/ End Logo -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<!-- Single Widget -->
								<div class="single-widget">
									<i class="fa fa-clock-o"></i>
								<h4>Timings</h4>
									<p>24X7</p>
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget">
									<i class="fa fa-envelope"></i>
									<h4>Email address</h4>
									<p><a href="mailto:info@marketingojo.com">info@MarketingOJO.com</a></p>
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget">
									<i class="fa fa-phone"></i>
									<h4>Phone</h4>
									<p>+91 9136773853</p>
								</div>
								<!--/ End Single Widget -->
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
				<!-- Header Inner -->
				<div class="header-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="nav-area">
									<!-- Main Menu -->
									<nav class="mainmenu">
										<div class="collapse navbar-collapse">	
											<ul class="nav navbar-nav">
												<li ><a href="index.html">Home</a></li>
												<!-- <li><a href="about-us.html">About Us</a></li>
												<li><a href="service.html">Services</a></li>
												<li class="active"><a href="customize.html">Products</a></li>
												<li><a href="ideanation.html">IdeaNation</a></li>
												<li><a href="clients.html">Our Clients</a></li>		
												<li><a href="career.php">Careers</a></li>	 -->
												<li><a href=""><i class="fa fa-user"></i><?php echo $_SESSION['username'];?></a><ul class="drop-down">
																<li><a href="home.php?logout='1'" style="color: red;">Logout</a></li>
																
															</ul></li>										
										
											</ul>
										</div>
									</nav>
									<!--/ End Main Menu -->
									<!-- Social -->
									<ul class="social">
										<li><a href="https://www.facebook.com/marketingojo"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.instagram.com/marketingojo/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/919136773853"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
									</ul>
									<!--/ End Social -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Header Inner -->
			</header>
			<!--/ End Header -->
	
<div class="container">
  <div class="row py-5">
    <div class="col-12">
      <table id="example" class="table table-hover responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Phone Number</th>
            <th>Profession</th>
            <th>Date of Birth</th>
            <th>App Access</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        	<?php

    $link=mysqli_connect('localhost','root','','ojoadmin');
    //mysql_select_db("test2",$link);
// Check linkection
if ($link->connect_error) {
die("linkection failed: " . $link->connect_error);
}
$sql = "SELECT * FROM client";
$result = $link->query($sql);
if ($result->num_rows > 0) {
// output data of each row</i>
while($row = $result->fetch_assoc()) {
echo "<tr><td>" 
. $row["pname"]
. "</td><td>" 
. $row["dname"] 
. "</td><td>"
. $row["description"]

. "</td><td><a title='Click here to download in file.' 
href='download.php?id={$row['file']}'> "?><i class="fa fa-download"></i> <?php "</a></td></tr>" ;

}
echo "</table>";
} else { echo "0 results"; }
$link->close();
?>
          <tr>
            <td>
              <a href="#">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-blue mr-3">EB</div>

                  <div class="">
                    <p class="font-weight-bold mb-0">Ethan Black</p>
                    <p class="text-muted mb-0">ethan-black@example.com</p>
                  </div>
                </div>
              </a>
            </td>
            <td>(784) 667 8768</td>
            <td>Designer</td>
            <td>09/04/1996</td>
            <td>
              <div class="badge badge-success badge-success-alt">Enabled</div>
            </td>
            <td>
              <div class="dropdown">
                <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                        title="Actions"></i>
                    </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                  <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-pink mr-3">JR</div>

                  <div class="">
                    <p class="font-weight-bold mb-0">Julie Richards</p>
                    <p class="text-muted mb-0">julie_89@example.com</p>
                  </div>
                </div>
              </a>
            </td>
            <td> (937) 874 6878</td>
            <td>Investment Banker</td>
            <td>13/01/1989</td>
            <td>
              <div class="badge badge-success badge-success-alt">Enabled</div>
            </td>
            <td>
              <div class="dropdown">
                <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                        title="Actions"></i>
                    </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                  <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row py-5">
    <div class="col-12">
      <h6 class="small text-danger">Currently I'm just experimenting with this stuff, so there might be lots of redundant CSS.</h6>
    </div>
  </div>
</div>
			
			<!--/ End Services -->
			<!-- Start Footer -->
		
			<!-- Start Footer -->
				<!-- Start Footer -->
			<footer id="footer" class="footer dark">
			<!-- 	<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12 ">
								
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
								/ End Address Widget
							</div>	
							<div class="col-md-4 col-sm-6 col-xs-12">
							
								<div class="single-widget links">
									<h2>Quick Links</h2>
									<ul class="list">
										<li><a href="about-us.html"><i class="fa fa-angle-right"></i>ABOUT US</a></li>
										<li><a href="service.html"><i class="fa fa-angle-right"></i>OUR SERVICES</a></li>
										<li><a href="customize.html"><i class="fa fa-angle-right"></i>PRODUCTS</a></li>
										<li><a href="ideanation.html"><i class="fa fa-angle-right"></i>IDEANATION</a></li>
										<li><a href="clients.html"><i class="fa fa-angle-right"></i>OUR CLIENTS</a></li>
										<li><a href="career.html"><i class="fa fa-angle-right"></i>CAREERS</a></li>
										<li><a href="contact.html"><i class="fa fa-angle-right"></i>CONTACT US</a></li>
									</ul>
								</div>
				
							</div>
					
							<div class="col-md-4 col-sm-6 col-xs-12">
								
								<div class="single-widget photo-gallery">
									<h2>Customise Products</h2>
									<ul class="list">
										<li><a href="images/post78.jpg" data-fancybox="photo"><img src="images/post78.jpg" alt="#"></a></li>
										<li><a href="images/post36.jpg" data-fancybox="photo"><img src="images/post36.jpg" alt="#"></a></li>
										<li><a href="images/post21.jpg" data-fancybox="photo"><img src="images/post21.jpg" alt="#"></a></li>
										<li><a href="images/post47.jpg" data-fancybox="photo"><img src="images/post47.jpg" alt="#"></a></li>
										<li><a href="images/post56.jpg" data-fancybox="photo"><img src="images/post56.jpg" alt="#"></a></li>
										<li><a href="images/post68.jpg" data-fancybox="photo"><img src="images/post68.jpg" alt="#"></a></li>
										<li><a href="images/post63.jpg" data-fancybox="photo"><img src="images/post63.jpg" alt="#"></a></li>
										<li><a href="images/post36.jpg" data-fancybox="photo"><img src="images/post36.jpg" alt="#"></a></li>
								
									</ul>
								</div>
							
							</div>
						</div>
					</div> 
				</div>  -->
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
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
			<script src="js/main.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function() {
  $("#example").DataTable({
    aaSorting: [],
    responsive: true,

    columnDefs: [
      {
        responsivePriority: 1,
        targets: 0
      },
      {
        responsivePriority: 2,
        targets: -1
      }
    ]
  });

  $(".dataTables_filter input")
    .attr("placeholder", "Search here...")
    .css({
      width: "300px",
      display: "inline-block"
    });

  $('[data-toggle="tooltip"]').tooltip();
});

			</script>
		</div>
    </body>
</html>