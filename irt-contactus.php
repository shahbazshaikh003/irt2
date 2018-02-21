<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IRT Technologies</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     
    

</head> 

<body>


<!-- Affix Style Sheet -->
<style>
    .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
         }

    .affix + .container-fluid 
                {
                  padding-top: 10px;
                }

    a{
      
    } 

    .navigation{
      background-color:;
    }         
  </style>

<!--End Of Style --> 
  

  <!-- Top Navigation -->
    <div class="container-fluid  navigation">
        
      <ul class="nav navbar-nav  navbar-right">
        
        <li class="active"><a href="#" style="">LOGIN</a></li>  

        <li class="active"><a href="#" style="">LOCATIONS</a></li>

        <li class="active"><a href="irt-contactus.php" style="">CONTACT US</a></li>

        <li class=""><a href="https://www.facebook.com/admin.irt" style=""><img src="images/facebookblack.png" style="height:23px"></a></li>
        <li class="active"><a href="https://www.linkedin.com/in/irttech" style=""><img src="images/linkedinblack.png" style="height:25px"></a></li>
      </ul>

    </div>
  <!-- End of Top Navigation...-->




  <!-- .................Navigation Bar...................... -->
    <nav class="navbar navbar-default navigation" data-spy="affix" data-offset-top="50">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a href="index.php" class="navbar-brand-logo"><img src="images/irtlogo.png" style="height:50px"></a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                
                <li class=""><a href="index.php" style="">HOME</a></li>
               

               <!-- Drop Down Associates -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="">ASSOCIATES<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="associates/irt-university.php">University</a></li>
                        <li><a href="associates/irt-globalpartner.php">Global</a></li>
                        <li><a href="associates/irt-government.php">Government</a></li>
                        <li><a href="associates/irt-sisterconcern.php">Sister Concern</a></li>
                        
                    </ul>
                </li>
                <!-- #### -->

                <!-- Drop Down Services -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="">SERVICES<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="services/irt-corporate.php">Corporate Training</a></li>
                        <li><a href="services/irt-onlinetraining.php">Technical Support</a></li>
                        <li><a href="services/irt-technical.php">Online Training</a></li>
                    </ul>
                </li>
                <!-- #### -->

      <li><a href="#" style="">ADVISORIES</a> </li>
                  
                  

                <!-- Drop Down Courses -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="">COURSES<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="courses/irt-redhat.php">Red Hat Linux</a></li>
                        <li><a href="courses/irt-cisco.php">CISCO</a></li>
                        <li><a href="courses/irt-microsoft.php">Microsoft</a></li>
                        <li><a href="courses/irt-aws.php">AWS</a></li>
                    </ul>
                </li>
                <!-- #### -->
               
                <li><a href="irt-aboutus.php" style="">ABOUT US</a></li>
               
               

                            
            </ul>
           
            
          </div>
      </nav>

  
  <!--++++++++++++++++NAvigation Bar Ends Here++++++++++++++++ -->


    <!-- .................... Cover Image.......... -->

        <div class="jumbotron" style="">
            <img src="images/contactuscover.jpg" style="width:100%">
        </div>



    <!-- ####################################### -->

    

    <!-- ................ Contact US......... -->

        <!-- Contact Section -->
    <section id="contact" class="contact-section section-padding">
      <div class="container">
        <h2 class="section-title wow fadeInUp" style="position:center"><b>Get In Touch</b></h2>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              
              <div class="row center-xs">
              <div class="col-sm-6">
                <i class="fa fa-map-marker"></i>
                <address>
                  <strong>Address</strong>
                  College Rd, Nashik, Maharashtra 422005, Ramdas Colony, Nashik, Maharashtra 422005<br>
                </address>
              </div>

              <div class="col-sm-6">
                <i class="fa fa-mobile"></i>
                <div class="contact-number">
                  <strong>Phone Number :</strong>
                  0253 662 5100<br>
                </div>
              </div>

              <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                <div class="contact-number">
                  <strong></strong>
                 <br>
                </div>
              </div>

              <div class="col-sm-6">
                <i class="fa fa-comment"></i>
                <div class="contact-number">
                  <strong></strong>
                  <br>
                </div>
              </div>

            </div>
            </div><!-- /.contact-form -->
          </div><!-- /.col-md-6 -->

          <div class="col-md-6">
            <div class="row center-xs">
            
            </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="location-map">
                <div id="mapCanvas" class="map-canvas">  
                   <div id="map" style="width:100%;height:350px"></div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- End Contact Section -->




    <!-- ########### End Contact Us ######### -->

    
    <!-- ..........Script Files....... -->


    <!-- Javascript files -->
    
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(20.005733,73.763458); 
  var mapOptions = {center: myCenter, zoom:13};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
   animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwE5Fj66i2ew1SqAZNzZRORmZLgmxYzB8&callback=myMap"
    async defer></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps-api-v3/api/js/27/2/common.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate"></script>


    <!-- ############# -->




<br>



  <!--..................Footer Section........................ -->

    <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px;background-color: #34495E">
        <div class="container">
            <div class="row" style="height:10px"></div>           
            
            <!-- Row First -->
              <div class="row">

              <!-- Message Us -->
                <div class="col-sm-4">
                  <img src="images/message.png" style="height:50px">
                    <h7 style="color: white;font-size:18px"><b>Message Us </b></h7><br>
                      <a href="mailto:info@irt.net.in"
                      style="color: white;font-size: 18px"><b>info@irt.net.in</b></a><br>
                    <a href="mailto:contactus@irt.net.in" style="color: white;font-size:18px" ><b>contactus@irt.net.in</b></a>
                </div>
                
              <!-- ## -->

              <!-- ..Call Us..-->
            <div class="col-sm-4">
                <img src="images/phone.png" style="height:50px">
                   <h7 style="color: white;font-size:18px"><b>Call Us </b></h7><br>
                  <h6 style="color: white;font-size:18px"><b>+91 9325660841</b></h6>
                </div>

              <!-- ## -->
            </div>
            <!-- Row First End -->

            <div class="row" style="height: 10px"></div>

              <div class="row">
                <div style="height: 1px;background-color: white"></div>
              </div>
            <div class="row" style="height: 10px"></div>    


          <!-- Second Row --> 
          <div class="row">
            <div class="col-sm-4">
              <h6 style="color: white;">&copy 2018 IRT Technologies Private Limited</h6>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <a href="https://www.facebook.com/admin.irt"><img src="images/facebook.png" style="height:30px"></a>

              <a href="https://www.linkedin.com/in/irttech"><img src="images/linkedin.png" style="height:31px;margin-left:10px"></a>
            </div>
          </div>
          <!-- ## -->   

          <div class="row" style="height: 20px"></div>  

        </div><!-- Container End-->

    </nav>

  <!--######### 1Footer Section Ends Here ############ -->


</body>
</html>                            