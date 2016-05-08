<!DOCTYPE html>
<html>
<head>
            <title>Electronics Products :: Barter</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  


       <style>
               body{
                margin: 0;
                padding: 0;
                background:linear-gradient(to bottom, rgba(30, 75, 115, 1), rgba(255, 255, 255, 0));
                
            }
               #footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                
            }
            #profile{
                margin-top: 80px;
                 }

                 #detailcontainer{
                   height: 400px;
                     width:100%;
                 }


    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div id="profile" class="container">
               <?php
                
               //include 'includes/dbconnection.php';
                   require_once("dbconnction.php");
    $db_handle = new DBController();
                $code=$_REQUEST['idcod'];
                $query = "SELECT id, title,name,phone,state,zip,address, description, path FROM ads " . "where id like '$code'";
                $results = mysqli_query($link, $query) or die(mysql_error()); // #1
                $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
                extract($row);
                echo "<div style='float:left;'>";
                            echo' <img src=' . $path . ' style="max-width:200px;max-height:260px;width:auto;height:auto;"></img>'; 
                echo '</div><br><br><br><br><br>';
                echo "<div style='float:left;'><b>";
                      echo $title;      
                echo '</b></div><br><br><br><br>';
               echo "<div>";
                      echo '<i><b>Description:</b></i>'.$description;     
                echo '</div><br><br><br>';
                echo '<div>';
               
                      echo '<i><b>Phone No:</b></i>'.$phone;     
                echo '</div><br><br><br>';
                
                echo '<div>';
               
                      echo '<i><b>Address:</b></i>'.$address;    
                echo '</div>';

                
               ?>
        <a href="exchangeing.php?product=<?php echo $title?>" class="btn btn-info" id="detail">Exchange</a>
        
        
        
               
    </div>
    
    <div id="footer"> <?php include 'includes/footer.php';?> </div>
   
</body>
</html>

