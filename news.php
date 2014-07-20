<!DOCTYPE HTML>
<html>
<head>

	<title>Borris123PSN News</title>
	<link href="css/main_layout.css" rel="stylesheet" type="text/css" />
  
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" />
    
	<script src="scripts/swfobject_modified.js" type="text/javascript"></script>
	
    <!--Google Analytics-->
    <?php include("scripts/php_includes/google_analytics.php"); ?>
    
    <style> #center {
        height: 1600px; 
        }
    </style>
    
</head>

<body>
	<!--wrapper start-->
    <div id="wrapper">
    	
        <!--header start-->
    	<div id="header">
            <?php include("scripts/php_includes/header.php"); ?>
        </div>
        <!--header end-->
      
        <!--menu bar start-->
        <div id="flashMenu">
            <?php include("scripts/php_includes/navigation.php"); ?>
        </div>
        <!--menu bar end-->
        
        <!--contentWrapper start-->
		<div id="contentWrapper">
        
        	<div id="top">
        	  <h1>news</h1></div>
            
            <!--center start-->
			<div id="center">
            	
                <!--mainContent start-->
                <div id="mainContent">
                    <iframe src="http://borris123psn-blogs.blogspot.com/" style="height: 1550px; width: 630px; border: 0;" scrolling="no" frameBorder="0">
    				</iframe>
                </div>
                <!--mainContent end-->
				
                <!--sidebar start-->
				<div id="sidebar">
                    <?php include("scripts/php_includes/sidebar1.php"); ?>
                </div>
                <!--sidebar end-->
                
        	</div>
            <!--center end-->
            
			<div id="bottom"></div>
            
		</div>
      	<!--contentWrapper end-->
        
        <!--footer start-->
        <div id="footer">
        	<?php include("scripts/php_includes/footer.php"); ?>
        </div>
        <!--footer end-->
      
    </div>
    <!--wrapper end-->
    
    <script type="text/javascript">
    swfobject.registerObject("FlashID");
    </script>
</body>
</html>
