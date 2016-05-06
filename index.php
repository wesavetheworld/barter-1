<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>:: Burter ::</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- css library -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
            <!--        slider files start-->
            		<meta charset="UTF-8" />

		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
                <script>
                $(window).scroll(function () {
                if( $(window).scrollTop() > $('#header-2').offset().top && !($('#header-2').hasClass('posi'))){
                $('#header-2').addClass('posi');
                } else if ($(window).scrollTop() == 0){
                $('#header-2').removeClass('posi');
                }
            });
                </script>

                <!--        slider files end-->
                <script>
                $(document).ready(function(){
                    $("#myaccount").click(function(){
                        $("#loader").load("signin.php");
                    });
                });
                </script>

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
            #header-2{
                background:linear-gradient(to left, rgba(30, 75, 115, 10), rgba(255, 255, 255, 0));
                width: 100%;
                height: 60px;
                overflow: hidden;
            }
            .posi{
            position:fixed;
             margin-top: 0;
            top:0;
        }
            
            
 </style>
    </head>
    <body>

        <div id="loader">
         <?php include 'head-index.php';?>    
            <!--       slider content-->
            
           <div id="header-2">
               <h2 style="color:skyblue;" align="center">Uae's Largest Marketplace By Yunfei Yang</h2>
        </div> 
		<div class="container">


			<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<img src="images/1.jpg" alt="image1"/>
						<div class="sb-description">
							<h3>Exchange Every Thing</h3>
						</div>
					</li>
					<li>
						<img src="images/2.jpg" alt="image2"/>
						<div class="sb-description">
							<h3>Honest People</h3>
						</div>
					</li>
					<li>
						<img src="images/3.jpg" alt="image1"/>
						<div class="sb-description">
							<h3>Trusted People</h3>
						</div>
					</li>
					<li>
						<img src="images/4.jpg" alt="image1"/>
						<div class="sb-description">
							<h3>Fast Exchange</h3>
						</div>
					</li>
					<li>
						<img src="images/5.jpg" alt="image1"/>
						<div class="sb-description">
							<h3>By hand to hand</h3>
						</div>
					</li>
					<li>
						<img src="images/6.jpg" alt="image1"/>
						<div class="sb-description">
							<h3>Groundbreaking Artist</h3>
						</div>
					</li>
					<li>
						<img src="images/7.jpg" alt="image1"/>
						<div class="sb-description">
							<h3>Selfless Philantropist</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div><!-- /wrapper -->

			

		</div>

            
<!--            slider content end-->
<div class="container"><hr size="10"><h1 style="color:skyblue;font-family: Times New Roman;">Trending Collections </h1><hr></div>
            
<div class="container" style="display:flex">
    <div class="container">
    <div style="float:left" width="150px" height="150px">
        <img src="images/mobile.gif" alt="mobile" width="150px" height="150px"/><br>
        <span><a href="mobiles.php">Mobile</a></span>
        
    </div>
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/electronics.jpg" alt="Electronicas" width="150px" height="150px"/><br>
        <span><a href="electronics.php">Electronics & Appliances</a></span>
        
    </div>
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/car.jpg" alt="car" width="150px" height="150px"/><br>
        <span><a href="car.php">Car</a></span>
        
    </div>
    <div style="float:left; margin-left:20px;" width="150px" height="150px">
        <img src="images/bike.jpg" alt="bike" width="150px" height="150px"/><br>
        <span><a href="bike.php">Bike</a></span>
        
    </div>
</div>
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
<div class="container" style="margin-top:50px;margin-bottom:50px;">
    <hr>
    <h1 style="color:skyblue;"> About my site</h1>
    <hr>
                <p style="color:skyblue;" align="jastify">The company manages Goody.com, an online auction and shopping website in which
                    people and businesses exchange a broad variety of goods and services worldwide.
                    In addition to its auction-style exchange, the website has since expanded to include "Buy It Now" shopping; shopping by UPC, ISBN, or other kind of SKU (via Half.com); online classified advertisements (via Kijiji or eBay Classifieds); online event ticket trading (via StubHub); and other services. It previously offered online money transfers (via PayPal),[6] which was a wholly owned subsidiary of eBay from 2002 until 2015.

The website is free to use for buyers, but sellers are charged fees for listing items and again when those items are sold</p>


            </div>

                   
<footer id="footer" > <?php include 'includes/footer.php';?> </footer>
 </div> 
 		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
 </body>
</html>

