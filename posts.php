<?php
require('admin/connection.inc.php');
$sql="select * from posts where Status='1'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
        <meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
        <meta name='copyright' content='MarketingOJO'>  
        <title>Posts</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <link rel="icon" type="image/png" href="images/favicon.png">    
        
        <!-- Web Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
	<style type="text/css">
        /* ------------- */
/* Basic Setting */
/* ------------- */

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
<body>
<main>
    <!-- ======================== -->
    <!-- Just Copy The Code Below -->
     <?php
                  if($rowcount==0){
                    ?>
    <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="images/favicon.png" alt="The New York Times Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name">No Post Available</h6></a>
            </div>
            <div class="scrollbar" id="style-7">
  
    <p style="">
   

    </p>

</div>
         
        </div>
    </section>
                          <?php 
                    }else{
                    ?>
      <?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){?>
               <section class="text-card">
        <div class="content">
            <div class="author-section">
                <a href="#" class="author-avator-link"><img class="author-avator" src="images/favicon.png" alt="The New York Times Logo" width="40"></a>
                <a href="#" class="author-name-link"><h6 class="author-name"><?php echo $row['Topic']?></h6></a>
            </div>
            <div class="scrollbar" id="style-7">
  
    <p style="">
     <?php echo $row['Post']?>
    </p>

</div>
<button class="btn">
 <?php echo "<a href='post.php?id=".$row['Id']."'>Share</a>"
 ?></button>
 <div style="float: right;">
     <a href="#" class="author-name-link"><h6 class="author-name"><?php echo $row['folder']?></h6></a>
</div>
        </div>
    </section>
              <?php } }?>

</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>