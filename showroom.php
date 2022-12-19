<?php require("admin/actions/db.php") ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Black Fasion BLK fashion, Black Designers, Afro Designer Brands, Black Fasion ">
    <meta property="og:site_name" content="Black-Afro Inspired Fashion">
    <meta property="og:url" content="https://www.sartor.io/showroom">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content= "ShowRoom: Showcase your brand on sartor showroom" name="title">
    <meta content="Shop Authentic Black-Owned Independent fashion brands, experiences and services to inspire individuality. All SARTOR items are authenticated through a rigorous process overseen by our experts." name="description">
    <meta property="og:url" content="https://www.sartor.io/showroom"/>
    <meta name="google-site-verification" content="7o5LTENcqJrM4-z10LUtH9o66nIKf1dpHmwvSt3MB7w" />
    <meta itemprop="name" content="ShowRoom: Showcase your brand on sartor showroom "/>
<meta itemprop="description" content="Shop Authentic Black-Owned Independent fashion brands, experiences and services to inspire individuality. All SARTOR items are authenticated through a rigorous process overseen by our experts."/>
<meta itemprop="image" content="https://www.sartor.io/gallery/img/sartor1.png"/>

    <meta name="p:domain_verify" content="655b999e3dc809846aac1fbc4c3d7744"/>
    <title>ShowRoom: Showcase your brand on sartor showroom </title>

    <!-- Google Font -->
   
    
    <script>
  // The Experience class is available before Evergage is initialised.
  // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  window.Experiences = function()
  {
    this.experiences = [];
    this.subs = [];
  }
  window.Experiences.prototype.push = function(elm)
  {
    this.experiences.push(elm);
    for (var i = 0; i < this.subs.length; ++i)
    {
      this.subs[i](elm);
    }
  }
  window.Experiences.prototype.subscribe = function(cb)
  {
    this.subs.push(cb);
    for (var i = 0; i < this.experiences.length; ++i)
    {
      cb(this.experiences[i]);
    }
  }
  window.rrmc_experiences = new window.Experiences();
  window.rrmc_trigger_delayed_action = function(action, delay)
  {
    setTimeout(function() {
      var _aaq = window._aaq || (window._aaq = []);
      _aaq.push(['trackAction', action]);
    }, delay);
  };
  window.rrmc_trigger_delayed_attribute = function(attribute, value, delay)
  {
    setTimeout(function() {
      var _aaq = window._aaq || (window._aaq = []);
      _aaq.push(['setCustomField', attribute, value,'request']);
      _aaq.push(['trackAction', 'rrmcAttributeUpdate']);
    }, delay);
  };
</script>

     <link rel="stylesheet" href="./gallery/css/font.css" type="text/css">
    <link rel="icon" href="./gallery/img/logo.png" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Css Styles -->
    <link rel="stylesheet" href="/gallery/css/button.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/style.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/waterfall-gallery.css">
        <link rel="stylesheet" href="/gallery/css/mouse.css" type="text/css">

    <link rel="icon" href="gallery/img/logo.png" type="image/gif" sizes="16x16">
    


<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8GVMRZVCZ9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8GVMRZVCZ9');
</script>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
   <div class="cursor"></div>

    <!-- Gallery Modal on image click -->
    <div id="galleryModal" class="gallery-modal">
        <span id="closeModal">&times;</span>
        <img id="galleryModalImg" src="" alt="" />
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="log1o">
                        <a href="./index.php">
                            <img src="gallery/img/logo.png" alt="" width="80" height="80">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                         <ul>
                           <li > <div class="buttonic">
                               <a href="./index.php"> <div class="btn btn-three"><span> Home </span></div></a>
                               </div>
                            </li>
                            <li>
                        <div  class="buttonic">
                        <a href="#" role="menuitem" >
                            <div class="btn btn-three"><span> About</span></div></a>
                         <ul class="dropdown" role="menu" aria-hidden="false" style="">
                            <li><div class="container"><a href="./aboutus.php" role="menuitem" tabindex="0" >About Us</a></div></li>
                            <li><a href="https://member.sartor.io/home/sartorguide.html" role="menuitem" tabindex="0">Sartor Guide AI</a></li>
                            
                        </ul>
                        </div>
                    </li>
                            <li> <div class="buttonic">
                               <a href="./showroom.php"> <div class="btn btn-five"><span> Show Room </span></div></a>
                               </div>
                            </li>
                              <li> <div class="buttonic">
                               <a href="./blog.php"> <div class="btn btn-three"><span> Blog's </span></div></a>
                               </div>
                            </li>
                            <li> <div class="buttonic">
                               <a href="./install.php"> <div class="btn btn-three"><span> Download </span></div></a>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section bread-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="#">Home</a>
                        <span>Show Room</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Show Room</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

   <?php

        require   $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

        use Aws\S3\S3Client;
        use Aws\S3\Exception\S3Exception;
        $ownpath1 = str_replace(
            $_SERVER['DOCUMENT_ROOT'],
            "",
            str_replace("\\", "/", dirname(__FILE__)) . '/'
        );

    //   print_r($files);
    ?>
    <!-- Gallery Section Begin -->
    <div class="gallery-section spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-controls">
                        <ul>
                            <li class="active" data-filter=".all">All gallery</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php




            $s3mode = false;
            $bucketName = 'sartorgallery';
            $IAM_KEY = 'AKIARNAF5L76TYUD5DE7';
            $IAM_SECRET = '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';

            $gallery = null;


            if ($s3mode) {
                ///todo later may sore to db so we check db first before chckign online for now we do direct
                try {
                    function scanS3dated($bucketName, $IAM_KEY, $IAM_SECRET)
                    {
                        try {
                            $s3 =
                                new S3Client([
                                    'version' => 'latest',
                                    'scheme' => 'http',
                                    'region'  => 'us-west-2',
                                    'credentials' => [
                                        'key' => $IAM_KEY,
                                        'secret' => $IAM_SECRET
                                    ],
                                ]);
                        } catch (Exception $e) {
                            die(" CX Error: " . $e->getMessage());
                        }

                        $folder = "showroom/";
                        $results = $s3->getPaginator('ListObjects', [
                            'Bucket' => $bucketName,
                            "Prefix" => $folder
                        ]);

                        $files = [];

                        foreach ($results as $result) {
                            foreach ($result['Contents'] as $object) {
                                // //echoOBJECT: ".json_encode($object) . PHP_EOL;
                                if ($object['Key'] == $folder) {
                                    //echo container ";
                                } else {
                                    $files[basename($object['Key'])] = basename($object['LastModified']);
                                }
                            }
                        }


                        //arsort($files);
                        $files = array_keys($files);
                        shuffle($files);
                        //      print_r($files);

                        return ($files) ? $files : false;
                    }
                    $files = scanS3dated($bucketName, $IAM_KEY, $IAM_SECRET);
                } catch (S3Exception $e) {
                    echo $e->getMessage() . PHP_EOL;
                }
            } else {
                // $gallery = dirname(__DIR__) . '/www/gallery/img/gallery';///TODO REVISIT ERRORS ABOUT HOSTING DIRECT ON THE ROOT is frustrating
                // echo $gallery;
                $gallery = './gallery/img/gallery';
                try {
                    function scandirdated($dir)
                    {
                        $ignored = array('.', '..', '.svn', '.htaccess');
                        $files = array_diff(scandir($dir), $ignored);;
                        foreach (scandir($dir) as $file) {
                            if (is_file($dir . "/" . $file)) {
                                $files[$file] = filemtime($dir . '/' . $file);
                            } else {
                                //            echo "\n not file ";
                            }
                        }

                        //arsort($files);
                        $files = array_keys($files);
                        shuffle($files);
                        //      print_r($files);

                        return ($files) ? $files : false;
                    }
                    $files = scandirdated($gallery);
                } catch (Exception $e) {
                    echo $e->getMessage() . PHP_EOL;
                }
            }
        ?>
        <!-- WATERFALL GALLERY FOR MOBILE DEVICES -->
        <div id="waterfallGallery" class="waterfall-gallery-wrapper">
            <?php
                if ($s3mode) {
                    //echo s3 mode ";
                    $s3 = new S3Client(
                        [
                            'credentials' => array(
                                'key' => $IAM_KEY,
                                'secret' => $IAM_SECRET
                            ),
                            'version' => 'latest',
                            'region'  => 'us-west-2'
                        ]
                    );
                    $first=true;
                    for ($x = 0; $x < count($files); $x += 4) {
                        $file = $files[$x];
                        $keyName = 'showroom/' . $file;
                        // $pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . url_encode($keyName); wont work as i rather need withth + nt %20 at spaces
                        //echoKeyname " . $keyName;

                        ///are already files bcz of base name * TODO 11111  LATER HUH WCH MAY MEAN OT FILTER IN ABOVE FRM GALLERY TO  NT JST TAKE BASENAME BT RATHE RONLY THOSE AT TH BASE FOLDE RITSLF NOT DEEPER
                        $result = $s3->getObject(array( //seems to jst test existnce
                            'Bucket' => $bucketName,
                            'Key'    => $keyName
                        )); //confirming existnce
                        $pathInS3 = $s3->getObjectUrl($bucketName, $keyName);
                        if($first){
                    ?>
                            <img id="firstWaterfallImg" class="waterfall-image" src="<?php echo $pathInS3; ?>" alt="" />
                    <?php
                            $first=false;
                        }else{

                    ?>
                            <img id="waterfall-image" class="waterfall-image" src="<?php echo $pathInS3; ?>" alt="" />
                    <?php

                        }
                    }
            ?>
            <?php
                }else{
                    $first=true;
                    for ($x = 1; $x < count($files); $x++) {
                        $file = $files[$x];
                        //        echo  $gallery.$file;
                        if (is_file($gallery . "/" . $file)) {
                            if($first){
                                ?>
                                        <img id="firstWaterfallImg" class="waterfall-image" src="<?php  echo $ownpath1;?>gallery/img/gallery/<?php echo $file ?>" alt="" />
                                <?php
                                        $first=false;
                                    }else{

                                ?>
                                        <img id="waterfall-image" class="waterfall-image"src="<?php  echo $ownpath1;?>gallery/img/gallery/<?php echo $file ?>" alt="" />
                                <?php

                                    }
                        } else {
                            //            echo "\n not file ";
                        }
                    }
                }

            ?>
             <!-- WATERFALL GALLERY FOR MOBILE DEVICES -->
            <div id="waterfallGallery" class="waterfall-gallery-wrapper">

                <?php
                    if ($s3mode) {
                        //echo s3 mode ";
                        $s3 = new S3Client(
                            [
                                'credentials' => array(
                                    'key' => $IAM_KEY,
                                    'secret' => $IAM_SECRET
                                ),
                                'version' => 'latest',
                                'region'  => 'us-west-2'
                            ]
                        );
                        $first=true;
                        for ($x = 0; $x < count($files); $x += 4) {
                            $file = $files[$x];
                            $keyName = 'showroom/' . $file;
                            // $pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . url_encode($keyName); wont work as i rather need withth + nt %20 at spaces
                            //echoKeyname " . $keyName;

                            ///are already files bcz of base name * TODO 11111  LATER HUH WCH MAY MEAN OT FILTER IN ABOVE FRM GALLERY TO  NT JST TAKE BASENAME BT RATHE RONLY THOSE AT TH BASE FOLDE RITSLF NOT DEEPER
                            $result = $s3->getObject(array( //seems to jst test existnce
                                'Bucket' => $bucketName,
                                'Key'    => $keyName
                            )); //confirming existnce
                            $pathInS3 = $s3->getObjectUrl($bucketName, $keyName);
                            if($first){
                        ?>
                                <img id="firstWaterfallImg"  class="waterfall-image" src="<?php  echo $pathInS3;?>" alt="" />
                        <?php
                                $first=false;
                            }else{
                        ?>
                                <img class="waterfall-image" src="<?php echo $pathInS3;?>" alt="" />
                        <?php
                            }
                    }
                ?>
                <?php
            //   var_dump($files);
                    }else{
                        $first=true;
                        for($x=1;$x<count($files);$x++ ){

                            $file=$files[$x];
                    //        echo  $gallery.$file;
                            if (is_file($gallery."/".$file)) {
                                if($first){
                    ?>
                                    <img
                                        id="firstWaterfallImg"
                                        class="waterfall-image"
                                        src="<?php  echo $ownpath1;?>gallery/img/gallery/<?php echo $file ?>"
                                        alt=""
                                    />
                    <?php
                                    $first=false;

                                }else{
                    ?>
                                    <img class="waterfall-image" src="<?php echo $ownpath1;?>gallery/img/gallery/<?php echo $file ?>" alt="" />
                    <?php
                                }
                            } else {
                    //            echo "\n not file ";
                            }
                        }
                    }
                ?>
            </div>
        </div>


        <!-- MOUSE OVERLAY GALLERY FOR COMPUTERS -->
        <div id="overlayGallery" class="overlay-gallery-wrapper">
            <?php
                if ($s3mode) {
                    //echo s3 mode ";
                    $s3 = new S3Client(
                        [
                            'credentials' => array(
                                'key' => $IAM_KEY,
                                'secret' => $IAM_SECRET
                            ),
                            'version' => 'latest',
                            'region'  => 'us-west-2'
                        ]
                    );

                    $first=true;
                    for ($x = 0; $x < count($files); $x++) {

                        $file = $files[$x];
                        $keyName = 'showroom/' . $file;

                        $result = $s3->getObject(array( //seems to jst test existnce
                            'Bucket' => $bucketName,
                            'Key'    => $keyName
                        )); //confirming existnce
                        $pathInS3 = $s3->getObjectUrl($bucketName, $keyName);
                        if($first){

                    //   var_dump($files);
            ?>
                            <img id="firstOverlayImg" class="overlay-image" src="<?php echo $pathInS3; ?>" alt="" />

            <?php
                            $first=false;
                        }else{
            ?>
                            <img class="overlay-image" src="<?php echo $pathInS3; ?>" alt="" />

            <?php
                        }
                    }

            ?>
            <?php
                }else{
                    $first=true;
                    for ($x = 0; $x < count($files); $x++) {

                        $file = $files[$x];
                        //        echo  $gallery.$file;
                        if (is_file($gallery . "/" . $file)) {
                            if($first){

                    //   var_dump($files);
            ?>
                                <img id="firstOverlayImg" class="overlay-image" src="<?php echo $ownpath1; ?>gallery/img/gallery/<?php echo $file ?>" alt="" />

            <?php
                                $first=false;
                            }else{
            ?>
                                <img class="overlay-image" src="<?php echo $ownpath1; ?>gallery/img/gallery/<?php echo $file ?>" alt="" />

            <?php
                            }

                        } else {
                            //            echo "\n not file ";
                        }
                    }
                }
            ?>
      </div>
        
      <!-- OLD GALLERY -->
            <!-- <div class="container">
            <div class="row gallery-filter">
                <div class="col-lg-6 mix all fashion">
                    <div class="gs-item">
                        <img src="img/gallery/gallery-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all model">
                            <div class="gs-item">
                                <img src="img/gallery/hih1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/gallery/hih2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all other">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all fashion">
                            <div class="gs-item">
                                <img src="img/gallery/hih3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/gallery/hih4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all model other">
                            <div class="gs-item">
                                <img src="img/gallery/hih5.jpg" alt="">
                            </div>
                        </div>
                         <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-9.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all model other">
                            <div class="gs-item">
                                <img src="img/gallery/hih6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mix all fashion event">
                    <div class="gs-item">
                        <img src="img/gallery/gallery-8.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mix all fashion event">
                    <div class="gs-item">
                        <img src="img/gallery/gallery-11.jpg" alt="">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all model">
                            <div class="gs-item">
                                <img src="img/gallery/hih7.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-13.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all other">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-14.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all fashion">
                            <div class="gs-item">
                                <img src="img/gallery/hih8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-16.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all model other">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-17.jpg" alt="">
                            </div>
                        </div>
                         <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-18.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all model other">
                            <div class="gs-item">
                                <img src="img/gallery/gallery-19.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>   
                
                <div class="col-lg-6 mix all fashion event">
                    <div class="gs-item">
                        <img src="img/gallery/gallery-20.jpg" alt="">
                    </div>
                </div>
                  
            </div>
        </div> -->
    </div>
    <!-- Gallery Section End -->


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
                             <li><a href="./aboutus.php">About us</a></li>
                            <li ><a href="./showroom.php" >ShowRoom</a></li>
                             <li ><a href="./Blog/index.php">Blog</a>
                            </li>
                            <li ><a href="./install.php">Download</a>
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
                              
                              
                              <a button class="bt btn-three" href="">
                                <img src="gallery/img/BLK.jpg" alt="">
                              </a>
                        </li>
                        <li>
                           
                         <a button class="bt btn-three" type=""href="">
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
            <!-- End Copyright Container -->
        </div>
        
    </section>
    <!-- Js Plugins -->
    <script src="gallery/js/jquery-3.3.1.min.js"></script>
    <script src="gallery/js/bootstrap.min.js"></script>
    <script src="gallery/js/jquery.magnific-popup.min.js"></script>
    <script src="gallery/js/mixitup.min.js"></script>
    <script src="gallery/js/jquery.slicknav.js"></script>
    <script src="gallery/js/owl.carousel.min.js"></script>
    <script src="gallery/js/main.js"></script>
    <script src="gallery/js/modernizr-touchevets.js"></script>
    <script src="gallery/js/mouse.js"></script>
    <script>
        if (!Modernizr.touchevents) {
            /* MOUSE OVERLAY GALLERY FOR COMPUTERS */
            const overlayGallery = document.getElementById("overlayGallery");
            const allOverlayImgs = document.querySelectorAll(".overlay-image");
            let currentImg = document.getElementById("firstOverlayImg");
            let shownImgs = [];
            let zIndex = 1;
            let globalX = 0;
            let globalY = 0;
            let threshold = 80;

            var allImgs = allOverlayImgs;
            var firstImg = currentImg;

            overlayGallery.style.display = "block";

            overlayGallery.addEventListener("mousemove", function(e) {
                let x = e.clientX;
                let y = e.clientY - overlayGallery.getBoundingClientRect().y;

                if (
                    x > globalX + threshold ||
                    x < globalX - threshold ||
                    y > globalY + threshold ||
                    y < globalY - threshold
                ) {
                    globalX = x;
                    globalY = y;
                    currentImg.style.display = "block";
                    currentImg.style.top = `${y}px`;
                    currentImg.style.left = `${x}px`;
                    currentImg.style.zIndex = zIndex;
                    zIndex++;

                    if (shownImgs.length < 6) {
                        shownImgs.push(currentImg);
                    }
                    if (shownImgs.length > 5) {
                        shownImgs.shift();
                    }

                    allOverlayImgs.forEach(image => {
                        if (!shownImgs.includes(image)) {
                            image.style.display = "none";
                        }
                    });

                    if (!currentImg.nextElementSibling) {
                        currentImg = document.getElementById("firstOverlayImg");
                    } else {
                        currentImg = currentImg.nextElementSibling;
                    }
                }
            });
        } else {
            /* WATERFALL GALLERY FOR MOBILE DEVICES */
            const waterfallGallery = document.getElementById("waterfallGallery");
            const allWaterfallImgs = document.querySelectorAll(".waterfall-image");

            var allImgs = allWaterfallImgs;
            var firstImg = document.getElementById("firstWaterfallImg");

            waterfallGallery.style.display = "grid";

            allWaterfallImgs.forEach(img => {
                let tx = Math.floor(Math.random() * 40) + 5;
                let ty = Math.floor(Math.random() * 81) + 41;
                img.style.setProperty("--tx", `${tx}vw`);
                img.style.setProperty("--ty", `-${tx}%`);

                img.addEventListener("click", function() {
                    currentModalImg = img;
                    galleryModalImg.setAttribute(
                        "src",
                        currentModalImg.getAttribute("src")
                    );
                    $("#galleryModal").css({
                        display: "flex"
                    });
                    $("#galleryModal").animate({
                        opacity: 1
                    }, 200);
                });
            });
        }

        /* MODAL */
        const galleryModal = document.getElementById("galleryModal");
        const galleryModalImg = document.getElementById("galleryModalImg");
        const closeModal = document.getElementById("closeModal");
        let currentModalImg;

        galleryModal.onclick = function(e) {
            if (e.target != closeModal) {
                if (!currentModalImg.nextElementSibling) {
                    currentModalImg = firstImg;
                } else {
                    currentModalImg = currentModalImg.nextElementSibling;
                }
                galleryModalImg.setAttribute(
                    "src",
                    currentModalImg.getAttribute("src")
                );
            }
        };

        $("#closeModal").click(function() {
            $("#galleryModal").animate({
                opacity: 0
            }, 200, function() {
                $("#galleryModal").css({
                    display: "none"
                });
            });
        });

        allImgs.forEach(img => {
            img.addEventListener("click", function() {
                currentModalImg = img;
                galleryModalImg.setAttribute(
                    "src",
                    currentModalImg.getAttribute("src")
                );
                $("#galleryModal").css({
                    display: "flex"
                });
                $("#galleryModal").animate({
                    opacity: 1
                }, 200);
            });
        });
    </script>
    
   <script>

$(document).ready(function(){
     $("#capture").hide();
    $("#email").keyup(function(){
			if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#email").css("border","2px solid green");
				// and set label 
				$("#emailMsg").html("<p class='text-success'>Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#email").css("border","2px solid red");
				$("#emailMsg").html("<p class='text-danger'>Un-validated</p>");
			}
			buttonState();
		});

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
 
function buttonState(){
		if(validateEmail()){
			// if the both email and password are validate
			// then button should show visible
			$("#capture").show();
		}else{
			// if both email and pasword are not validated
			// button state should hidden
			$("#capture").hide();
		}
	}
    
    function validateEmail(){
		// get value of input email
		var email=$("#email").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }

	}

</script>
</body>

</html>
