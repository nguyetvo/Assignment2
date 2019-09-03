<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
        <link rel="stylesheet" href="style.css" />
		
        <title>Azzy </title>
    </head>

    <body>
		<!-- Header -->
        <header>
			
			<div id="header-top-left">
				<!-- Search form -->
				<div id="search-form">
					<form action="search.php" method="get">
						<input type="text" name="q" id="q" class="search-field" placeholder="Write at least 3 characters"/> 
						<input type="submit" class="search-button" id="seek" value="" />
					</form>
				</div>
						
				<!-- Right part of the header -->
				<div id="header-right">	 	
					<select id="language-switcher">
						<option value="1">English</option>
						<option value="2">Vietnamese</option>
					</select>
					<select id="currency-picker">
						<option value="EUR" >USD</option>
						<option value="GBP" >VND</option>
						<option value="CAD" >CAD</option>
						<option value="JPY" >JPY</option>
					</select>

				</div>	
			</div>	
			
			<div id="menu">
				<div id="menu-content">
					<!-- Navigation -->
					<label id="collapse" for="_1">
						<img  id="menuphoto" src="images/menu.svg">
					</label>
					<input id="_1" type="checkbox" name="mycheckbox"/>	
					<ul id="mainmenu">
							
						<li class="submenu">  
							<a href="ConnectToDB.php" title="Store">View Database</a>
						</li>
						<li class="submenu">
							<a href="InsertData.php" title="Insert">Insert</a>
						</li>
						<li class="submenu" id="logoset">
							<a href="index.php">
								<img id="logo" src="images/Sneaker_logo.svg"/> <br/> 
								<img id="sneaker" src="images/logo_name.png"/>
							</a>
						</li>
						<li class="submenu">
							<a href="UpdateData.php" title="Update">Update</a>
						</li>
						<li class="submenu">
							<a href="DeleteData.php" title="Delete">Delete</a>
						</li>
					</ul>
					
				</div>
			</div>
        </header>
		
		<!-- Content -->
			
			
			<div id="information">
				
				<a href="#" class="shipping">
					<div class="wrapper">
						<div class="column">
							
							<h2>We Ship Worldwide</h2>
							<p>We ship worldwide on pretty much all <br/>our items. If not, we’ll state it on the <br/>product page.</p>
												
						</div>
						<div class="column">
							<div class="transbox">
							<h2>Free Shipping</h2>
							<p>On all Vietnam orders over $50<br>On all England orders over $150<br/>On all Intercontinental orders over $300</p>
							</div>
						</div>
						<div class="column">
							<div class="icon" id="icon_return">
								
							</div>
							<h2>7 Day Returns</h2>
							<p>We offer 7 days returns on all  items <br/>returned in original and re-sellable <br/>condition.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<!-- Footer -->
		<footer>
			<div class="wrapper">                   
                <div class="column">               
					<div class="icons" id="question"><img src="images/question.png"/></div>
					<div class="text_footer">
						<h4>Got any questions?</h4>                    
						<p class="links">
							<a href="mailto:nguyetvocompany@gmail.com">nguyetvocompany@gmail.com</a>	 
						</p>
					</div>
                </div>
                <div class="column">
                    <div class="icons" id="friend"><img src="images/friend.png"/></div>
					<div class="text_footer">
						<h4>See more as...</h4>                    
						<div id="social-links">
							<a href="#" target="_blank" title="Facebook"><img src="images/facebook.png"/></a>
							<a href="#" target="_blank" title="Twitter"><img src="images/twitter.png"/></a>
				
						</div>   
					</div>
                </div>
                <div class="column">
                    <div class="icons" id="news"><img src="images/news.png"/></div>
					<div class="text_footer">
						<h4>Join our newsletter!</h4>                    
						<form action="" method="post" id="subscribe-form" name="subscribe-form">
							<input type="email" value="" name="mail" id="email" placeholder="Enter your e-mail address"><button type="submit" id="validate">Sign up</button>
						</form>
						<h2 id='result'></h2>
					</div>
                </div>
				<hr>

        
                <div class="column">
					<div class="icons" id="customer"><img src="images/customer.png"/></div>
					<div class="text_footer">
						<h4>Customer Service</h4>
						<p class="links">
							<a href="#" title="Shipping & Returns" >Shipping & Returns</a><br/>		      
							<a href="mailto:nguyetvocompany@gmail.com" title="Contact us" >Contact us</a>
						</p>
					</div>
                </div>
                <div class="column">
					<div class="icons" id="payment"><img src="images/payment.png"/></div>
					<div class="text_footer">
						<h4>Payment Methods</h4>
						<p>	
							Visa, Mastercard, Paypal
						</p>
					</div>
                </div>
				<hr>        
				<div id="footer_left">© Nguyet Vo Company - 2019</div>
				

			</div>
                    
		</footer>
		
        <script src="js/jquery-1.11.3.js"></script>
		<script src="js/myscript.js"></script>	
			
    </body>
</html>