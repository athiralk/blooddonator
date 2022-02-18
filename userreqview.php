<?php
ob_start();
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
session_start();
$u=$_SESSION['lab'];

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
                            <img src="Images/bannerlf.png" class="img img-responsive" style="width:1500px;" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                              
                            <ul class="nav navbar-nav" align="right" style="float: right;">
                                  <li><a href="labhome.php">Home</a></li>
                                                               
                                    <li   class="active"><a href="requestview.php" style="color:red;">View Requests</a></li> 
                                    <li><a href="logout.php">Leave Now!!</a></li> 
                                   
                                    
                              </ul>  
                               
                            </div>
                          </nav>
                    </div>  
                         
                    </div>
                </div> 
            <div class="container">
                 <div class="col-lg-12 col-md-12">
         
              <div class="col-lg-3 col-md-3" style="border:1px solid black; height: 700px;">
                  <center>
                      <font color="black" face="Lucida Handwriting">
                     <br />
                      <tr>
                      <center><?php echo "Welcome, $u!!"?></center>
                     <table>
                      <tr>
                              <td> <img src="Images/user.jpg" style="width:100px;height:100px;"><br />
                                  <br /></td>
                          </tr>  
                           
                           
                          <br />    
                      </table>
                      <small style="color:black; font-family: arial black;">Blood cannot be manufactured – it can only come from generous donors. Type O-negative blood (red cells) can be transfused to patients of all blood types. It is always in great demand and often in short supply. Type AB-positive plasma can be transfused to patients of all other blood types. AB plasma is also usually in short supply. Every year our nation requires about 5 Crore units of blood, out of which only a meager 80 Lakh units of blood are available. The gift of blood is the gift of life. There is no substitute for human blood.More than 1 million new people are diagnosed with cancer each year. Many of them will need blood, sometimes daily, during their chemotherapy treatment.</small>
                      </font>
                      
                  </center>
              </div>
                  <div class="col-lg-9 col-md-9" style="width:500px;">
                      
                         <?php 
                         $dt=date('y-M-d');
                        ?>
                          </font>
                          <br />
                          
                          <center>
                              <?php
                              $se=  mysql_query("select * from req_lab where req_to='$u' and st='0'");
                              while($s1=  mysql_fetch_row($se))
                              {
                              ?>
                              <br />
                              <div class="panel panel-primary" >
                                  <div class="panel-heading " align="left">
                                      <img src="Images/feedback.jpg" style="width:50px; height: 50px;border-radius: 25px;" /><font color="white">&nbsp;&nbsp;Hello <?php echo $u ?>!!</font>
                             
                              
                                  </div>
                                  <div class="panel-body"> 
                                      <form method="POST" enctype="multipart/form-data">
                                      <table>
                              <font color="black"><?php echo "You Got A Request From <font color='red'>$s1[2]</font>"?><br />
                              <?php
                              $z=  mysql_query("select * from req_lab where req_by='$s1[2]' and st='0'");
                              while($zz=  mysql_fetch_row($z))
                              {
                              ?>
                            
                               <?php echo "Contact No. :  <font color='red'>$zz[3]</font>"?><br />
                             
                              <?php
                              }
                              ?>
                                 
                              
                                  </table>
                                      </form>
                                 
                                     
                                    
                
                                  </div>
                                  <div class="panel-footer">
                                      <a href="userreqview.php?m=<?php echo $s1[0] ?>">Mark as viewed....</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="sendresult.php?v=<?php echo $s1[0] ?>">Send Result...</a>
                                      <?php
                                       if(isset($_GET['m']))
    {
        $x=$_GET['m'];
 $up=  mysql_query("update req_lab set st='1' where req_id='$x' and req_to='$u'");
 header("location:userreqview.php");
    }
 ?>                                 
 </div>
                                  
                              </div>
                             
                          </center>
                          <?php
                              }
                              ?>
                     
                   
              </div>
                  
          </div>
            </div>
                    
                   

    </body>
</html>
