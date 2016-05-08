<?php ob_start();?>
<?php
if(session_id() != "")
    session_start()
?>
<?php  

if(isset($_SESSION['email']))  
{  
  
    header("Location: signin.php"); 
}  
  
?>


             <?php
            require_once("dbconnection.php");
            $db_handle = new DBController();
            
                           if(isset($_POST['frmsubmit'])){
                               

                                                                       /*File start*/
                       $image_name = $_FILES['imageupload']['name'];
                      $image_type = $_FILES['imageupload']['type'];
                           $image_size = $_FILES['imageupload']['size'];
                          $image_tmp = $_FILES['imageupload']['tmp_name'];

                        $target_dir = 'dp/';
                         
                         $path = $target_dir . $image_name; 
                        
                       move_uploaded_file($image_tmp, $path);
                    /*File end*/
                               
                    $title=$_POST['adtitle'];
                    
                   
                  
                    $name=$_POST['name'];
                   
                    $phone=$_POST['phone'];
                    $state=$_POST['state'];
                    
                    $zipcode=$_POST['zipcode'];

                    $address=$_POST['address'];
                    $ads=$_POST['pads'];
                    $description=$_POST['description'];
                    $path = $target_dir . $image_name; 
               $query="INSERT INTO ads (title, name, phone, state, zip, address, category, description, path) VALUES ('$title', '$name', '$phone', '$state', '$zipcode', '$address', '$ads', '$description', '$path')";
                                          //echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";

                                $run=mysqli_query($link, $query);

                                 if($run){
                                    header("Location: signin.php");
                                }
                                else{
                                    echo "Error: " . $query . "<br>" . mysqli_error($link);
                                }
}
 
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Barter :: Submit Ad</title>
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
                margin-bottom: 0;
                width: 100%;
            }
            #form{
                margin-top: 50px;
                margin-bottom: 20px;
                height: 600px;
                background-color: #3bd9ef;
                width: 50%;
            
            background-color: #3bd9ef;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            }
           input[type=text] {
           width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 10px;
       }
       textarea[type=text] {
           width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 10px;
       }
       input[type=submit] {
            padding:5px 15px; 
            background: #0122de; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
            
        }
        input[type=submit]:hover {
            padding:5px 15px; 
            background:  #a6add8; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
            
        }
        select
        {
            display: inline-block;
            width: 150px;
            height: 30px;
            padding: 3px 6px;
            margin-bottom: 10px;
            font-size: 12px;
            line-height: 20px;
            color: #555555;
            vertical-align: middle;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background-color: skyblue;
        }
        td{
            font-family: sans-serif;
            color: white;
        }
        td input{
            color: black;
        }
        td textarea{
            color: black;
        }
                </style>
    </head>
    <body>
        <?php include 'loggedheader.php';?> 
        
        <div id="form" class="container" align="center">
            <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                 <tr>
                     <td colspan="2" align="center">Submit Ad</td>
                </tr>
                <tr>
                    <td>Ad Title*</td><td><input type="text" name="adtitle" placeholder="Title" required></td>
                </tr>


              
                 <tr>
                     <td>Name*</td><td><input type="text" name="name" placeholder="Name" required></td>
                </tr>
                                <tr>
                                    <td>Phone*</td><td><input type="text" name="phone" required></td>
                </tr>
               

                
                <tr>
                    <td>Zip Code*</td><td><input type="text" name="zipcode" placeholder="zip code" required></td>
                </tr>

                
                <tr>
                    <td>State</td><td align="center"><input type="text" name="state" align="center" required></td>
                </tr>
                <tr>
                    <td>Full Address*</td><td><input type="text" name="address" placeholder="address" required></td>
                </tr>
                <tr>
                                    <td>Category*</td><td align="center">
                        <select name="pads" required>
                                    <option value="mobiles">Mobiles</option>
                                    <option value="electronics">Electronics & Appliances</option>
                                    <option value="car">car</option>
                                    <option value="bike">bike</option>
                                    <option value="furniture">Furniture</option>
                                    <option value="pets">Pets</option>
                                    <option value="books">Books, Sports & Hobbies</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="kids">Kids</option>
                                    <option value="houses">Houses , Land $ Appartment</option>
                     </select>
                    </td>
                </tr>
                              <tr>
                    <td>Ad Description*</td><td><textarea rows="3" cols="3" type="text" name="description" required></textarea></td>
                </tr>
                <tr>
                    <td>Image</td><td align="center"><input type="file" name="imageupload" align="center" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="frmsubmit" value="Submit" required></td>
                </tr>
                           
                
            </table>
        </form>
        
        
        </div>
        <div id="footer" > <?php include 'includes/footer.php';?> </div>
        


    </body>
   
</html>

