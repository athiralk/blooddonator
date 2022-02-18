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
       
<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
  <script>
            function validName()
            {
                
                                                    var y = document.forms["myForm"]["nme"].value;
                                                    if (y == "")
                                                    {
                                                        alert("Name should only contain letters...");
                                                        return false;
                                                      }
                                             var b=/([a-zA-Z ])$/;
 
                                                if(b.test(y)===false)
                                                {
                                                    alert("Invalid Format");
                                                     document.forms["myForm"]["nme"].value='';
                                                      document.forms["myForm"]["nme"].focus();
                                                       return false;
                                                }
                                                
            }
                                        function validateForm()
                                        { 
                                        
                                             var x = document.forms["myForm"]["cno"].value;
                                                    if (x == "")
                                                    {
                                                        alert("Contact Number must be filled out");
                                                        return false;
                                                       
                                                      }
                                             var a=/([0-9])$/;
 
                                                if(a.test(x)===false)
                                                {
                                                    alert("Invalid Contact");
                                                     document.forms["myForm"]["cno"].value='';
                                                      document.forms["myForm"]["cno"].focus();
                                                       return false;
                                                      
                                                }
                                                
                                                 
        
        
                                                
                                                 var z = document.forms["myForm"]["age"].value;
                                                    if (z == "")
                                                    {
                                                        alert("Enter age...");
                                                        return false;
                                                      }
                                             var c=/([0-9])$/;
 
                                                if(c.test(z)===false)
                                                {
                                                    alert("Invalid Format");
                                                     document.forms["myForm"]["age"].value='';
                                                      document.forms["myForm"]["age"].focus();
                                                       return false;
                                                }
                                      
                                        
                                       
                                  }
                                        
                                        </script>

    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
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
                           
                           <h1><font style="color:blueviolet;font-family: arial;">"Register Your Lab...With 'Red Drop....' !!!"</font></h1>
                       </center>
                    <div class="col-sm-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                              
                             <ul class="nav navbar-nav" align="right" style="float: right;">
                                  <li><a href="index.php">Home</a></li>
                                  <li class="active"><a href="userreg.php"><font style="color:red;font-family: arial;">Medical Labs</font></a></li>                                
                               <li><a href="donor.php">Donor Registration</a></li>                                
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
                    <div class="col-lg-6 col-md-6">
                        
                        <center>
                            <h3><font color="red"> "Here you can provide the maximum quality assured blood check up for the public....create an account now..."</font></h3>
                            <h3 style="color:green;font-family: arial;"><b><u>Lab Registration Zone.. </u></sb></h3>
                            <form method="POST" enctype="multipart/form-data" name="myForm"  >
                            <table class="table table-bordered table-responsive" width="50%" >
                               
                                <tr>
                                    <td>Lab Name</td>
                                    <td><input type="text" name="nme" class="form-control" required="required" onkeyup="return validName();" /></td>
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
                                    <td><input type="text" name="cno" id="cno" class="form-control" required="required" maxlength="10" /></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="em" class="form-control" required="required" /></td>
                                </tr>
                                <tr>
                                    <td>Lab Tests Available in Your Lab</td>
                                    <td><input type="Checkbox" name="t[]" value="Basic Blood Test" class="form-control" />Basic Blood Test
                                        <input type="Checkbox" name="t[]" value="Thyroid Functon Test" class="form-control" />Thyroid Function Test
                                        <input type="Checkbox" name="t[]" value="Lipid Profile Test" class="form-control" />Lipid Profile Test
                                        <input type="Checkbox" name="t[]" value="Advanced HIV Test" class="form-control" />Advanced HIV Test
                                    </td> 
                                    <tr>
                                                    <td>Grand Sum For Doing all the above mentioned lab tests</td>
                                                    <td><input type="number" name="sum" id="sum" class="form-control" required="required" /></td>
                                                </tr>
                                </tr>
                                <tr>
                                   <td>Mention that your lab has any valid accreditations ?</td>
                                   <td><input type="radio" name="val" value="Yes" required="required" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="val" value="No" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</td>  
                                </tr>
                                <tr>
                                   <td>If Yes, Please Upload Your Medical Certificate for blood donation.</td>
                                   <td><input type="file" name="pics" class="form-control" required="required" /></td>  
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
                                                    <td>Password</td>
                                                    <td><input type="password" name="pas" id="pas" class="form-control" required="required" /></td>
                                                </tr>
                                <tr>
                                    <td colspan="2"><center><input type="submit" name="sub" value="REGISTER" class="btn btn-danger" style="width:500px;"  /></center>
                            
                            </td>
                                </tr>
                           
                                
           
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
                       $h1= $_POST['sum'];
                       $i1=$_POST['val'];
                       
                       
                         $l=$_POST['la'];
                       $m=$_POST['lo'];
                       $n=$_POST['pas'];
                       
                       $ins=  mysql_query("insert into usrreg values('','$a','$b','$c','$d','$e','$f','$g','$i','$h1','0','$l','$m','$n','0')");
                      
                   if($ins>0)
                   {
                    ?>
                               
                  <script>
                      alert("You Are Registered Successfully!!");
                       
                       </script>
                       <?php
                 
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
                    
                <div class="col-lg-6 col-md-6">
                        
                       
                              <div id="dvMap" style="width: 100%; height: 800px"></div>       
                       
                </div>
            </div>
                    
                   

    </body>
</html>
