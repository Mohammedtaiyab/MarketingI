<?php
require('header.php');
$msg='';
// if(isset($_POST["submit"])){
//   $name=$_POST['name'];
//     $email=$_POST['email'];
//     $phone=$_POST['contact'];
//     $password=md5($_POST['password']);
//   $sql="select * from user where Email='$email'";
//     $res=mysqli_query($con,$sql);
//     $count=mysqli_num_rows($res);
//     if($count>0){
//       $msg= "User Already Excists!!";
//     }else{
//         mysqli_query($con,"insert into user (Name,Email,Password,Mobile)values('$name','$email','$password', '$phone')");
//            $_SESSION['userLogin']='yes';
//         $_SESSION['user']=$name;
//     }
// }
?>
  <!-- breadcrumb-section start -->
    <div class="breadcrumb-section mb-30 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html" class="text-uppercase">Home</a></li>
                            <li class="breadcrumb-item active"><a href="" class="text-uppercase">Sign Up</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->
    <!-- my-account start -->
    <div class="my-account pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title">Fill Sign In Form</h3>
                       <div class="social">
                                  <div class="panel panel-default">
                                     <?php include('error.php'); ?>
                                  </div>
                                </div>
                    <form class="log-in-form" action="signup.php" method="POST">
                     
                       <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-6">
                                <input type="text"name="name" class="form-control" id="staticEmail"  required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" id="staticEmail"  required="required">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="staticEmail" class="col-md-3 col-form-label">Phone No:</label>
                            <div class="col-md-6">
                                <input type="text" name="contact" class="form-control" id="staticEmail" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                    <div class="input-group-prepend"  required="required">
                                        <button type="button"  class="input-group-text show-password">show</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-group row text-center">
                            <div class="col-md-6 offset-md-3">
                                <div class="login-form-links">
                                   <!--  <a href="#" class="for-get">Forgot your password?</a> -->
                                    <div class="sign-btn">
                                         <button  type="submit" name="reg_user" class="btn btn-success mt-0">Sign Up!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require('footer.php');
?>