<head>
     <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
     <link rel="stylesheet" href="fonts/icomoon/style.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-datepicker.css">
     <link rel="stylesheet" href="css/jquery.fancybox.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="admin/assets/css/style.css">

     <link rel="stylesheet" href="css/style.css">
</head>

<body>
     <!-- NAVBAR -->
     <?php
     include("navigation.php");
     ?>
     <!-- END OF NAVBAR -->

     <div class="ftco-blocks-cover-1">
          <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('img/hero_1.jpg')">
               <div class="container">
                    <div class="row align-items-center ">

                         <div class="col-md-5 mt-5 pt-5">
                              <span class="text-cursive h5 text-red">Contact</span>
                              <h1 class="mb-3 font-weight-bold text-teal">Get In Touch</h1>

                              <div class="top-social ml-auto">
                                   <a href="#"><span class="icon-facebook text-teal"></span></a>
                                   <a href="#"><span class="icon-twitter text-success"></span></a>
                                   <a href="#"><span class="icon-linkedin text-yellow"></span></a>
                              </div>
                         </div>
                    </div>
                    <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Contact</strong></p>
               </div>

          </div>
     </div>
     </div>
     </div>


     <div class="site-section bg-light" id="contact-section">
          <div class="container">
               <div class="row justify-content-center text-center">
                    <div class="col-7 text-center mb-5">
                         <h1>
                              <p1 style="color:#ff6464">Get In Touch Using The Contact Form</p1>
                         </h1>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-8 mb-5">
                         <form action="" method="post">
                              <div class="form-group row">
                                   <div class="col-md-6 mb-4 mb-lg-0">
                                        <input type="text" name="fn" class="form-control" placeholder="First name">
                                   </div>
                                   <div class="col-md-6">
                                        <input type="text" name="ln" class="form-control" placeholder="First name">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <div class="col-md-12">
                                        <input type="text" name="email" class="form-control" placeholder="Email address">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <div class="col-md-12">
                                        <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <div class="col-md-6 mr-auto">
                                        <input type="submit" name="sendmail" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                                   </div>
                              </div>
                         </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                         <div class="bg-white p-3 p-md-5">
                              <h3 class="text-black mb-4">Contact Info</h3>
                              <ul class="list-unstyled footer-link">
                                   <li class="d-block mb-3">
                                        <span class="d-block text-black">Address:</span>
                                        <span>Street No#3 Multan Road City Multan, Punjab Pakistan</span></li>
                                   <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>0092 348 458 7723</span></li>
                                   <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>codehunter786@gmail.com</span></li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <?php
     include("footer.php");
     ?>
     <?php
     if (isset($_POST["sendmail"])) {
          if (
               isset($_POST["fn"])
               && isset($_POST["ln"])
               && isset($_POST["email"])
               && isset($_POST["message"])
          ) {
               $fn = $_POST["fn"];
               $ln = $_POST["ln"];
               $email = $_POST["email"];
               $msge = $_POST["message"];

               ini_set("SMTP", "mail.gmail.com");
               ini_set("smtp_port", "587");
               // Please specify the return address to use
               ini_set('sendmail_from', 'wahaj.dkz@gmail.com');
               $msg = "
               Hi, this is $fn $ln, my email is $email.\n This is my following message: $msge
               ";
               $msgs = wordwrap($msg, 70);
               // send email
               mail("wahaj.dkz@gmail.com", "Contact - Subject# " . rand(0, 1000), $msgs);
               echo "<script>alert('Your query has been submitted');</script>";
          }
          unset($_POST["sendmail"]);
          $msg =  "";
     }


     ?>
</body>



</html>