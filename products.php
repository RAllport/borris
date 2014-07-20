<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Borris123PSN Prodcts</title>
	<link href="css/main_layout.css" rel="stylesheet" type="text/css" />
	
    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Borris, Borris123, Borris123PSN, borris123beta, borris123beta.dylanmadisetti.com, Adobe, Flash, Tutorials, Games, Rohaan Allport,Dylan Madisetti" /> 
    <meta name="description" content="The Borris Website. The place for Games, Apps, Programming tutorials, Flash tutorials and much more" />
    <meta name="author" content="Rohaan Allport" />
    <meta name="robots" content="index, follow, nocache, odp" /> 
    <meta name="allow-search" content="yes" /> 
    <meta name="language" content="en" />
    <meta name="distribution" content="global" />
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" />
    
	<script src="scripts/swfobject_modified.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-25957146-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    
    <style> #center {
        height: 1200px; 
        }
    </style>
    
</head>

<body>
	<!--wrapper start-->
    <div id="wrapper">
    	
        <!--header start-->
    	<div id="header">
            <?php
				$file = fopen("header.html", "r");
		
				while(!feof($file))
				{
					echo fgets($file);
				}
				fclose($file);
			?>
        </div>
        <!--header end-->
      
        <!--menu bar start-->
        <div id="flashMenu">
            <?php
				$file = fopen("flashMenu.html", "r");
		
				while(!feof($file))
				{
					echo fgets($file);
				}
				fclose($file);
			?>
        </div>
        <!--menu bar end-->
        
        <!--contentWrapper start-->
		<div id="contentWrapper">
        
        	<div id="top">
        	  <h1>Products</h1>
            </div>
            
            <!--center start-->
			<div id="center">
            
            	<!--mainContent start-->
                <div id="mainContent">
					
          			<h4>About this page</h4>
          			<p>
                    	Welcome to the Borris123PSN products page. Here you may register a producted of your
                        choice that you would like to be made for you. this includes web pages, web scripts,
                        web, applications, desktop applications, animations, graphic design, and logos.
                        All that is reqired is to fill out 
                        some information in the form below.
					</p>
                    <p>
                    	I don't completely understand what this is about or how it works. Please <a href="#">Help</a>.
                    </p>
                    
                    <p>
					An <span class="requiered_field"> * </span> indicates a required field
					</p>
                    
          			<form action="" method="post">
                    	<fieldset>
                        <legend>Personal Imformation</legend>
                        	<label>First Name: </label>
							<input type="text" name="firstName"/>
							<label>Last Name: </label>
							<input type="text" name="lastName"/> <br/>
                            <label><span class="requiered_field"> * </span>Email address: </label>
							<input type="text" name="email-address"/>
                            <p>
                            	The email address field is required so that your product can be sent to you
                                when it is complete. Your email address will not be saved.
                            </p>
						</fieldset>
                        
                        <fieldset>
                        <legend>Product Imformation</legend>
                            <div> <span class="requiered_field"> * </span>Product Type</div>
                            <select>
								<option>Web site/page design</option>
								<option>Web script</option>
								<option>Web application</option>
								<option>Desktop application</option>
								<option>Animation</option>
								<option>Graphic design</option>
								<option>Logo Design</option>
								<option>ActionScript Script</option>
								<option>Animation Sprites</option>
                                <option>Other</option>
							</select>
                            <p>
                            	Product Types have different prices. See <a href="#">Prices</a>
                            </p>
                            
                            <p>
                            	If 'Other', type a short description of what you would like below. <br/>
                                <label>Short Description: </label>
                                <input type="text" name="short-description"/>                              
                            </p>
                            
                            <p>
                                <label> <span class="requiered_field"> * </span>Detailed Description: </label> <br/>
                                <textarea name="detailed-description" rows="10" cols="60">Detailed description of the product and any aditional imformation requiered to make the product.
                                </textarea>
                            </p>
                            
                            <label>I would like to receive updates of my product progess via email.</label>
                            <div> <label> <input type="radio" name="receive_information" value="Y"/> Yes </label></div>
							<div> <label> <input type="radio" name="receive_information" value="N"/> No </label> </div>
                            
                        </fieldset>
                        
                        <p>
                        	After submitting you will be sent an email of the imformation you filled out along 
                            with a product code. You will also receive a second email giving an estimated time 
                            it will take to complete the product. You may also request update of your product 
                            progress via email <a href="#">here</a>.
                        </p>
                        
                        <p>
                        	When your product is complete you will be sent a notification email imforming you 
                            that your product is complete along with screen shots if possible.  
                        </p>
                        
                        <p>
                        	Note: You will be charged by the hour and by the price per hour of the Product Type.
                            After your product is complete and sent to you, any changes that you require will be 
                            counted as additional hours and you will be charged for the additional hours. 
                            <a href="#">More Imforation</a>
                        </p>
                        
                        <p id="submit_reset">
                            <input type="submit" name="submit" onClick="submitted()" />
                            <input type="reset" name="reset" onClick="resetinfo()" />
                        </p>
                    </form>
          
                </div>
                <!--mainContent end-->
				
                <!--sidebar start-->
				<div id="sidebar">
                    <?php
                        $file = fopen("sidebar1.html", "r");
                
                        while(!feof($file))
                        {
                            echo fgets($file);
                        }
                        fclose($file);
                    ?>
                </div>
                <!--sidebar end-->
                
        	</div>
            <!--center end-->
            
			<div id="bottom"></div>
            
		</div>
      	<!--contentWrapper end-->
        
        <!--footer start-->
        <div id="footer">
        <?php
                $file = fopen("footer.html", "r");
        
                while(!feof($file))
                {
                    echo fgets($file);
                }
                fclose($file);
        ?>
        </div>
        <!--footer end-->
      
    </div>
    <!--wrapper end-->
    
    <script type="text/javascript">
    swfobject.registerObject("FlashID");
    </script>
</body>
</html>
