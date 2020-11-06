<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>MarketingOJO</title>
  	<!-- Tell the browser to be responsive to screen width -->
      <link rel="icon" type="image/png" href="../images/favicon.png">  
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Bootstrap time Picker -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  	<style type="text/css">
  		.mt20{
  			margin-top:20px;
  		}
      .bold{
        font-weight:bold;
      }

      /*chart style*/
      #legend ul {
        list-style: none;
      }

      #legend ul li {
        display: inline;
        padding-left: 30px;
        position: relative;
        margin-bottom: 4px;
       /* border-radius: 5px;*/
        padding: 2px 8px 2px 28px;
        font-size: 14px;
        cursor: default;
        -webkit-transition: background-color 200ms ease-in-out;
        -moz-transition: background-color 200ms ease-in-out;
        -o-transition: background-color 200ms ease-in-out;
        transition: background-color 200ms ease-in-out;
      }

      #legend li span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 100%;
       /* border-radius: 5px;*/
      }
      html,
body {
    box-sizing: border-box;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 1em;
    line-height: 1.5;
    color: #303336;
    scroll-behavior: smooth;
}

*, *::before, *::after {
    box-sizing: inherit;
}

main {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: #d1e8ee;
}

::selection {
    color: #fff;
    background-color: #005aee;
}

/* ======================== */
/* Just Copy The Code Below */

/* ------------- */
/* Content Style */
/* ------------- */

.text-card {
    position: relative;
    width: 370px;
    height: 470px;
    margin: 20px;
    padding: 50px;
    border-radius: 10px;
    overflow: hidden;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 1em;
    line-height: 1.5;
    color: #303336;
    background-color: #d1e8ee;
    box-shadow: 0 40px 40px -20px #8fc7d577;
     transition: 300ms;
}

.text-card::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: .25;
    background-image: url("https://picsum.photos/200/300");
    background-size: cover;
    background-position: center;
}

.text-card .content {
    position: relative;
    z-index: 100;
}

.text-card .author-section {
    position: relative;
    display: flex;
    height: 40px;
}

.text-card .author-avator {
    width: 40px;
    height: 40px;
    border-radius: 40px;
    object-position: center;
    object-fit: cover;
}

.text-card .author-name {
    position: relative;
    display: inline-block;
    height: fit-content;
    font-weight: 700;
    font-size: .875em;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #000;
    transition: 250ms;
}

.text-card .author-avator-link {
    margin-right: 20px;
    border-radius: 40px;
} 

.text-card .author-name-link {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    height: fit-content;
}

.text-card p {
    padding: 50px 0;
    line-height: 1.75;
    font-weight: 300;
    color: #303336;
}

.text-card button {
    padding: 10px 25px;
    border: 1px solid #ebebeb77;
    border-radius: 50px;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: .875em;
    line-height: 1.5;
    letter-spacing: 1px;
    color: #303336;
    background-color: #ffffff00;
    cursor: pointer;
    transition: 300ms;
}

.text-card:hover {
/*    border: 1px solid #ebebebbb;*/
    transform: scale(1.1);
}


/* Display this style when screen-width is lower than 425px */
@media only screen and (max-width: 425px) {

    .text-card {
        width: 100%;
        height: auto;
    }

}

/* Just Copy The Code Above */
/* ======================== */


/* ----------- */
/* UI Designer */
/* ----------- */

.designer {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    font-weight: 400;
    color: #46a2b9;
    letter-spacing: 1px;
    text-align: center;
    text-transform: uppercase;
    transition: 300ms;
}

.designer a {
    text-decoration: none;
    color: #23515d;
}

body:hover .designer {
    opacity: 1;
}
.scrollbar
{
      height: 295px;
    width: 100%;
    background: transparent;
    overflow-y: scroll;
        margin-left: 0px;
}
#style-2::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

#style-2::-webkit-scrollbar
{
  width: 12px;
  background-color: #F5F5F5;
}

#style-2::-webkit-scrollbar-thumb
{
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #D62929;
}
#style-7::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
  border-radius: 10px;
}

#style-7::-webkit-scrollbar
{
  width: 10px;
  background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
  border-radius: 10px;
  background-image: -webkit-gradient(linear,
                     left bottom,
                     left top,
                     color-stop(0.44, rgb(122,153,217)),
                     color-stop(0.72, rgb(73,125,189)),
                     color-stop(0.86, rgb(28,58,148)));
}
.text{
    text-align: center;
        }
.btn:hover{
    transform: scale(1.1);
}


  	</style>
</head>