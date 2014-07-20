<!DOCTYPE HTML>
<html>
<head>

	<title>Borris123PSN Home</title>
	<link href="css/main_layout.css" rel="stylesheet" type="text/css" />
	
    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Borris, Borris123, Borris123PSN, borris123psn.dylanmadisetti.com, Adobe, Flash, Tutorials, Games, Rohaan Allport,Dylan Madisetti" /> 
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
    <?php include("scripts/php_includes/google_analytics.php"); ?>
    
    <style> #center {
        height: 710px; 
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
        	  <h1>home</h1></div>
            
            <!--center start-->
			<div id="center">
            
            	<!--mainContent start-->
                <div id="mainContent">
					<p>
            			<object id="FlashID3" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="630" height="372">
                            <param name="movie" value="assets/swf/home page slide show.swf" />
                            <param name="quality" value="high" />
                            <param name="wmode" value="opaque" />
                            <param name="swfversion" value="6.0.65.0" />
                            <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
                            <param name="expressinstall" value="scripts/expressInstall.swf" />
                            <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                            <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="assets/swf/home page slide show.swf" width="630" height="372">
                                <!--<![endif]-->
                                <param name="quality" value="high" />
                                <param name="wmode" value="opaque" />
                                <param name="swfversion" value="6.0.65.0" />
                                <param name="expressinstall" value="scripts/expressInstall.swf" />
                                <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                                <div>
                                    <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                                    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                                </div>
                                <!--[if !IE]>-->
                            </object>
                            <!--<![endif]-->
                        </object>
          			</p>
          			<h4>welcome</h4>
          			<p>
                    	Welcome to borris123beta.dylanmadisetti.com, the number one  place to keep in touch with me (
                        <a href="http://www.youtube.com/user/Borris123PSN?feature=mhee#p/u/32/Aq3ngHWO0tU">Borris123PSN</a>
                        ) and my activity on the web. Watch videos,  tutorials, play games and more.
                    </p>
          			<p>
                    	Learn Flash CS4 and Flash CS5 along with ActionScript 3 to make your Flash content even more fun and interactive.
						Learn at your own pace with the video tutorials present on YouTube.com
						Organized by difficulty into &quot;Beginner&quot;, &quot;Intermediate&quot;, and &quot;Advanced&quot;,   and then further categorized, you are sure to find what you need.
						Make animations, games, web applications, desktop applications, and more.
					<p>
                    	Please be aware that this site is still in progress and does  not currently have all content and features implemented. There is still a large  amount of work to be put into this website.
					</p>
          
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
