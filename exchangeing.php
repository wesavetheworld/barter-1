
<!DOCTYPE html>
<html>
    <head>
    <title>Sign In :: Barter</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background:linear-gradient(to bottom, rgba(30, 75, 115, 1), rgba(255, 255, 255, 0));
        }
        #signin{
            margin: 5% auto 3% auto;
            width: 15%;
            height: 250px;
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
       input[type=password]{
            width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
       }

            #footer{
            
           
            
            bottom:0px;
            left:0px;
            right:0px;
            margin-bottom:0px;
          
            }

    </style>
    </head>
    <body>
        
        <?php include 'header.php';?>
        <div class="container">
        <form action="#" method="post">
        <table border="0" cellspacing="1" cellpadding="3">
        <tr><td colspan="2" align="center">Your information available with us:</td></tr>
        <tr><td>Email Address:</td><td><input size="20" type="text"
        name="email_b" ></td></tr>
        <tr><td>Complete Name: </td><td><input size="50" type="text"
        name="name_b" ></td></tr>
        <tr><td>Address: </td><td><input size="80" type="text" name="address1"
       ></td></tr>
        <tr><td></td><td><input size="80" type="text" name="address2" ></td></tr>
        <tr><td>City: </td><td><input size="30" type="text" name="cityb"
       ></td></tr>
        <tr><td>State: </td><td><input size="30" type="text" name="stateb"
        ></td></tr>
        <tr><td>Country: </td><td><input size="30" type="text" name="countryb"
        ></td></tr>
        <tr><td>Zip Code: </td><td><input size="20" type="text" name="zipcodeb"
        ></td></tr>
        <tr><td>Phone No: </td><td><input size="30" type="text" name="phone_no"
        ></td></tr>
        <tr><td colspan=2 align="center">Please update shipping information if
        different from the shown below: </td></tr>
        <tr><td> Address to deliver at: </td><td><input type="text" size="80"
        name="shipping_address_line1"></td></tr>
        <tr><td></td><td><input type="text" size="80" name="shipping_address_line2"
        ></td></tr>
        <tr><td> City: </td><td><input size="30" type="text"
        name="shipping_city" ></td></tr>
        <tr><td> State: </td><td><input size="30" type="text"
        name="shipping_state" ></td></tr>
        <tr><td> Country: </td><td><input size="30" type="text"
        name="shipping_country" ></td></tr>
        <tr><td> Zip Code: </td><td><input type="text" size="20"
        name="shipping_zipcode" ></td></tr>
        <tr><td><input type="submit" name="submitdtl" value="Supply Payment
        Information"></td><td>
        <input type="reset" value="Cancel"></td></tr>
        </table>
        </form>
    </div>
 <div id="footer" > <?php include 'includes/footer.php';?> </div>
       
    </body>
</html>
                         <?php 
       // include 'includes/dbconnection.php';
            require_once("dbconnection.php");
    $db_handle = new DBController();
        if(isset($_POST['submitdtl'])){
        $emailb = $_POST['email_b'];
        $nameb = $_POST['name_b'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $cityb = $_POST['cityb'];
        $stateb = $_POST['stateb'];
        $countryb = $_POST['countryb'];
        $zipcodeb = $_POST['zipcodeb'];
        $phone_no = $_POST['phone_no'];
        $shipping_address_line1 = $_POST['shipping_address_line1'];
        $shipping_address_line2= $_POST['shipping_address_line2'];
        $shipping_city= $_POST['shipping_city'];
        $shipping_country= $_POST['shipping_country'];
        $shipping_zipcode= $_POST['shipping_zipcode'];
        $titleofproduct=$_REQUEST['product'];
       
      
            $inser_query = "INSERT INTO buyer (email_b,name_b,address1,address2,cityb,stateb,countryb,zipcodeb,phone_no,shipping_address_line1,shipping_address_line2,shipping_city,shipping_country,shipping_zipcode,productwannaby) VALUES ('$emailb','$nameb','$address1','$address2','$cityb','$stateb','$countryb','$zipcodeb','$phone_no','$shipping_address_line1','$shipping_address_line2','$shipping_city','$shipping_country','$shipping_zipcode','$titleofproduct')";
                    if (mysqli_query($link, $inser_query)) {
                    echo "<h4 style='color:green'>Request Sent Successfully</h4>";
                    echo "<script>window.open('userprofile.php','_self')</script>";
                            }                   
                        else {
                            echo "Error: ". mysqli_error($inser_query);
                    }
        
        }
?>
