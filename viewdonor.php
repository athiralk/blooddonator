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
    </head>
    <body>
   
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner">
                            <img src="Images/Banner1.jpg" class="img img-responsive" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                              
                           <ul class="nav navbar-nav" align="right" style="float: right;">
                              <li><a href="adminhome.php">Home</a></li>
                                  <li class="active"><a href="viewdonor.php"><font style="color:red;font-family: arial;">View Donors</font></a></li> 
                                     <li><a href="viewrequester.php">View Requesters</a></li> 
                                      <li><a href="viewlabs.php">View Medical Labs</a></li>
                                       <li><a href="viewlabs1.php">Approved Labs</a></li>
                                     <li><a href="complaint.php">Complaints & Feedbacks</a></li> 
                                     <li><a href="logout.php">Leave Now!!</a></li> 
                                    
                              
                              </ul>
                               
                            </div>
                          </nav>
                    </div>  
                         
                    </div>
                </div>                    
                    <div class="col-sm-3">
                        <img src="Images/blood.jpg" class="img img-responsive img-thumbnail" />
                        <img src="Images/blood3.jpg" class="img img-responsive img-thumbnail" />
                        <img src="Images/blood4.jpg" class="img img-responsive img-thumbnail" />
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                        <div class="col-lg-6">
                            <br />
                            <center> <span class="btn btn-danger" style="width:550px;"><font size="14">List Of Donors..</font></span></center>
                         
                                <table class="table table-bordered table-condensed table-hover table-responsive table-striped ">
                                      <tr>
                                   
                                </tr>
                                    
                                        <?php
                                        $sel=mysql_query("select * from donor_reg");
                                     while($r=mysql_fetch_row($sel))
                                     {
                                         ?>
                                        <div class="col-lg-6 col-md-6">
                        <div>
                            <center>
                            <br /> 
                            <img src="Images/blood.jpg" width="150px" height="100px" />
                        <br />
                        
                        <br />
                        <b> Name </b> : <?php echo "$r[1]" ?>
                        <br />
                        <b> Age </b>  : <?php echo "$r[2]" ?>
                        <br />
                        <b>Address</b>: <?php echo "$r[4]" ?>
                        <br />
                        <b>Contact No</b>: <?php echo "$r[3]" ?>
                        <br />
                        <b> District </b>: <?php echo "$r[5]" ?>
                        <br />
                        <b> State </b>   : <?php echo "$r[6]" ?>
                        <br />
                        <b>Blood Group</b>: <?php echo "$r[9]" ?>
                            </center>
                      
                        </div>
                    </div>
                                         <?php
                                     }
                                     ?>
                             </table> 
                    </div>
                </div>
            </div>
      
                </div>      
            

    </body>
</html>
