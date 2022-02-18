<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
session_start();
$u=$_SESSION['user'];

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
        var uluru = {lat: <?php echo $r[11] ?>, lng: <?php echo $r[12] ?>};
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
                               <li><a href="userhome.php">Home</a></li>
                                  <li class="active"><a href="viewlab2.php" style="color:red;">View Labs</a></li>   
                                    <li><a href="complaints1.php">Complaints &  Feedbacks</a></li>
                                    <li><a href="logout.php">Leave Now!!</a></li> 
                                   
                                    
                              </ul>  
                             
                               
                            </div>
                          </nav>
                    </div>   
                         
                    </div>
                </div> 
            <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-5 col-md-5">
                       <center>
                        <h3 style="color:red;font-family: arial;"><b>Send Request For Blood Test..</b></h3>
                            <br />
                            <form method="POST" enctype="multipart/form-data">
                            <table class="table table-condensed table-responsive" style="width:50%; color:black;border-color: black;">
                                <tr align="center">
                                    <td><b>Send Request To</b> 
                                    </td>
                                    <td><input type="text" name="to" readonly="<?php echo $r[7] ?>" value="<?php echo $r[7] ?>" class="form-control"   /></td>
                                </tr>
                                <tr align="center">
                                    <td><b>Requested By</b> 
                                    </td>
                                    <td><input type="text" name="frm" readonly="<?php echo $u ?>" value="<?php echo $u ?>" class="form-control"   /></td>
                                </tr>
                                <?php
$ss=  mysql_query("select * from userreg where em='$u'");
        $rr=  mysql_fetch_row($ss);
                                ?>
                                
                               
                                <tr align="center">
                                    <td><b>Contact No.</b> 
                                    </td>
                                    <td><input type="number" name="cno" readonly="<?php echo $rr[3] ?>" value="<?php echo $rr[3] ?>" class="form-control"  /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="sub" class="btn-danger" style="width:75%;" value="Send Request" /></td>
                                </tr>
                                
                            </table> 
                        </form>
                            <?php
                            if(isset($_POST['sub']))
                            {
                                $a=$_POST['to'];
                                $b=$_POST['frm'];
                                $c=$_POST['cno'];
                            
                               $in=  mysql_query("insert into req_lab values('','$a','$b','$c','0')");
                               if($in>0)
                               {
                                   echo "<h3><font color='green'>Request Sended Successfully!!</font></h3>";
                               }
 else {
     echo mysql_error();
 }
                               
                            }
                            ?>

                    </center>
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
                         <b>Available Lab Test</b>           : <?php echo $r[8] ?><br />
                           <b>Expected Bill Amount</b>           : <?php echo $r[9] ?>
                       
                        </p>
                     
                      
                        </center>
                    <?php
  }
    ?>
                    </div>
                    
                    <br />
                    <br />
                    
  <div class="col-sm-12 projects-w3lgrids" id="map" style="height: 300px"></div>  
                    

                
            </div>
                    
                   

    </body>
</html>
