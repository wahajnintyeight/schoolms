<?php
session_start();
?>

<head>
     <link rel="stylesheet" href="pages/fonts/icomoon/style.css">
     <link rel="stylesheet" href="pages/css/bootstrap.min.css">
     <link rel="stylesheet" href="pages/css/bootstrap-datepicker.css">
     <link rel="stylesheet" href="pages/css/jquery.fancybox.min.css">
     <link rel="stylesheet" href="pages/css/owl.carousel.min.css">
     <link rel="stylesheet" href="pages/css/owl.theme.default.min.css">
     <link rel="stylesheet" href="pages/fonts/flaticon/font/flaticon.css">
     <link rel="stylesheet" href="pages/css/aos.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="pages/css/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">
</head>

<?php
include("navigation.php");
include("connection.php");
if (isset($_SESSION["student_id"])) {
     echo "<script>alert('You are already logged in as Student! Can not return to main page');
     location.replace('student/dashboard.php');
     </script>";
} else if (isset($_SESSION["adminid"])) {
     echo "<script>alert('You are already logged in as Admin! Can not return to main page');
     location.replace('admin/dashboard.php');
     </script>";
} else if (isset($_SESSION["teacher_id"])) {
     echo "<script>alert('You are already logged in as Teacher! Can not return to main page');
     location.replace('teacher/dashboard.php');
     </script>";
} else {
}
?>
<!-- //content section -->

<body>
     <section>
          <section>


               <!-- <h2 class="topcontent" style="font-size:60px">Come here to learn</h2> -->

               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                         <div class="item active">
                              <img src="../includes/img/bg-3.jpg" alt="Los Angeles">
                         </div>

                         <div class="item">
                              <img src="../includes/img/bg_2.jpg" alt="Chicago">
                         </div>

                         <div class="item">
                              <img src="../includes/img/bg_1.jpg" alt="New York">
                         </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" style="margin-left:-24px" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left"></span>
                         <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right"></span>
                         <span class="sr-only">Next</span>
                    </a>
               </div>
          </section>


     </section>
     <section class="ftco-services ftco-no-pb" style="margin-top:30px">
          <div class="container-wrap">
               <div class="row no-gutters">
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                         <div class="media block-6 d-block text-center">
                              <div class="icon d-flex justify-content-center align-items-center">
                                   <span class="flaticon-teacher"></span>
                              </div>
                              <div class="media-body p-2 mt-3">
                                   <h3 class="heading">Certified Teachers</h3>
                                   <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary" style="background:yellow">
                         <div class="media block-6 d-block text-center">
                              <div class="icon d-flex justify-content-center align-items-center">
                                   <span class="flaticon-reading"></span>
                              </div>
                              <div class="media-body p-2 mt-3">
                                   <h3 class="heading">Special Education</h3>
                                   <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth" style="background: greenyellow">
                         <div class="media block-6 d-block text-center">
                              <div class="icon d-flex justify-content-center align-items-center">
                                   <span class="flaticon-books"></span>
                              </div>
                              <div class="media-body p-2 mt-3">
                                   <h3 class="heading">Book &amp; Library</h3>
                                   <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary" style="background:red">
                         <div class="media block-6 d-block text-center">
                              <div class="icon d-flex justify-content-center align-items-center">
                                   <span class="flaticon-diploma"></span>
                              </div>
                              <div class="media-body p-2 mt-3">
                                   <h3 class="heading">Certification</h3>
                                   <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section class="ftco-section ftco-no-pt ftc-no-pb">
          <div class="container">
               <div class="row">
                    <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                         <div class="text px-4 ftco-animate">
                              <h2 class="mb-4">
                                   <p1 style="color:#ff6464">Welcome to Arif Execllence School System</p1>
                              </h2>
                              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                              <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                              <!-- <p><a href="#" class="btn btn-secondary px-4 py-3" style=" background-color: green">Read More</a></p> -->
                         </div>
                    </div>
                    <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                         <h2 class="mb-4">
                              <p1 style="color:#ff6464">What We Offer</p1>
                         </h2>
                         <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                         <div class="row mt-5">
                              <div class="col-lg-6">
                                   <div class="services-2 d-flex">
                                        <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                        <div class="text">
                                             <h3>
                                                  <p1 style="color:olive">Safety First<p1>
                                             </h3>
                                             <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                   <div class="services-2 d-flex">
                                        <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                        <div class="text">
                                             <h3>
                                                  <p1 style="color:olive">Regular Classes</p1>
                                             </h3>
                                             <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                   <div class="services-2 d-flex">
                                        <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                        <div class="text">
                                             <h3>
                                                  <p1 style="color:olive">Certified Teachers</p1>
                                             </h3>
                                             <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                   <div class="services-2 d-flex">
                                        <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                        <div class="text">
                                             <h3>
                                                  <p1 style="color:olive">Sufficient Classrooms</p1>
                                             </h3>
                                             <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                   <div class="services-2 d-flex">
                                        <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                        <div class="text">
                                             <h3>
                                                  <p1 style="color:olive">Creative Lessons</p1>
                                             </h3>
                                             <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                   <div class="services-2 d-flex">
                                        <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                        <div class="text">
                                             <h3>
                                                  <p1 style="color:olive">Sports Facilities</p1>
                                             </h3>
                                             <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <div class="site-section">
          <div class="container">
               <div class="row mb-5">
                    <div class="col-12 text-center">
                         <span class="text-cursive h5 text-red d-block" style="background:yellow">Our Gallery </span>
                         <h2 class="text-black">
                              <p style="color: #ff6464">Gallery Of The Kids </p>
                         </h2>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_1.jpg" data-fancybox="gal"><img src="img/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_5.jpg" data-fancybox="gal"><img src="img/img_5.jpg" alt="Image" class="img-fluid"></a>
                    </div>

                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_4.jpg" data-fancybox="gal"><img src="img/img_4.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_8.jpg" data-fancybox="gal"><img src="img/img_8.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_4.jpg" data-fancybox="gal"><img src="img/img_4.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_9.jpg" data-fancybox="gal"><img src="img/img_9.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_2.jpg" data-fancybox="gal"><img src="img/img_2.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                         <a href="pages/img/img_3.jpg" data-fancybox="gal"><img src="img/img_3.jpg" alt="Image" class="img-fluid"></a>
                    </div>
               </div>
          </div>
     </div>

     <div class="site-section">
          <div class="container">
               <div class="row">
                    <div class="col-md-4">
                         <span class="text-cursive h5 text-red d-block" style="background: yellow">Pricing Plan</span>
                         <h2 class="text-black">
                              <p style="color: #ff6464">Our Pricing </p>
                         </h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quis cupiditate fugit, voluptatibus ullam, non laboriosam alias veniam, ex inventore iure sed?</p>
                    </div>
                    <div class="col-md-4">
                         <div class="pricing teal">
                              <span class="price">
                                   <span>PKR 4000/</span>
                              </span>
                              <h3>Silver Pack</h3>
                              <ul class="ul-check list-unstyled teal">
                                   <li>Marks obtained over 90%</li>

                              </ul>
                              <!-- <p><a href="#" class="btn btn-teal btn-custom-1 mt-4">Buy Now</a></p> -->
                         </div>
                    </div>
                    <div class="col-md-4">
                         <div class="pricing danger">
                              <span class="price">
                                   <span>PKR 5500/</span>
                              </span>
                              <h3>Golden Pack</h3>
                              <ul class="ul-check list-unstyled danger">
                                   <li>Marks obtained above 50% and less than 60%</li>

                              </ul>
                              <!-- <p><a href="#" class="btn btn-danger btn-custom-1 mt-4">Buy Now</a></p> -->
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <div class="site-section bg-info">
          <div class="container">
               <div class="row mb-5">
                    <div class="col-12 text-center">
                         <span class="text-cursive h5 text-red d-block" style="background:yellow">Packages You Like</span>
                         <h2 class="text-white">
                              <p1 style="color:#ff6464">Our Packages</p>
                         </h2>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-4">
                         <div class="package text-center bg-white">
                              <span class="img-wrap"><img src="img/flaticon/svg/001-jigsaw.svg" alt="Image" class="img-fluid"></span>
                              <h3 class="text-teal">Indoor Games</h3>
                              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
                              <!-- <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Learn More</a></p> -->
                         </div>
                    </div>
                    <div class="col-lg-4">
                         <div class="package text-center bg-white">
                              <span class="img-wrap"><img src="img/flaticon/svg/002-target.svg" alt="Image" class="img-fluid"></span>
                              <h3 class="text-success">Outdoor Game and Event</h3>
                              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
                              <!-- <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p> -->
                         </div>
                    </div>
                    <div class="col-lg-4">
                         <div class="package text-center bg-white">
                              <span class="img-wrap"><img src="img/flaticon/svg/003-mission.svg" alt="Image" class="img-fluid"></span>
                              <h3 class="text-danger">Camping for Kids</h3>
                              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
                              <!-- <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Learn More</a></p> -->
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="site-section bg-light">
          <div class="container">
               <div class="row mb-5">
                    <div class="col-12 text-center">
                    </div>
               </div>


               <div class="row mt-5 justify-content-center">
                    <div class="col-md-8" style="background-color:#c2f1f8;padding:20px;border-radius:0.5cm">
                         <div class="row" style="text-align:center">

                              <div class="col-lg-6 text-center">

                                   <span class="text-yellow h2 d-block">
                                        <p1 style="color:turquoise">
                                             <i class="fas fa-user" style="margin:10px;font-size:50px">
                                                  <?php
                                                  $stdCount = countVal("SELECT count(*) from students", $conn);
                                                  $teacherCount = countVal("SELECT count(*) from teacher", $conn);
                                                  echo $stdCount + $teacherCount;
                                                  ?>
                                             </i>
                                        </p1>
                                   </span>
                                   <span>Members</span>
                              </div>

                              <div class="col-lg-6 text-center">

                                   <span class="text-success h2 d-block"><i class="fa fa-graduation-cap" style="margin:10px;font-size:50px"><?php echo countVal("SELECT count(*) from teacher", $conn); ?></i></span>
                                   <!-- <i class="fas fa-user" style="font-size:50px"></i> -->
                                   <span>Staffs</span>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>


     <?php
     include("footer.php");
     ?>
</body>


<style>
     .topcontent {
          position: absolute;
          z-index: 2;
     }

     .myCarousel {
          z-index: 1px;
          position: absolute;
     }

     .slide {
          height: auto;
          min-height: 0px;
     }

     .price::before {
          border: 5px solid #fff;
     }

     .pricing .price {
          width: 120px;
          height: 120px;
          border-radius: 50%;
          display: block;
          margin-bottom: 30px;
          position: relative;
     }
</style>

<?php
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}


?>