<?php
mysql_connect("localhost","root","");
mysql_select_db("bloodbank");
?>
<!DOCTYPE html>
<html>
<head>
   
<table>
    <tr><select name="dist">
        <option value="Choose District..">Choose District..</option>
         <?php
    if(isset($_GET['s']))
    {
        $d=$_GET['s'];
        $sel=  mysql_query("select * from district where st_id ='$d'");
      
        while($r=  mysql_fetch_row($sel))
        {
            ?>
        <option value="<?php echo $r[2] ?>"> <?php echo $r[2] ?> </option>     
        
        <?php
        }
    }
        ?>
    
</select>
        
        </tr>
    
</table>
         


</head>
<body>


</body>
</html>