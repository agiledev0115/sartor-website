<?php ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: "apexmk2", apexmk2;
      font-size: 14px;
      color: #666;
      }
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #e2502c;
      }
      p {
      margin: 0 0 5px;
      }
        .header-section {
	background: #191919;
}
        .header-section .container {
		position: relative;
	}
        .logo {
	padding: 24px 0 30px;
}

.logo a {
	display: inline-block;
}

.main-menu {
	text-align: right;
}

.main-menu ul li {
	display: inline-block;
	list-style: none;
	margin-left: 35px;
	position: relative;
}

.main-menu ul li .dropdown {
	position: absolute;
	width: 180px;
	background: #ffffff;
	z-index: 99;
	left: 0;
	top: 90px;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.main-menu ul li .dropdown li {
	display: block;
	margin-right: 0;
	text-align: left;
	margin-left: 0;
}

.main-menu ul li .dropdown li a {
	padding: 8px 20px;
	display: block;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
	text-transform: capitalize;
	color: #191919;
}

.main-menu ul li .dropdown li a:hover {
	color: #e2502c;
}

.main-menu ul li.active a {
	color: #e2502c;
}

.main-menu ul li:hover>a {
	color: #e2502c;
}

.main-menu ul li:hover .dropdown {
	opacity: 1;
	visibility: visible;
	top: 70px;
}

.main-menu ul li a {
	font-size: 16px;
	color: #ffffff;
	font-weight: 700;
	display: inline-block;
	padding: 25px 0 30px;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.slicknav_menu {
	display: none;
}


      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #e2502c;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>
  </head>
  <body>
       <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="gallery/img/logo.png" alt="" width="80" height="80">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form method="POST"  action="./gallery/htmlemailform/mail/formsendemil.php" >
        <h1>Contact Us</h1>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="name" placeholder="Email">

          <input type="text" name="name" placeholder="Phone number">
          <div>
                <select>
                  <option selected value="" disabled selected>Im the...</option>
                  <option value="1">SELLER</option>
                  <option value="2">Business Brand</option>
                  
                </select>
              </div>
        </div>
        <p>Message</p>
        <div>
          <textarea rows="4"></textarea>
        </div>
        <button type="submit" >Submit</button>
      </form>
    </div>
      
      <!-- Customise the Thankyou Message People See when they submit the form: -->
    <div style="display:none;" id="thankyou_message">
        <h2>
            <em>Thanks</em> for Sigining up for Sartor Beta!
            We will get back to you soon!
        </h2>
    </div>


    
      
      <script>
function myFunction() {
  alert("The form was submitted");
}
</script>

      <script>
    function pageRedirect() {
       var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      window.location.href = 'https://sartor.io';
    }
  };
  xhttp.open("POST", "https://script.google.com/macros/s/AKfycbwmwU17cCzV-17kY8B-f_a0s6mDgniyx7-i_szxO28xuiY5mvQ/exec", true);
  xhttp.send();
    }      
</script> 
      
       <script>
        function checkRegistration(){
            if(!form_valid){           
                return false;
            }
            window.location.href = 'https://sartor.io';
            return true;
        }
        </script>

  </body>
</html>