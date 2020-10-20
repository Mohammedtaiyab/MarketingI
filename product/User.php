<?php 
    session_start();

    // variable declaration
    $username = "";
    $email    = "";
    $errors = array(); 
    $_SESSION['success'] = "";

    // connect to database
$db = mysqli_connect("localhost","marketi1_OJO","Marketing@52","marketi1_MarketingOJO");
$con=mysqli_connect("localhost","marketi1_OJO","Marketing@52","marketi1_MarketingOJO");
    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
          $phone = mysqli_real_escape_string($db, $_POST['contact']);
       
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // form validation: ensure that the form is correctly filled
        // if (empty($username)) { array_push($errors, "Username is required"); }
        // if (empty($email)) { array_push($errors, "Email is required"); }
        // if (empty($password_1)) { array_push($errors, "Password is required"); }

        // if ($password_1 != $password_2) {
        //     array_push($errors, "The two passwords do not match");
        // }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
             $sql="select * from user where Email='$email'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
     array_push($errors, "User Already Excists!!");
    }else{
            $password = md5($password);//encrypt the password before saving in the database
            $query = "insert into user (Name,Email,Password,Mobile)values('$name','$email','$password', '$phone')";
            mysqli_query($db, $query);

            $_SESSION['username'] = $name;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
        }

    }

    // ... 

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
        $password = md5($password);
            $query = "select * from user where Email='$email' AND Password='$password'";
            $results = mysqli_query($db, $query);
           $row1=mysqli_fetch_assoc($results);
            $name=$row1['Name'];
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] =$name;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
    }







    
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 } 
?>