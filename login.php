<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
if(isset($_POST['sub']))
{
    $uid=$_POST['uid'];
    $pas=$_POST['pas'];
    $sel=mysql_query("select * from login where unme='$uid' and pas='$pas'");
    if(mysql_num_rows($sel)>0)
    {
       session_start(); 
       $r=mysql_fetch_row($sel);
       if($r[3]=="admin")
       {
           $_SESSION['admin']=$uid;
           header("location:adminhome.php");
       }
       if($r[3]=="donor")
       {
           $_SESSION['donor']=$uid;
           header("location:donorhome.php");
       }
       if($r[3]=="requester")
       {
           $_SESSION['requester']=$uid;
           header("location:requesterhome.php");
       }
        if($r[3]=="user")
       {
           $_SESSION['user']=$uid;
           header("location:userhome.php");
       }
       if($r[3]=="lab")
       {
           $_SESSION['lab']=$uid;
           header("location:labhome.php");
       }
    }
    else
    {
        header("location:login.php?error=1");
    }
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
                                  <li><a href="index.php">Home</a></li>
                                  <li><a href="userreg.php">Medical Labs</a></li>                                
                               <li><a href="donor.php">Donar Registration</a></li>                                
                                     <li><a href="requester.php">Requester Registration</a></li>
                                     <li><a href="usrreg.php">User Registration</a></li>
                                    <li class="active"><a href="login.php"><font style="color:red;font-family: arial;">Login</font></a></li>
                              </ul>  
                               
                            </div>
                          </nav>
                    </div>  
                </div>
            
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-sm-3">
                        <br />
                        <img style="height: 300px;" src="Images/health2_1.jpg" class="img img-responsive img-thumbnail" />
                         <br />
                        <img style="height: 300px;" src="Images/lab1_1.jpg" class="img img-responsive img-thumbnail" />
                         <br />
                        <img style="height: 300px;" src="Images/blood4.jpg" class="img img-responsive img-thumbnail" />
                         <br />
                        
                    </div>
                        <div class="col-lg-6 col-md-6">
                             <center>
                            <img src="Images/animated-blood-image-0063.gif" class="img img-responsive" /></center>
                      
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <h3>User Login</h3>
                        <form method="post">
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td>User ID</td>
                                <td><input type="text" name="uid" class="form-control" required="required" /></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="pas" class="form-control" required="required" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="sub" value="Login" class="btn btn-danger" /></center></td>
                            </tr>
                        </table>
                        </form> 
                        </div>
                    </div>
                </div>
                    
            </div>
          </body>
     </html>
