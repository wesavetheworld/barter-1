
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Barter</title>
    </head>
    <body>
         
    <center>
       <div >
         <table style="width: 50%"  border='1' align='center'>

            <tr>
                <td>Title</td>
                <td>Name</td>
                <td>Phone</td>
                <td>State</td>
                <td>Zip</td>
                <td>Address</td>
                <td>Category</td>
                <td>Description</td>
                <td colspan="2">Path</td>
                
                
            </tr>
            
            <?php
       //include 'includes/dbconnection.php';
            require_once("dbconnction.php");
    $db_handle = new DBController();

                $query1="select * from ads";    
                $run=  mysqli_query($link,$query1);
                while($row=  mysqli_fetch_assoc($run)){
                    $id=$row['id'];
                $title=$row['title'];
                $name=$row['name'];
                $phone=$row['phone'];
                $state=$row['state'];
                $zip=$row['zip'];
                $address=$row['address'];
                $category=$row['category'];
                $description=$row['description'];
                $path=$row['path'];
    
            ?>
            <tr>
                <td><?php echo $title ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $state ?></td>
                <td><?php echo $zip ?></td>
                <td><?php echo $address ?></td>
                <td><?php echo $category ?></td>
                <td><?php echo $description ?></td>
                <td><?php echo $path ?></td>
                <td><a href="delete.php?del=<?php echo $id?>">Delete</a></td>
               
                
            </tr>
                <?php } ?>
        </table>
<h1>   <?php echo @$_GET['deleted']; ?></h1>
        </div>
    </center>

    </body>
</html>
