<?php
session_start();

require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:../login.php');
	die();
}
$Topic='';
$Post="";
$msg='';
// if(isset($_GET['id']) && $_GET['id']!=''){
//    $id=get_safe_value($con,$_GET['id']);
//    $res=mysqli_query($con,"select * from posts where Id='$id'");
//    $check=mysqli_num_rows($res);
//    if($check>0){
//       $row=mysqli_fetch_assoc($res);
//       $Topic=$row['Topic'];
//       $Post=$row['Post'];
//    }else{
//       header('location:posts.php');
//       die();
//    }
// }

if(isset($_POST['submit'])){
   // $Topic=get_safe_value($con,$_POST['Topic']);
   // $res=mysqli_query($con,"select * from posts where Topic='$Topic'");
   // $check=mysqli_num_rows($res);
   // if($check>0){
   //    if(isset($_GET['id']) && $_GET['id']!=''){
   //       $getData=mysqli_fetch_assoc($res);
   //       if($id==$getData['id']){
         
   //       }else{
   //          $msg="Post already exist";
   //       }
   //    }else{
   //       $msg="Post already exist";
   //    }
   // }
    $topic=$_POST['topic'];
         $post=$_POST['post'];
         $con=mysqli_connect("localhost","marketi1_OJO","Marketing@52","marketi1_MarketingOJO");
    mysqli_query($con,"insert into posts(Topic,Post) values('$topic','$post')");
     header('location:posts.php');
      die();
   // if($msg==''){ 

   //    if(isset($_GET['id']) && $_GET['id']!=''){
        
   //       mysqli_query($con,"update posts set Post='$Posts' where Id='$id'");
   //    }else{
   //       mysqli_query($con,"insert into posts(Topic,Post,status) values('$Topic',$Post','1')");
   //    }
   //    header('location:posts.php');
   //    die();
   // }
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                    <li class="menu-item-has-children dropdown">
                     <a href="Posts.php" >Posts</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo" width="36%"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>



<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Post</strong><small> Form</small></div>
                        <form action="writepost.php" method="post">
                     <div class="card-body card-block">
                        <div class="form-group">
                           <label for="categories" class=" form-control-label">Topic</label>
                           <input type="text" name="topic" placeholder="Enter Topic name" class="form-control" required value="<?php echo $Topic?>">
                        </div>
                         <div class="form-group">
                           <label for="categories" class="form-control-label">Post</label>
                           <textarea type="text" name="post" placeholder="Write Post" class="form-control" required><?php echo $Post?></textarea>
                        
                        </div>
                        <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Submit</span>
                        </button>
                        <div class="field_error"><?php echo $msg?></div>
                     </div>
                  </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>















         <div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; <?php echo date('Y')?> MarketingOJO
                  </div>
                  
               </div>
            </div>
         </footer>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>