<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
session_start();
$u=$_SESSION['requester'];
$s=  mysql_query("select * from req_reg where em='$u'");
$re=  mysql_fetch_row($s);
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
        <form method="post">
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
                                  <li><a href="requesterhome.php">Home</a></li>
                                  <li   class="active"><a href="search.php"><font style="color:red;font-family: arial;">Search Donor</font></a></li>                                
                                <li><a href="complaints.php">Complaints &  Feedbacks</a></li>
                                  
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
                        <img src="Images/blood.jpg" class="img img-responsive" />
                    </div>
                    <div class="col-lg-7 col-md-7">
                         <?php
    if(isset($_GET['t']))
    {
        $d=$_GET['t'];
 $sel=  mysql_query("select * from donor_reg where don_id= '$d'");
 $r=  mysql_fetch_row($sel);
 if(isset($_GET['t']))
 {
    
$ins=  mysql_query("insert into viewlist values('','$u','$r[4]','0')");
if($ins>0)
{
}
 else 
     {
  echo mysql_error();   
 }    
}
       ?>
                        <center>
                          
                            <font color="red" size="18px"><b>Donor Details..</b></font><br />
                        <p style="border:2px solid black;display: block; width:500px; height:350px;" align="center">
                            <img src="Images/blood4.jpg" style="width:230px;border-radius:70px;" /><br />
                         <b>Name of Donor</b> : <?php echo $r[1] ?><br />
                         <b>Address</b>       : <?php echo $r[4] ?><br />
                         <b>Contact No.</b>   : <?php echo $r[3] ?><br />
                         <b>District</b>      : <?php echo $r[5] ?><br />
                         <b>Age</b>           : <?php echo $r[2] ?><br />
                       
                        </p>
                        <br />
                        
                        </center>
                    <?php
  }
    ?>
                    </div>
                    
                    <br />
                    
<div class="col-lg-12 col-md-12" style="border:2px solid black;">
    <center>
                        <h3 style="color:red;font-family: arial;"><b>Send Request..</b></h3>
                            <br />
                            <form method="POST" enctype="multipart/form-data">
                            <table class="table table-condensed table-responsive" style="width:50%; color:black;border-color: black;">
                                <tr align="center">
                                    <td><b>Send Request To</b> 
                                    </td>
                                    <td><input type="text" name="to" readonly="<?php echo $r[4] ?>" value="<?php echo $r[4] ?>" class="form-control"   /></td>
                                </tr>
                                <tr align="center">
                                    <td><b>Requested By</b> 
                                    </td>
                                    <td><input type="text" name="frm" readonly="<?php echo $u ?>" value="<?php echo $u ?>" class="form-control"   /></td>
                                </tr>
                                <tr align="center">
                                    <td><b>Contact No. Of Requester</b> 
                                    </td>
                                    <td><input type="text" name="cno" readonly="<?php echo $re[3] ?>" value="<?php echo $re[3] ?>" class="form-control"   /></td>
                                </tr>
                                <tr align="center">
                                    <td><b>Required Date</b> 
                                    </td>
                                    <td><input type="date" name="dt" required="required" class="form-control"   /></td>
                                </tr>
                                <tr align="center">
                                    <td><b>Required Amount Of Blood</b> 
                                    </td>
                                    <td><input type="text" name="amt" required="required" class="form-control"  /></td>
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
                                $d=$_POST['dt'];
                                $e=$_POST['amt'];
                               $in=  mysql_query("insert into request values('','$a','$b','$c','$d','$e','0')");
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
                </div>
                
            </div>
                    
                   

    </body>
</html>
