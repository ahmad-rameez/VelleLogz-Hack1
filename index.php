<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VelleLogz</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="css/VelleLogz.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="fontA/css/font-awesome.min.css">
    <script>
       $(function(){
       $( "#datepicker" ).datepicker();
       });    
    </script>
    <script>
       $(function(){
       $( "#datepicker2" ).datepicker();
       });    
    </script>
    
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="page-header" background-image="E:\hackathon\images\header.jpg">
            <h1 id="fontt" style="font-size: 30px">VelleLogz</h1>
            <span style="cursor: default"><a href="#">Log In </a>|<a href="#"> Sign Up</a></span>
            <div class="short">
                <form>
                <input type="text" placeholder="Search" id="myinput /">
                <div id='button-holder'>
                    <img src='E:\Web Designing\images\download.png' />
                </div>
                </form>
            </div>
        </div>
    <div class="nav1"></div>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">My Bookings</a></li>
        <li><a href="#contact">Baggage</a></li>
        <li><a href="#flight status">Flight Status</a></li>
        
        <li style="float:right"><a class="active" href="#about">Contact Us</a></li>
    </ul>
     </div>
    </div>
        
        
        
        
            
        <h2>Flight Bookings</h2>
        <div>
            <form action="php/search_flight.php" method="post" >
                <input type="radio" name="trip">  <b style="font-size: 20px" >Round Way</b>   
                <input type="radio" name="trip">  <b style="font-size: 20px">One Way</b>
                <input type="radio" name="trip">  <b style="font-size: 20px">Multicity</b>
                <div>
                <table>
                     <tr>
                         <td height="50%"><input type="text" name="from" placeholder="     From" style="border:1px solid #111111; border-radius:30px;" \></td>
                         <td height="50%"><input type="text" name="to" placeholder="     To" style="border:1px solid #111111;border-radius:30px" \></td>
                         <td height="50%"><input type="text" id="datepicker" placeholder="     Depart" style="border:1px solid #111111;border-radius:30px" \></td>                    
                         <td height="50%"><input type="text" id="datepicker2" placeholder="     Return" style="border:1px solid #111111;border-radius:30px" \></td>
                         <td height="50%"><input type="text" placeholder="     No.of Passengers" style="border:1px solid #111111;border-radius:30px" \></td>
                         <td height="50%"><button type="submit" name="search" form="form1" value="Search Flights" class="button">Search Flights</button></td>
                    </tr>
                </table>
                </div>
            </form>   
        </div>
        
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
      <img src="E:\hackathon\images\22.jpg" alt="Offers" width="1330" height="300">
    </div>

    <div class="item">
      <img src="E:\hackathon\images\55.jpg" alt="" width="1330" height="300">
    </div>

    <div class="item">
      <img src="E:\hackathon\images\11.jpg" alt="" width="1330" height="300">
    </div>
    <div class="item">
      <img src="E:\hackathon\images\11.jpg" alt="" width="1330" height="300">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
        </div> 
        <hr/>
    
     <footer>
    <pre>
     <b style="font-size: 20px">Get to know us</b>                        <b style="font-size: 20px">Services</b>                                 <b style="font-size: 20px">Talk to Us</b>                            
     
     
     <div style="float: right; cursor:default">
 <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
 <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i> 
 <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i> 
 <i class="fa fa-twitter fa-3x" aria-hidden="true"></i> 
 <i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i>
                   </div>
     About Us                                      Cargo                                        Contact Us                  
     Press Releases                                Special/Disability Assistance                International Reservation Offices
     Board of Directors                            Medical Assistance                           Fulfillment Center
     Leadership Team                               Group Booking                                Advertise
     InterGlobe Enterprises                        Disclaimer                                   Feedback
     Conditions of Carriage                        Terms and Conditions                         Site Map
     Awards                                        Privacy
     FAQs                                          Web Check-In
     Investor Relation                             Track your Bag
                                                        
    
      
               

                                                                &copy;Copyright 2017 <b>VelleLogz</b> Pvt.Ltd 
                                                Contact information:<b>Helpline:</b>1800-545-7891 E-mail:<a href="mailto:someone@example.com">Velle.logz@gmail.com</a>

                                                 
    </pre>  
 </footer>

        </div>
   
    <!--container end-->
    
    
    
    
    
    
    
    
    

</body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>