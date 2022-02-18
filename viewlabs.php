<?php
ob_start();
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
    </head>
    <body>
   
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
                                  <li><a href="adminhome.php">Home</a></li>
                                  <li><a href="viewdonor.php">View Donors</a></li> 
                                     <li><a href="viewrequester.php">View Requesters</a></li>
                                     <li class="active"><a href="viewlabs.php"><font style="color:red;font-family: arial;">View Medical Labs</font></a></li>
                                     <li><a href="viewlabs1.php">Approved Labs</a></li> 
                                     <li><a href="complaint.php">Complaints & Feedbacks</a></li> 
                                     <li><a href="logout.php">Leave Now!!</a></li> 
                                    
                              
                              </ul> 
                               
                               
                            </div>
                          </nav>
                    </div>  
                         
                    </div>
                </div>                    
                   
                   
                            <br />
                            <center> <span class="btn btn-danger" style="width:550px;"><font size="10">New Registered Labs..</font></span></center>
                         
                                <table class="table table-bordered table-condensed table-hover table-responsive table-striped ">
                                      <tr>
                                   
                                </tr>
                                    
                                        <?php
                                        $sel=mysql_query("select * from usrreg where st='0'");
                                     while($r=mysql_fetch_row($sel))
                                     {
                                         ?>
                                        <div class="col-lg-6 col-md-6">
                        <div>
                            <center>
                            <br /> 
                            <img src="Images/lab1.jpg" width="150px" height="100px" />
                        <br />
                        
                        <br />
                        <b> Name </b> : <?php echo "$r[1]" ?>
                        <br />
                       
                        <b>Address</b>: <?php echo "$r[2]" ?>
                        <br />
                        <b>Location </b>  : <?php echo "$r[3]" ?>
                        <br />
<b>District</b>  : <?php echo "$r[4]" ?>
                        <br />
                        <b>State</b>  : <?php echo "$r[5]" ?>
                        <br />
                        <b>Contact No</b>: <?php echo "$r[6]" ?>
                        <br />
                        <b> Email </b>  : <?php echo "$r[7]" ?>
                        <br />
                         <br />
                        <a href="viewlabs.php?t=<?php echo $r[7]?>"><font color='red'>Approve Lab</font></a>
                            </center>
                      
                        </div>
                    </div>
                                   <?php
                                     }
                                     ?>
                                <?php
                                        $se=mysql_query("select * from usrreg where st='0'");
                                     $r1=mysql_fetch_row($se);
                                ?>
                                     <?php
    if(isset($_GET['t']))
    {
        $u=$_GET['t'];
        $up= mysql_query("update usrreg set st='1' where em='$u'");
      
        $ins=  mysql_query("insert into login values('','$u','$r1[13]','lab','1')");
        header("location:viewlabs.php");
        
    }
    ?>
                                
                                      
                             </table> 
                    
    
        
      
                </div>      
            

    </body>
</html>
