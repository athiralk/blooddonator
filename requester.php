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
                                             var x = document.forms["myForm"]["con"].value;
                                                    if (x == "")
                                                    {
                                                        alert("Contact Number must be filled out");
                                                        return false;
                                                       
                                                      }
                                             var a=/([0-9])$/;
 
                                                if(a.test(x)===false)
                                                {
                                                    alert("Invalid Contact");
                                                     document.forms["myForm"]["con"].value='';
                                                      document.forms["myForm"]["con"].focus();
                                                       return false;
                                                      
                                                }
                                                
    }   function validAge()
                                               {
                                                    
                                                 var z = document.forms["myForm"]["age"].value;
                                                    if (z == "")
                                                    {
                                                       
                                                        return false;
                                                      }
                                             var c=/([0-9])$/;
 
                                                if(c.test(z)==false)
                                                {
                                                    alert("Invalid Format");
                                                     document.forms["myForm"]["age"].value='';
                                                      document.forms["myForm"]["age"].focus();
                                                       return false;
                                                }
                                            }
                                       
                               
                                        
                                        </script>
        <title></title>
        <?php
       
     ?>
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
                               <li><a href="donor.php">Donor Registration</a></li>                                
                                     <li class="active"><a href="requester.php"><font style="color:red;font-family: arial;">Requester Registration</font></a></li>
        <li><a href="usrreg.php">User Registration</a></li>
                                     <li><a href="login.php">Login</a></li>
                              </ul> 
                                <ul class="nav navbar-nav navbar-right">
   
                                </ul>
                            </div>
                          </nav>
                    </div>                    
                    <div class="col-sm-3">
                        <img src="Images/blood.jpg" class="img img-responsive img-thumbnail" />
                        <img src="Images/blood3.jpg" class="img img-responsive img-thumbnail" />
                        <img src="Images/blood4.jpg" class="img img-responsive img-thumbnail" />
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="container">
                        
                    <div class="col-sm-12">
                        <div class="row">
                        <div class="col-lg-7">
                            <br />
                            <h1 style="color:purple; font-family: arial;"><center><b>Requester Registration Form</b></center></h1>
                           <br />
                           <center>
                               <form method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
                            <table class="table table-bordered table-responsive" width="50%">
                               
                                <tr>
                                    <td>Requester Name</td>
                                    <td><input type="text" name="nme" class="form-control" required="required" onkeyup="return validName();"  /></td>
                                </tr>
                                 <tr>
                                    <td>Age</td>
                                    <td><input type="text" name="age"  class="form-control" required="required" onkeyup="return validAge();" maxlength="2" />
                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td><input type="text" name="con" class="form-control" required="required" maxlength="10" /></td>
                                </tr>
                                <tr>
                                    <td>Email Id</td>
                                    <td><input type="email" name="em" class="form-control" required="required" /></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><textarea name="adrs" class="form-control" required="required"></textarea></td>
                                </tr>
                                <tr>
                                    <td>District</td>
                                    <td><input type="text" name="dis" class="form-control" required="required"/></td>
                                </tr>
                                <tr>
                                    <td>State</td>
                                    <td><input type="text" name="st" class="form-control" required="required"/></td>
                                </tr>
                                
                               
                           
                                 <tr>
                                    <td>Blood group</td>
                                    <td>
                                        <select name="grp" class="form-control" required="required">
                     <option value="Select">Select</option>   
                     <option value="A+">A+</option> 
                      <option value="A-">A-</option> 
                       <option value="B+">B+</option> 
 <option value="B-">B-</option>
  <option value="AB+">AB+</option> 
   <option value="AB-">AB-</option>
    <option value="O+">O+</option> 
  <option value="O-">O-</option>
  
                                                                                                                            
                            </select>
                        </td>
                                 </tr>
                                 <tr>
                                 <td>Password</td>
                                 <td><input type="password" name="otp" class="form-control" value="<?php
                    $n=  substr(str_shuffle("1234567890"),2,4); 
                    echo "$n";
                    ?>" readonly="<?php echo $n ?>" required="<?php echo $n ?>" /></td>
                                 </tr>
                                <tr>
                                    <td colspan="2"><center><input type="submit" name="sub1" value="REGISTER" class="btn btn-danger" style="width:500px;" /></center>
                            
                            </td>
                                </tr>
                           
                                
           
                           </table> 
                                              <?php   
                                              if(isset($_POST['sub1']))
                   {
                       $a=$_POST['nme'];
                       $b=$_POST['age'];
                       $c=$_POST['con'];
                       $c1=$_POST['em'];
                       $d=$_POST['adrs'];
                       $e=$_POST['dis'];
                       $f=$_POST['st'];
                       
                       $i=$_POST['grp'];
                       $j=$_POST['otp'];
                   $ins=  mysql_query("insert into req_reg values('','$a','$b','$c','$c1','$d','$e','$f','$i','$j')");
                    $in=  mysql_query("insert into login values('','$c1','$j','requester','1')");
                    if($ins>0)
                   {
                        if($in>0)
                        {
                        ?>
                 <script>
                      alert("User Registered Successfully!! Your login password is '<?php echo "$j";?>' ");
                      </script>
                    
              <?php
                      }
                      }
 else 
     {
     ?>
                       <script>
 alert("User Registration Failed!!");
 </script>
 <?php
//     echo mysql_error();
 }    
                        
             }  
                  
             ?>
                            
                        </div>
                    </div>
                </div>
            </div>
      
    </body>
</html>
