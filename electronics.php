<!DOCTYPE html>
<html>
<head>
            <title>Electronics Products :: Burter</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <style>
               body{
                margin: 0;
                padding: 0;
                background:linear-gradient(to bottom, rgba(30, 75, 115, 1), rgba(255, 255, 255, 0));
                
            }
               #footer{
                
                bottom: 0;
                width: 100%;
            }
            #profile{
                margin-top: 80px;
                
                
            }




    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div id="profile" class="container">
                <?php
                    include 'includes/dbconnection.php';
                $query1 = "select * from ads where category='electronics'";
                $results=  mysqli_query($link, $query1);
                echo "<table border=\"0\">";
                $x=1;
                echo "<tr>";
                while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                if ($x <= 4)
                {
                $x = $x + 1;
                extract($row);
                echo "<td style=\"padding-right:15px;\">";
                echo "<a href='detailproducts.php?idcod=$id'>";
                echo '<img src=' . $path . ' style="max-width:220px;max-height:240px;
                width:auto;height:auto;"></img><br/>';
                echo $row['title'].'<br/>';
                echo "</a>";
                echo $row['name'] .'<br/>';
                echo "</td>";
                }
                else
                {
                $x=1;
                echo "</tr><tr>";
                }}
                echo "</table>";
                ?>
    </div>
    <div id="footer" > <?php include 'includes/footer.php';?> </div>
</body>
</html>

