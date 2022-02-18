<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.5241, 76.9366),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
       
    </script>
    <br />
    <br />
    </head>
    <body>
        <form method="post">
            <div class="container">
                <div class="row">
                    <br />
                   <div class="col-lg-12 col-md-12">
                       <br />
                    <div class="col-lg-4 col-md-4">
                        <br />
                        <img style="height:200px;width: 300px;" src="Images/medical checkup.jpg" class="img img-responsive" />
                        </div>
                       <div class="col-lg-4 col-md-4">
                           <br />
                            <img style="height:200px;width: 300px;" src="Images/download.jpg" class="img img-responsive" />
                        </div>
                       <div class="col-lg-4 col-md-4s">
                           <br />
                            <img style="height:200px;width: 300px;" src="Images/medical.jpg" class="img img-responsive" />
                        </div>
                      
                    </div>
                     <br />
                       <center>
                           
                           <h1><font style="color:red;font-family: arial;">"Register Your Lab...With E-Blood !!!"</font></h1>
                       </center>
                    <div class="col-sm-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                              
                             <ul class="nav navbar-nav" align="right" style="float: right;">
                                  <li><a href="index.php">Home</a></li>
                                  <li class="active"><a href="userreg.php"><font style="color:red;font-family: arial;">Medical Labs</font></a></li>                                
                               <li><a href="donor.php">Donar Registration</a></li>                                
                                     <li><a href="requester.php">Requester Registration</a></li>
                                    <li><a href="login.php">Login</a></li>
                              </ul> 
                               
                            </div>
                          </nav>
                    </div>  
                         
                    </div>
                </div> 
            <div class="container">
                <div class="col-lg-12 col-md-12">
                    
                        
                        <center>
                            <h3><font color="red"> "Here you can provide the maximum quality assured blood check up for the public....create an account now..."</font></h3>
                            <h3 style="color:green;font-family: arial;"><b><u>Lab Registration Zone.. </u></sb></h3>
                            <br />
                            <form method="POST" enctype="multipart/form-data">
                            <table class="table table-bordered table-responsive" width="50%">
                               
                                <tr>
                                    <td>Lab Name</td>
                                    <td><input type="text" name="nme" class="form-control" required="required" /></td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="adrs"  class="form-control" required="required" />
                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td><input type="text" name="loc" class="form-control" required="required" /></td>
                                </tr>
                                <tr>
                                    <td>District</td>
                                    <td><input type="text" name="dis" class="form-control" required="required" /></td>
                                </tr>
                                
                                <tr>
                                    <td>State</td>
                                    <td><input type="text" name="sta" class="form-control" required="required"/></td>
                                </tr>
                                <tr>
                                    <td>Contact No</td>
                                    <td><input type="text" name="cno" class="form-control" required="required"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="em" class="form-control" required="required"/></td>
                                </tr>
                                <tr>
                                    <td>Lab Tests Available in Your Lab</td>
                                    <td><input type="Checkbox" name="t[]" value="Basic Blood Test" class="form-control" />Basic Blood Test
                                        <input type="Checkbox" name="t[]" value="Thyroid Functon Test" class="form-control" />Thyroid Function Test
                                        <input type="Checkbox" name="t[]" value="Lipid Profile Test" class="form-control" />Lipid Profile Test
                                        <input type="Checkbox" name="t[]" value="Advanced HIV Test" class="form-control" />Advanced HIV Test
                                    </td>   
                                </tr>
                                <tr>
                                   <td>Do this lab has any accreditation certificate?</td>
                                   <td><input type="radio" name="cer" value="Yes" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="cer" value="No" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</td>  
                                </tr>
                                
                                  <tr>
                                                    <td>Latitude</td>
                                                    <td><input type="text" name="la" id="la" class="form-control" required="required" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude</td>
                                                    <td><input type="text" name="lo" id="lo" class="form-control" required="required" /></td>
                                                </tr>
                                <tr>
                                    <td colspan="2"><center><input type="submit" name="sub" value="REGISTER" class="btn btn-danger" style="width:500px;" /></center>
                            
                            </td>
                                </tr>
                           
                                 <div id="dvMap" style="width: 100%; height: 500px"></div>
           
                           </table> 
                                              <?php          
                   if(isset($_POST['sub']))
                   {
                       $a=$_POST['nme'];
                       $b=$_POST['adrs'];
                       $c=$_POST['loc'];
                       $d=$_POST['dis'];
                       $e=$_POST['sta'];
                       $f=$_POST['cno'];
                       $g=$_POST['em'];
                       $h=$_POST['t'];
                       $i=  implode(',', $h);
                        $j=$_POST['cer'];
                        $k=$_POST['la'];
                        $l=$_POST['lo'];
                       
                      
                      
                   $ins=  mysql_query("insert into usrreg values('','$a','$b','$c','$d','$e','$f','$g','$i','$j','$k','$l','0')");
                   if($ins>0)
                   {
                       echo "<center><h3><font color='green'>You Are Registered Successfully!! </font></h3></center>";
                     
                   }
 else 
     {
     echo mysql_error();
     }
             }  
             ?>
                        </form>
               
                         
                         </center>     
                   
                    
                    
                   
                
            </div>
            </div>
                    
                   

    </body>
</html>
