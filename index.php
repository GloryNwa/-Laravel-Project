<?php
session_start();


?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, inital-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <Title>IMM</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">
<!--     <link rel="stylesheet" href="style2.css"> -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/responsive.css" type="text/css">

  <!-- Color Scheme -->
  <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
  <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
  <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
  <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
  <link rel="alternate stylesheet" href="/color-schemes/color5.css" title="color5">
</head>
<body id="body" style="background-color: #272c33;margin-bottom: 100px; margin-top: 100px ">
   
     <div class="container">
          
     <h1 class="brand"><center><span> </span></center></h1>
     <div class="wrapper animated bounceInLeft">
       <div class="Web-Design" style="background-color: #535353;">      
         <center><img src="LIVESTREAM.app" style="padding-right: "></center>      
      </div>

       <div class="contact"style="background-color: #c0c0c0;">
     <?php 
       if (isset( $_SESSION['alert'])){
         echo  $_SESSION['alert']; 
         unset( $_SESSION['alert']);
       }
      ?>
        <h3 style="color: black;"> Kindly fill in your details:</h3><hr><br>
          <!-- <div class="alert">Your message has been submitted</div>  -->    
           <!-- Form> Valdation-->

        <form action="index2.php" method="POST"> 
        <div class="formarea">
          <div class="form-group">
          
          Name:<br>
                <input class="brd-rd5" type="text" class="form-control" name="name" value="" required="required" style="width: 100%; height: 50px"/>
             
                  <span class="help-block">
                   <p></p>
                 </span>                         
                </div>
               <div class="form-group">
          Email Adrress:<br>
                <input class="brd-rd5" type="email" class="form-control"   name="email" value="" required="required" style="width: 100%; height: 50px; overflow: hidden" />
              
                  <span class="help-block">
                   <p></p>
                 </span>                         
                </div>
                 <div class="form-group">
          Phone No:<br>
                <input class="brd-rd5" type="text" class="form-control"   name="phone" value="" required="required" style="width: 100%; height: 50px; overflow: hidden" />
              
                  <span class="help-block">
                   <p></p>
                 </span>                         
                </div>
               <div class="form-group">
          Church Name:<br>
                <input class="brd-rd5" type="text" class="form-control"   name="church" value="" required="required" style="width: 100%; height: 50px"/>
              
                  <span class="help-block">
                   <p></p>
                 </span>  
                </div>  <br> <hr>                    
              </div>
		             <h5 style="color: black">Select Services:</h5>
		            
		            <input type="checkbox" name="services[]" value="The Future Church" />&nbsp;The Future Church<br /><br>

		            <input type="checkbox" name="services[]" value="IEP" />&nbsp;IEP<br /><br>

		            <input type="checkbox" name="services[]" value="Ceflix Media Services" />&nbsp;Ceflix Media Services<br />
                <br>
                <hr>        
              <p>
               <label><h5 style="color: black;">Comments:</h5></label>
               <textarea name="comments" rows="2" id="comments" required></textarea> 
            </p>
            <p class="full"style="background-color:#272c33">
              <button type="submit" name="submit" value="submit" class="btn btn-danger">Submit</button>
            </p>
          </form>
          </div>
       
     <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
    <script src="main.js"></script>
   <body>
</html>





