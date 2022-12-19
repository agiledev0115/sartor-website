<?php require("admin/actions/db.php") ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hazze | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About Us</a></li>
                            <li class="active"><a href="./blog.html">Blog</a></li>
                            <li><a href="./gallery.html">Gallery</a>
                                <ul class="dropdown">
                                    <li><a href="#">Naoh</a></li>
                                    <li><a href="#">Padis</a></li>
                                    <li><a href="#">Jacob</a></li>
                                    <li><a href="#">Gomez</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <?php
    
    $select="select * from blog where id='$idb'";
    $query=mysqli_query($con,$select);
    $show=mysqli_fetch_assoc($query);
    ?>
    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="bd-text">
                        <div class="bd-title">
                            <h2 class="text-white"><?php echo $show['title']; ?>
                        </div>
                        <div class="bd-pic">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="admin/img/<?php echo $show['image']; ?>" height="370px" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p><?php echo $show['detail']; ?></p>
                            </div>
                            <div class="bd-pic">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="admin/img/<?php echo $show['image1']; ?>"  height="370px" alt="">
                                </div>
                            </div>
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
                        <h2>fetch recommended  from the other blogs that have been written</h2>
                    </div>
                </div>
            </div>

                    <div class="blog-item">
                        <div class="row">
                            <?php
                    $select="SELECT * FROM blog ORDER BY id desc";
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
                                        <h4><a href="blog-details.php?id=<?php echo $data['id'] ?>"><?php echo $data['title']; ?></a></h4>
                                        <p class="text-truncate" ><?php echo $data['detail']; ?></p>
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
    <!-- Recommend Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="fo-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5>Useful Links</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Model</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Join The Newsletter</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="news-form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Instagram</h5>
                        <div class="insta-pic">
                            <img src="img/instagram/instagram-1.jpg" alt="">
                            <img src="img/instagram/instagram-2.jpg" alt="">
                            <img src="img/instagram/instagram-3.jpg" alt="">
                            <img src="img/instagram/instagram-4.jpg" alt="">
                            <img src="img/instagram/instagram-5.jpg" alt="">
                            <img src="img/instagram/instagram-6.jpg" alt="">
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
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>