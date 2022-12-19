<?php require("admin/actions/db.php") ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="BLK fashion, Black Designers, Afro Designer Brands">
    <meta property="og:site_name" content="Black-Afro Inspired Fashion">
    <meta property="og:url" content="https://www.sartor.io">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="Blog print" name="title">
    <meta content="Shop authentic  Black Independent fashion brands, experiences and services to inspire individuality. All items are authenticated through a rigorous process overseen by experts." name="description">
    <meta name="google-site-verification" content="7o5LTENcqJrM4-z10LUtH9o66nIKf1dpHmwvSt3MB7w" />
    <meta name="p:domain_verify" content="655b999e3dc809846aac1fbc4c3d7744"/>
    <title>Blog</title>

    <!-- Google Font -->
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Css Styles -->
    <link rel="stylesheet" href="/gallery/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/button.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/style.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/deck-banner.css" type="text/css">
    <link rel="stylesheet" href="/gallery/css/mouse.css" type="text/css">
    



  <link rel="icon" href="/gallery/img/logo.png" type="image/gif" sizes="16x16">



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161795258-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161795258-1');
</script>



</head>


<body>
    <!-- Page Preloder -->
      <div class="cursor"></div>

        <!-- Header Section Begin -->
  <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="log1o">
                        <a href="https://sartor.io">
                            <img src="/gallery/img/logo.png" alt="" width="80" height="80">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <ul>
                            <li> <div class="buttonic">
                               <a href="./index.php"> <div class="btn btn-three"><span> Home </span></div></a>
                               </div>
                            </li>
                           
                            <li>
                        <div  class="buttonic">
                        <a href="#" role="menuitem" >
                            <div class="btn btn-three"><span> About</span></div></a>
                           <ul class="dropdown" role="menu" aria-hidden="false" style="">
                            <li><div class="container"><a href="./aboutus.php" role="menuitem" tabindex="0" >About Us</a></div></li>
                            <li><a href="https://member.sartor.io/sartorguide" role="menuitem" tabindex="0">Sartor Guide AI</a></li>
                            
                        </ul>
                        </div>
                    </li>
                            <li> <div class="buttonic">
                               <a href="./showroom.php"> <div class="btn btn-three"><span> Show Room </span></div></a>
                               </div>
                            </li>
                            <li class="active"> <div class="buttonic">
                               <a href="./blog.php"> <div class="btn btn-five"><span> Blog's </span></div></a>
                               </div>
                            </li>
                            <li> <div class="buttonic">
                               <a href="./Download.php"> <div class="btn btn-three"><span> Download </span></div></a>
                               </div>
                            </li>
                            <li> <div class="buttonic">
                               <a href="./contact.php"> <div class="btn btn-three"><span> Contact </span></div></a>
                               </div>
                            </li>
                            
                          
                         
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    
    
<?php
    $idb=$_GET['id'];
    $select="select * from blog where id='$idb'";
    $query=mysqli_query($con,$select);
    $show=mysqli_fetch_assoc($query);
    ?>
    
        <!-- Blog Details Hero  Section Begin -->
    <section class="blog-hero-section set-bg spad" data-setbg="admin/img/<?php echo $show['image']; ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="bh-text">
                        <span>Black Fashion</span>
                        <h2><?php echo $show['title']; ?></h2>
                        <ul>
                            <li>By Sartor</li>
                            <li>"<?=date('F jS Y',strtotime($show['date']))?>"</li>
                            <li>Black Fashion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->
    
 <section class="blog-details-section spad">
                            <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="bd-text"> 
                                        <div class="col-lg-10 m-auto">
                    <div class="bd-text">
                                
                                <text>
                                     <?php echo $show['detail']; ?>
                                </text>
                    </div>
                </div>
                                </div>
     </div>
                                </div>
     </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
    <!-- Blog Details Section End -->

    <!-- Recommend Section Begin -->
    <section class="recommend-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Recommended</h2>
                    </div>
                </div>
            </div>

                    <div class="blog-item">
                        <div class="row">
                            <?php
                    $select="SELECT * FROM blog ORDER BY RAND() desc limit 2";
                    $query=mysqli_query($con,$select);
                    while($data=mysqli_fetch_array($query)){
                    ?>
                    <div class="col-lg-6">
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="bi-pic set-bg" src="admin/img/<?php echo $data['image']; ?>" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="bi-text">
                                        <ul>
                                            <li><i class=""></i><?=date('F jS Y',strtotime($data['date']))?></li>
                                        </ul>
                                        <h3><a href="blog-details.php?id=<?php echo $data['id'] ?>"><?php echo $data['title']; ?></a></h3>
                                        <p class="text-truncate" ><?=substr($data['detail'],0,50); ?></p>
                                        <div class="bt-author">
                                            <div class="ba-pic">
                                                <img src="gallery/img/blog/logo.png" alt="">
                                            </div>
                                            <div class="ba-text">
                                                <h5>Sartor</h5>
                                                <span>Bloger</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                        </div>
                    </div>

 
        </div>
    </section>
   <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <button class="bt btn-three">
                            <a href="#">
                                <img src="gallery/img/logo.png" alt="">
                            </a>
                            </button>
                        </div>
                        <ul>
                            <li>Address:  911 Washington Ave</li>
                            <li>   St. Louis, MO 63101</li>
                            <!--<li>Phone: +65 11.188.888</li>-->
                            <li>Email: hello@sartor.io</li>

                            </ul>
                        <div class="fo-social">
                            <!--<a href="https://www.facebook.com/SartorUsa/"><i class="fa fa-facebook"></i></a>--->
                            <a href="https://www.instagram.com/sartorusa/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/sartorfit/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.pinterest.com/sartorusa/"><i class="fa fa-pinterest"></i></a>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5>Useful Links</h5>
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                             <li><a href="./aboutus.php">About Us</a></li>
                            <li><a href="./showroom.php">Show Room</a></li>
                            
                            <li><a href="./Download.php">Download</a>
                            </li>
                             <li><a href="/career/index.html">Career</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                             <li><a href="./faq/index.php">Return Policy & FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Join The Newsletter</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
							
                            <form action="/admin/actions/customersub.php" class="news-form" method="POST" id="wf-form-Email-Hero">
                                <input type="email"  id="email" name="email" data-name="Email Address" placeholder="Enter your mail" maxlength="256" required="" >
                                <button class="btn btn-three " type="submit" data-wait="Please wait..."  id="capture" name="capture">Subscribe</button>
                            </form>
                        <div id="return_status"></div>
                    </div>
                </div>
                     <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Support Black-Owned Business</h5>
                          <li>
                              
                              
                              <a button class="bt btn-three" href="https://blackownedeverything.co/">
                                <img src="gallery/img/BLK.jpg" alt="">
                              </a>
                        </li>
                        <li>
                           
                         <a button class="bt btn-three" type=""href="https://afrotech.com/">
                                <img src="gallery/img/afrotech.png" alt="">
                            </a>
                                
                        </li>


                        </div>
                    </div>



                </div>


            </div>
            <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2019, All Right Reserved sartor</span>
                    </div>
                    <!-- End Col -->
                        </div>  
                <!-- End Row -->
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
   <script src="gallery/js/jquery-3.3.1.min.js"></script>
    <script src="gallery/js/bootstrap.min.js"></script>
    <script src="gallery/js/jquery.magnific-popup.min.js"></script>
    <script src="gallery/js/mixitup.min.js"></script>
    <script src="gallery/js/jquery.slicknav.js"></script>
    <script src="gallery/js/owl.carousel.min.js"></script>
    <script src="gallery/js/main.js"></script>
    <script src="gallery/js/mouse.js"></script>
     <script>

$(document).ready(function(){

  $("#capture").click(function(e){ 
        e.preventDefault();
        var datastring = $("#wf-form-Email-Hero").serialize();
        if (document.querySelector('[type=email]').value) {
            
        
        $.ajax({
            type: "POST",
            url: "/admin/actions/customersub.php",
            data: datastring,
            dataType: "html",
            success: function(data) {
            
            $("#wf-form-Email-Hero").fadeOut(function(){
                $("#return_status").hide().html('<div class="success w-form-done"><div>Thank you! Your submission has been received!</div></div>').fadeIn();
            });


            },
            error: function() {
                $("#return_status").hide().html('<div class="error w-form-fail"><div>Oops! Something went wrong while submitting the form</div></div>').fadeIn();
            }
        });
        }
    });
});
 


</script>

</body>

</html>
<?php 

if(isset($_POST["capture"])){
$email=$_POST['email'];
$insert="insert into em(business_email)values('$email')";
$query=mysqli_query($con,$insert);
if($query){
	$msz ="<h4>Subscribe successful</h4>";
}
else{
	$msz_fail= "<h4>Subscribtion fail</h4>";
}
}
