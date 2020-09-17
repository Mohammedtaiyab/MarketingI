<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:../login.php');
	die();
}
if(isset($_GET['type']) && $_GET['type']!=''){
   $type=get_safe_value($con,$_GET['type']);
   if($type=='status'){
      $operation=get_safe_value($con,$_GET['operation']);
      $id=get_safe_value($con,$_GET['id']);
      if($operation=='active'){
         $status='1';
      }else{
         $status='0';
      }
      $update_status_sql="update Posts set status='$status' where id='$id'";
      mysqli_query($con,$update_status_sql);
   }
   
   if($type=='delete'){
      $id=get_safe_value($con,$_GET['id']);
      $delete_sql="delete from Posts where id='$id'";
      mysqli_query($con,$delete_sql);
   }
}

$sql="select * from Posts";
$res=mysqli_query($con,$sql);
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
                     <a href="posts.php" >Posts</a>
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

<?
// if(isset($_GET['type']) && $_GET['type']!=''){
//    $type=get_safe_value($con,$_GET['type']);
//    if($type=='status'){
//       $operation=get_safe_value($con,$_GET['operation']);
//       $id=get_safe_value($con,$_GET['id']);
//       if($operation=='active'){
//          $status='1';
//       }else{
//          $status='0';
//       }
//       $update_status_sql="update Posts set status='$status' where id='$id'";
//       mysqli_query($con,$update_status_sql);
//    }
   
//    if($type=='delete'){
//       $id=get_safe_value($con,$_GET['id']);
//       $delete_sql="delete from Posts where id='$id'";
//       mysqli_query($con,$delete_sql);
//    }
// }

// $sql="select * from Posts";
// $res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
               <h4 class="box-title">Posts</h4>
               <h4 class="box-link"><a href="writepost.php">Add Posts</a> </h4>
            </div>
            <div class="card-body--">
               <div class="table-stats order-table ov-h">
                 <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial">#</th>
                        <th>ID</th>
                        <th>Topic</th>
                        <th>Post</th>
                        <th></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php 
                     $i=1;
                     while($row=mysqli_fetch_assoc($res)){?>
                     <tr>
                        <td class="serial"><?php echo $i?></td>
                        <td><?php echo $row['Id']?></td>
                        <td><?php echo $row['Topic']?></td>
                        <td><?php echo $row['Post']?></td>
                        <td>
                        <?php
                        if($row['Status']==1){
                           echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['Id']."'>Active</a></span>&nbsp;";
                        }else{
                           echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['Id']."'>Deactive</a></span>&nbsp;";
                        }
                        echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['Id']."'>Delete</a></span>";
                        
                        ?>
                        </td>
                     </tr>
                     <?php } ?>
                   </tbody>
                 </table>
               </div>
            </div>
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