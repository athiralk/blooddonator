<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");

 if(isset($_GET['t']))
             {
                 $aa=$_GET['t'];
                 
                 
             }
  ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
        <title></title>
        
<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
<?php
             
                 $aa=$_GET['t'];
                 $sel4=  mysql_query("select * from usrreg where usr_id='$aa'");
                 $r=  mysql_fetch_row($sel4);   
                 if(mysql_num_rows($sel4)>0)
                 {
                     ?>
  <script type="text/javascript">
      
      
      
     
         function initMap() {
        var uluru = {lat: <?php echo $r[10] ?>, lng: <?php echo $r[11] ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
    
  </script>
  <?php
  
                 }
                 ?>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap">
    </script>
    </head>
    <body>
        <form method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner">
                            <img src="Images/bannerlf.png" class="img img-responsive" style="width:1500px;" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                            <ul class="nav navbar-nav" align="right" style="float: right;">
                                  <li><a href="requesterhome.php">Home</a></li>
                                  <li><a href="search.php">Search Donor</a></li>
                                  <li><a href="searchlab.php">Search Lab</a></li> 
                                  <li  class="active"><a href="viewlab.php"><font style="color:red;font-family: arial;">View Lab</font></a></li> 
                                <li><a href="complaints.php">Complaints &  Feedbacks</a></li>
                                  
                                    <li><a href="login.php">Leave Now!!</a></li> 
                              
                              </ul>   
                             
                               
                            </div>
                          </nav>
                    </div>  
                         
                    </div>
                </div> 
            <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-5 col-md-5">
                        <img src="Images/checkup.jpg" class="img img-responsive" />
                    </div>
                    <div class="col-lg-7 col-md-7">
                         <?php
    if(isset($_GET['t']))
    {
        $d=$_GET['t'];
 $sel=  mysql_query("select * from usrreg where usr_id= '$d'");
 $r=  mysql_fetch_row($sel);
       ?>
                        <center>
                          
                            <font color="red" size="18px"><b>Lab Details..</b></font><br />
                        <p style="border:2px solid black;display: block; width:500px; height:400px;" align="center">
                            <img src="Images/lab1.jpg" style="width:230px;border-radius:70px;" /><br />
                         <b>Name of Lab</b> : <?php echo $r[1] ?><br />
                         <b>Address</b>       : <?php echo $r[2] ?><br />
                         <b>Location</b>       : <?php echo $r[3] ?><br />
                         <b>District</b>       : <?php echo $r[4] ?><br />
                         <b>State</b>       : <?php echo $r[5] ?><br />
                         <b>Contact No.</b>   : <?php echo $r[6] ?><br />
                         <b>District</b>      : <?php echo $r[7] ?><br />
                         <b>Available Lab Test</b>           : <?php echo $r[8] ?>
                       
                        </p>
                     
                      
                        </center>
                    <?php
  }
    ?>
                    </div>
                    
                    <br />
                    
  <div class="col-sm-12 projects-w3lgrids" id="map" style="height: 300px"></div>  
                
            </div>
                    
                   

    </body>
</html>
