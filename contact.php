<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DZIWONU EAGLE CONCEPT| CONSTRUCTION </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
.erroralert {
  padding: 20px;
  background-color: red;
  color: white;
}
.successalert {
  padding: 20px;
  background-color: green;
  color: white;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.hidden{
	display: none;
}
</style>
</head>

<body>
    

    <div class="wrapper">
        <div id="header" class="htc-header">
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/logo.png" alt="logo image">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-5">
                            <nav class="main__menu__nav  hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li ><a href="index.php">HOME</a></li>
                                    <li><a href="index.php#about">ABOUT</a></li>
                                    <li><a href="index.php#services">SERVICES</a></li>
                                    <li><a href="projects.php">PROJECTS</a> </li>
                                    <li><a href="#">CONTACT US</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li ><a href="index.php">HOME</a></li>
                                        <li><a href="index.php#about">ABOUT</a></li>
                                        <li><a href="index.php#services">SERVICES</a></li>
                                        <li><a href="projects.php">PROJECTS</a> </li>
                                        <li><a href="#">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div> 
                        </div>
                       
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
        </div>



        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">CONTACT</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">Contact</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Address -->
        <section class="htc__contact__area bg__white ptb--150">
            <div class="container">
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="htc__contact__form__wrap">
                            <h2 class="title__line--5">SEND US A MESSAGE</h2>
                            <div class="contact-form-wrap">
                                <form id="contact-form" method="post" action="" >
                                    <div class="single-contact-inner">
                                        <div class="single-contact-form">
                                            <div class="contact-box name">
                                                <span>Your Name*</span>
                                                <input id="name" type="text" name="name" required="true">
                                            </div>
                                            <div class="contact-box email">
                                                <span>Your Email*</span>
                                                <input id="email" type="email" name="email" required="true">
                                            </div>
                                            <div class="contact-box subject">
                                                <span>Subject*</span>
                                                <input id="subject" type="text" name="subject" required="true">
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                            <div class="contact-box message">
                                                <span>Message*</span>
                                                <textarea id="message" name="message" required="true"></textarea>
                                            </div>
                                            <div class="contact-btn">
                                                <button type="submit" class="htc__btn btn--theme">SEND NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id = "erroralert" class="erroralert hidden">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  We are sorry, your message couldn't reach us. Kindly try again or contact us directly at info@dziwonueagleconcept.com.
</div>

<div id = "successalert" class="successalert hidden">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  Your message has reached us. We'll get back to you shortly.
</div>     

<div id = "sending" class="successalert hidden">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  Sending message, please wait.......
</div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include 'footer.php'?>


        <script>
	$("#contact-form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
	//get form values
    $( "#sending" ).removeClass( "hidden" );
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
	

	//submit to php email script
    $.ajax({
        type: "POST",
        url: "smtp.php",
        data: "name=" + name + "&email=" + email+ "&subject=" + subject  + "&message=" + message,

		//get response and update results div
		success : function(response){
            if (response == 1){ 
			formSuccess1();
			}else{
			formError1();
			}

        }
    });
});
		function formSuccess1(){
			$( "#successalert" ).removeClass( "hidden" );
            $( "#sending" ).addClass( "hidden" );
		}
		function formError1(){
			$( "#erroralert" ).removeClass( "hidden" );
            $( "#sending" ).addClass( "hidden" );
		}
		
	
	</script>


</body>



</html>