
<html>
    <head>
        <title>:: Barter ::</title>
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
                height: 400px;
                background-color: white;
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



    </style>
    </head>
    <body>

<?php include 'loggedheader.php';?>
        <div id="profile" class="container">
           
            <div class="container">

              
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/furniture.jpg" alt="Furniture" width="150px" height="150px"/><br>
        <span><a href="furniture.php">Furniture</a></span>
        
    </div>
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/pets.jpg" alt="pets" width="150px" height="150px"/><br>
        <span><a href="pets.php">Pets</a></span>
        
    </div>
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/books.jpg" alt="books" width="150px" height="150px"/><br>
        <span><a href="books.php">Books, Sports & Hobbies</a></span>
        
    </div>
    
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/fashion.jpg" alt="Fashion" width="150px" height="150px"/><br>
        <span><a href="fashion.php">Fashion</a></span>
        
    </div>
        </div>
    <div class="container">
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/kids.jpg" alt="kids" width="150px" height="150px"/><br>
        <span><a href="kids.php">Kids</a></span>
        
    </div>
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/RealEstate.jpg" alt="Real Estate" width="150px" height="150px"/><br>
        <span><a href="houses.php">Real Estate</a></span>
        
    </div>
    </div>

    </div>     
            
            
      

        
        
        <div id="footer" > <?php include 'includes/footer.php';?> </div>
    </body>
</html>

//?>