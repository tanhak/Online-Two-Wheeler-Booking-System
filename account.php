<?php
session_start();
include "connect.php";
// include "./connect.php";

//     $stmt = $conn->prepare("insert into tbl_customer(c_fname,c_lname,c_email,c_password) values(?, ?, ?, ?)");
//     $stmt->bind_param("ssss",$c_fname,$c_lname,$c_email,$c_password);
//     $stmt->execute();
//     echo "Registration Successfull.....";
//     $stmt->close();
//     $conn->close();

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MotoZone | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
    />
  </head>
  <body>

    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/logo.png" width="125px" />
        </div>
        <nav>
          <ul id="MenuItems">
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="account.php">Login</a></li>
              <li><a href="registration.php">Registration</a></li> -->
             
          </ul>
        </nav>
        <!-- <img src="images/cart.png" width="30px" height="30px" /> -->
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>
    </div>

    <!-- account page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image11.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <!-- <span onclick="login()">Login</span> -->
                            <span onclick="register()">Login</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm"  method="post">
                            <input type="text" placeholder="Username" name="username">
                            <input type="password" placeholder="password" name="password">
                            <button type="Submit" class="btn">Login</button>
                            <!-- <a href="">Forgot Password</a> -->
                        </form>

                        <form id="RegForm"  method="post">
                        <input type="text" placeholder="Username" name="username">
                            <input type="password" placeholder="password" name="password">
                            <button type="Submit" name="b1" class="btn">Login</button>
                            New User ? <a href ="registration.php">Sign UP</a>
<?php
if(isset($_REQUEST["b1"]))
{
  $uname=$_REQUEST["username"];
  $pass=$_REQUEST["password"];
  $qry="select usertype from tbl_login where username='$uname' and password='$pass'";
  $res=mysqli_query($con,$qry);
  $data=mysqli_fetch_assoc($res);
  $_SESSION["uname"]=$uname;
  if($data)
  {
  if($data["usertype"]=="Admin")
  {
header('Location:admindashboard.html');
$_SESSION["utype"]=$data["usertype"];

  }
  else if($data["usertype"]=="Customer")
  {
    $_SESSION["utype"]=$data["usertype"];
    header('Location:CustomerViewproducts.php');

  }
  else if($data["usertype"]=="Vender")
  {
    $_SESSION["utype"]=$data["usertype"];
    header('Location:Venderdashboard.php');

  }
  else if($data["usertype"]=="Staff")
  {
    $_SESSION["utype"]=$data["usertype"];
    header('Location:staffdashboard.php');

  }
  else
  {
    echo '<script>alert("Invalid Username or Password")</script>';
  }
}
else{
  echo '<script>alert("Invalid Username or Password")</script>';
}

}
?>
                            <!-- <a href="">Forgot Password</a> -->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    


    <!------ Footer ----->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download our app</h3>
            <p>Download App for android and ios mobile phone</p>
            <div class="app-logo">
              <img src="images/play-store.png" />
              <img src="images/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo-white.png" />
            <p>
              
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Cpoyright 2020-Motozone</p>
      </div>
    </div>
    <!--js for toggle menu--->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

    <!-- js for toggle form -->

    <script>

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

         function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
         }

            function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
         }


    </script>

  </body>
</html>
