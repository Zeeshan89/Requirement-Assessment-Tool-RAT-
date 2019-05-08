
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> RAT</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/modal.js"></script>

<script type="text/javascript" src="assets/js/carousel.js"></script>
<script type="text/javascript" src="assets/js/collapse.js"></script>
<script type="text/javascript" src="assets/js/transition.js"></script>
<script type="text/javascript" src="assets/js/tab.js"></script>
<script type="text/javascript" src="assets/js/dropdown.js"></script>
 <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color:black;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #330033;
      font-size: 50px;
  }
  .logo {
    margin-top: 120px;
      color: black;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #303030;
  }
  .carousel-indicators li {
      border-color: #303030;
  }
  .carousel-indicators li.active {
      background-color: #303030;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #330033;
      background-color: #fff !important;
      color: #330033;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #330033;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: purple;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar  {
     
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #330033 !important;
      background-color: #E8DAEF !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #330033;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
  <script type="text/javascript" src="assets/js/transition.js"></script>
 </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'c4149679-4dea-40f4-b31d-e14bd43388af', f: true }); done = true; } }; })();</script>


  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right" >
        <li><a href="#about" style="color: #fff;">ABOUT</a></li>
        <li><a href="#services" style="color: #fff;">SERVICES</a></li>
        <li><a href="#portfolio" style="color: #fff;">VIEWS</a></li>
      
        <li><a href="#contact" style="color: #fff;">CONTACT</a></li>
         <li><a href="Final year project/index.php" style="color: #fff;">LOGIN</a></li>
 
      </ul>
    
    </div>
  </div>
</nav>

<div >

  <div class="jumbotron text-center"> <span style="float: left;  margin-left: 420px;"><img src="pic.jpg " width="150" height="130"></span>
  <h1 style="  margin-right: 370px;">RAT Tool</h1>  <p style=" margin-right: 370px;">Requirement Assessment tool</p>
 </div>
</div>


<div  class=" text-center ">
<h4 align="center"><b>Check your requirements quality online.</b></h4>
</div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row" style="text-align: justify;">
    <div class="col-sm-8">
      <h2>About RAT Tool</h2><br>
     <h4> <p> System/Software Requirements Specifications SRSs are the first tangible product of most development life cycles and one of the major sources of problems in later phases. In order to better understand the source of these problems and seek a method for detecting them as early as possible.Most requirements documents are still written in natural language, and often, it’s the inherent ambiguities of natural language that cause requirements errors.
Finding ways to analyze natural language text and identify possible sources of requirements errors has been a difficult problem to solve. A requirements (bad) smell is a concrete symptom for a requirement artifact's quality defect in the usage context of a certain activity. In contrast to requirements de-
fects, a requirements smell only shows a concrete indication for bad quality. It is easier to not find quality, but symptoms of violations of quality, because they often leave concrete trace in the artifacts. </p></h4>

<p style="font-size: 17px; color: rgb(0,0,0); "> The approach followed by the tool was to <b>(1)</b> define the characteristics that should be exhibited by
a SRS, <b>(2)</b> identify what could be measured, <b>(3)</b> develop indicators of quality, <b>(4)</b> develop a tool to perform the
measurements, <b>(5)</b> analyze the SRS documents <b> (6)</b> identify underlying problems on basis of poor words in SRS <b>(7)</b> Analyze and address quality for single requirements and full SRS  <b>(8)</b> develop recommended practices to preclude the problems.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-file logo"></span>
    </div>
  </div>
</div>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4> Quality Assessment </h4>
      <p>Individual requirements and SRS..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-duplicate logo-small"></span>
      <h4> Nonambiguity </h4>
      <p>Indication of poor words(Vagues)..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4> Verifiability </h4>
      <p>On the basis of strong phrases and weak phrases..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-thumbs-up logo-small"></span>
      <h4>Completeness </h4>
      <p>Of Individual requirements and SRS..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-ok logo-small"></span>
      <h4>Correctness</h4>
      <p>By handling poor words..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-road logo-small"></span>
      <h4 >Consistency</h4>
      <p>By indicating conflicts in requirements..</p>
    </div>
  </div>
</div>



<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Some Views</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="single.png">
        <img src="single.png" alt="Individual Requirement" width="500" height="400"> </a>
        <p><strong>Individual Statements</strong></p>
        <p>Yes, Single Statements</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="ij.png">
        <img src="ij.png" alt="TriggerWords" width="500" height="400"></a>
        <p><strong>Trigger words</strong></p>
        <p>Words that we conclude</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
         <a href="wq.png">
        <img src="wq.png" alt="Complete SRS" width="500" height="400"> </a>
        <p><strong>Requirement Specification Document</strong></p>
        <p>Yes, we also do Full SRS</p>
      </div>
    
    </div>
  </div><br>
  
  <h2>What our Users say</h2> 
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This tool is the best. I am so happy with the result!"<br><span>Michael Roe, requirement engineer, Comment Box </span></h4>
      </div>
      <div class="item">
       <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc </span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more satisfied with this tool?"<br><span>Chandler Bing, Actor, FriendsAlot </span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="color: rgb(0,0,0);">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="color: rgb(0,0,0);">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> MBDIN, PAK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +92 090078601</p>
      <p><span class="glyphicon glyphicon-envelope"></span> zeeshanxh@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form method="POST" action="index.php" enctype="multipart/form-data">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
   
          <input class="btn btn-default pull-right" type="submit" name="send" value="Send"> 


          </form>
        </div>
      </div>
    </div>

  </div>
  
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>To Top</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
<?php
 require_once 'database1.php';
if (isset($_POST['send'])) {
  # code...

 $name= $_POST['name'];
      $email= $_POST['email'];
      $com= $_POST['comments'];
       

    if($name=='' OR  $email== '' OR  $com==''){
      
      echo "<script> alert('please fill all fields')</script>";
      exit();
      
      }
      else
      {
  
      
      $insert= "insert into contact (name,email,description,date)
      
values('$name','$email','$com',NOW())";
        $run_query=mysqli_query($connection,$insert);
        
        if($run_query){

          echo "<script>alert('Your Feedback is submitted, We will shortly reply you back')</script>";
          
          }
          else
          {
            echo "<script>alert('Feedback not submitted, provide correct information ')</script>";
          } 

    
    }
}

?>
