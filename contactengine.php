<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@firmabello.de";
 
    $email_subject = "Firmabello";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Something went wrong ";
 
        echo "Please retry filling the form <a href='contact.php'>Contact Form</a>.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||  
 
      

        !isset($_POST['email']) ||

       
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
 

    $email = $_POST['email']; // required

   
 
    $message = $_POST['comments']; // required
 

 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    //$email_message .= "Phone: ".clean_string($phone)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    //$email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "comments: ".clean_string($message)."\n";
    
    $email_message .= "From Firmabello Contact Page ";
 
     
 
     
 
// create email headers
 
$headers = 'From : '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 


  <!DOCTYPE HTML>
<html lang="en">
    

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Contact  - Firmabello BE LTD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============--> 
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.jpg">
    </head>
    <body>
        <!-- loader -->
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->   
            <header>
                <!-- header-inner  -->
                <div class="header-inner">
                    <!-- header logo -->
                    <div class="logo-holder">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- header logo end -->
                    <!-- mobile nav button -->
                    <div class="nav-button-holder">
                        <div class="nav-button vis-m"><span></span><span></span><span></span></div>
                    </div>
                    <!-- mobile nav button end -->
                    <!-- navigation  -->
                    <div class="nav-holder">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html" class="act-link">Home</a>
                                    <!--second level -->
                       
                                <li>
                                    <a href="about.html">About us </a>
                                    <!-- Scroll navigation  -->
                                </li>
                                <li>
                                    <a href="whyfirmabello.html">Why Firmabello BE </a>
                                    <!-- Scroll navigation  -->
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                               
                                    <!--second level end-->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
                <!-- header-inner  end -->
                <!-- share button  -->
                
                <!-- share  end-->
            </header>
            <!--=============== wrapper ===============-->  
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder">
                    <!-- Page title -->
                    <div class="dynamic-title">Contacts</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="images/bg/4.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2> <strong> Thank you. Your Message is under review. </strong></h2>
                                        </div>
                                        <div class="col-md-6">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- content end -->
                    <!-- content  -->
                  
                    <!-- content  end  -->        
                    <!-- content   --> 
         
                    <!-- content end -->
                    <!-- content footer-->
                    <div class="height-emulator"></div>
                    <footer class="content-footer">
                        <!--  container  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Footer logo --> 
                                    <div class="footer-item footer-logo">
                                        <a href="index.html" class="ajax"><img src="images/footer-logo.png" alt=""></a>
                                        <p>FirmaBello BE Ltd is a registered company in Germany that trades on commodities. Working with seasoned and highly skilled Partners, the company delivers lasting solutions to its clients in a consistent manner.  </p>
                                    </div>
                                    <!-- Footer logo end --> 
                                </div>
                                <!-- Footer info --> 
                            
                                <!-- Footer info end--> 
                                <!-- Footer info --> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link">Write</h4>
                                        <ul>
                                            <li><a href="#">info@firmabello.com</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info-->
                                <!-- Footer info end--> 
                               
                                <!-- Footer info end--> 
                            </div>
                            <!-- Footer copyright -->
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="footer-wrap">
                                        <span class="copyright">  &#169;   FirmaBello BE & Partners. All Rights Reserved 
                                        </span>
                                        <span class="to-top">To Top</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer copyright end -->
                        </div>
                        <!--  container  end --> 
                        <!-- Hover animation  -->
                        <canvas class="particular"></canvas>
                        <!-- Hover animation  end -->
                    </footer>
                    <!-- content footer end -->
                    <!-- share  -->
                    <div class="share-inner">
                        <div class="share-container  isShare"  data-share="['facebook','googleplus','twitter','linkedin']"></div>
                        <div class="close-share"></div>
                    </div>
                    <!-- share end -->
                </div>
                <!-- content-holder  end-->
            </div>
            <!-- wrapper end -->
            <!-- Fixed footer -->
            <footer class="fixed-footer">
                <div class="footer-social">
                 
                </div>https://www.facebook.com/firmabellobegroup/
                <!-- Header  title --> 
                <div class="footer-title">
                    <h2><a  href="#"></a></h2>
                </div>
                <!-- Header  title  end-->
            </footer>
            <!-- Fixed footer end-->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body> 
 
 
<?php
 
}
 
?>