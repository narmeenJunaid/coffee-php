

<?php
include('connection.php');
if(isset($_POST['login'])){
   $login_email= $_POST['email'];
   $login_pass= $_POST['password'];

   $verify="SELECT * FROM `data` where email = '$login_email'";
   $login= mysqli_query($connect,$verify);
   if(mysqli_num_rows($login)>0){
      $row = mysqli_fetch_assoc($login);
      $pass =$row ['password'];
      $db_pass = password_verify($login_pass,$pass);
     
       session_start();
       $_SESSION['email'] = $row['logindata'];

      if($pass){
         header('location:http://localhost:8082/techtemp-main/index.php');
      }
      else{
         echo "<script> alert ('email/password incorrect')</script>";
      }
   }
 

}

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>hightech</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
      <?php
      
      include('header2.php');
      
      ?>
      <!-- end header -->
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row ">
               <div class="col-md-8 offset-md-2">
                  <div class="titlepage text_align_left">
                     <h2>Register Yourself</h2>
                  </div>
                  <form id="request" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="main_form">
                     <div class="row">
                       
                        <div class="col-md-12">
                           <input class="contactus" placeholder="email" type="type" name="email">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="password" type="type" name="password">                          
                        </div>
                        
                        <div class="col-md-12">
                           <button class="send_btn" name="login">Login</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <a class="logo_footer" href="index.php"><img src="images/logo_footer.png" alt="#" /></a>
                  </div>
                  <div class="col-md-9">
                     <form class="newslatter_form">
                        <input class="ente" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="subs_btn">Sbscribe Now</button>
                     </form>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa helpful">
                        <h3>Useful  Link</h3>
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="we_do.php">What we do</a></li>
                           <li><a href="portfolio.php">Portfolio</a></li>
                           <li><a href="contact.php">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>News</h3>
                        <ul>
                           <li>It is a long established                            
                           </li>
                           <li>fact that a reader will                           
                           </li>
                           <li>be distracted by the                           
                           </li>
                           <li>readable content of a                              
                           </li>
                           <li>page when                          
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>company</h3>
                        <ul>
                           <li>It is a long established                             
                           </li>
                           <li>fact that a reader will                            
                           </li>
                           <li>be distracted by the                          
                           </li>
                           <li>readable content of a                              
                           </li>
                           <li>page when                          
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa conta">
                        <h3>contact Us</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-map-marker" aria-hidden="true"></i> Location
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call +01 1234567890
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> demo@gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2020 All Rights Reserved.  <a href="https://html.design/"> Free Html Template</a></p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                           <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>