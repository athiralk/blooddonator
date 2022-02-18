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
    <script src="js/bootstrap.min.js">
    
    </script>
    <script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "district.php?s="+str, true);
        xmlhttp.send();
    }
}
function showHints(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint1").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "bldgrp.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>
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
                                  <li><a href="requesterhome.php">Home</a></li>
                                  <li  class="active"><a href="search.php"><font style="color:red;font-family: arial;">Search Donor</font></a></li> 
                                   
                                <li><a href="complaints.php">Complaints &  Feedbacks</a></li>
                                  
                                    <li><a href="login.php">Leave Now!!</a></li> 
                              
                              </ul> 
                               
                            </div>
                          </nav>
                    </div>  
                </div>
            
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        
                        <div class="col-lg-4 col-md-4">
                             <center>
                                 <img src="Images/bld4.jpg" class="img img-responsive" /></center>
                      
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <center><h3>Search Your Donor Here...</h3></center>
    <br />
    <form method="POST" enctype="multipart/form-data"> 
                                <table class=" table-condensed table-responsive" style="width:250px;">
                                    <tr>
                                        
                                        <td><select name="state" class="form-control" onchange="showHint(this.value)">
                                               
                                                <option value="Choose State..">Choose State..</option>
                                                 <?php
                                        $sel=  mysql_query("select * from state");
                                       while( $r=  mysql_fetch_row($sel))
                                       {
                                               ?>
                                                <option value="<?php echo $r[0] ?>"><?php echo $r[1] ?></option>
                                              <?php
                                       }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><select name="dist" class="form-control"  id="txtHint">
            <option value="Choose District..">Choose District..</option>
                                       
                                         </select>
                                           </td>
       
                                    </tr>
                                    <tr>
                                        <td><select name="bldgrp" class="form-control" onchange="showHints(this.value)" >
                                                <option value="Choose Blood Group..">Choose Blood Group..</option>
                                        <?php
    
        $se=  mysql_query("select * from bloodgrp");
      
        while($k=  mysql_fetch_row($se))
        {
            ?>
        <option value="<?php echo $k[1] ?>"> <?php echo $k[1] ?> </option>     
        
        <?php
        }
    ?>
                                         </select>
                                           </td>
       
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><input type="submit" name="sub" value="Search.."  class="btn-danger" /></td>
                                    </tr>
      
                                </table>
                            </form>
   
    
    <?php
   
   if(isset($_POST['sub']))
   {
   $a=$_POST['state'];
   $b=$_POST['dist'];
   $c=$_POST['bldgrp'];
   $i=  mysql_query("insert into search values('','$a','$b','$c')");
   $s=  mysql_query("select * from donor_reg where don_dis='$b' and blood_grp='$c'");
   ?>
   
    <?php
   if(mysql_num_rows($s)>0)
   {
     ?>
    <center>
        <h2 style="color: purple;">Donor Details.....</h2>
        </center>
              <?php
       
       while($r1=  mysql_fetch_row($s))
       {
       ?>
    <center>
    <div class="col-lg-3 col-md-3">
                            <center>
                            <br /> 
                            <img src="Images/alg-blood-donation-jpg.jpg" width="150px" height="100px" />
                        <br />
                        
                        <br />
                        <b> Name </b> : <?php echo "$r1[1]" ?>
                        <br />
                       
                        <b>Address</b>: <?php echo "$r1[5]" ?>
                        <br />
                        <b>District </b>  : <?php echo "$r1[6]" ?>
                        <br />
<a href="view.php?t=<?php echo $r1[0] ?>"><span class="btn btn-success" >view more</span></a>
                            </center>
                      
                        </div>
        
    </center>
    <?php
   }
   }
   else 
     {
       echo "No Results Found...";
   }
   }
   
   ?>
    
                        </div>
                    </div>
                </div>
                    
            </div>
          </body>
     </html>
