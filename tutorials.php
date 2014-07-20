<!DOCTYPE HTML>
<html>
<head>

	<title>Borris123PSN Tutorials</title>
	<link href="css/main_layout.css" rel="stylesheet" type="text/css" />
  
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" />
    
	<script src="scripts/swfobject_modified.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <?php include("scripts/php_includes/google_analytics.php"); ?>
    
    <style> #center {
        height: 700px; 
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
        	  <h1> tutorials</h1></div>
            
            <!--center start-->
			<div id="center">
            	
                <!--mainContent start-->
                <div id="mainContent">
					<p>
                    	About Borris123PSN Tutorials: Welcome visitor to the tutorials section of my website. 
                        All my tutorials are free of charge for you to use. the Borris123PSN tutorials allows 
                        you to train yourself at your own pace and master the use of your software. Most 
                        tutorials come with exercise files which are free to download, use, and edit to your 
                        heart's consent. I will be offering a wide range of tutorials for many popular 
                        software and computer languages. Some of these tutorials include 'Adobe Flash 
                        tutorials',  'ActionScript 3 tutorials', 'Adobe Dreamweaver tutorials', and even 
                        'HTML and XHTML tutorials'. If you are trying to improve your skills for work, or 
                        working on a school project, Borris123PSN tutorials is the right place for you.
                    </p>
					<p>
                    	Select your tutorial below:
					</p>
                    
                    <table>
                        <tr>
                            <th>SOFTWARE</th>
                            <th>CATEGORY</th>
                            <th>DIFFICULTY</th>
                        </tr>
                        <tr>
                            <td><img src="assets/flash_cs5.png" width="90" height="80" alt="Flash CS5" /></td>
                            <td><a href="tutorials/tutorials_actionscript.php"><h2>ActionScript 3.0 Tutorials</h2></a></td>
                            <td><div class="difficulty_star2"></div></td>
                        </tr>
                        <tr>
                            <td><img src="assets/flash_cs5.png" width="90" height="80" alt="Flash CS5" /></td>
                            <td><a href="tutorials/tutorials_beginner.php"><h2>Flash CS4/CS5 Beginner Tutorials</h2></a></td>
                            <td><div class="difficulty_star1"></div></td>
                        </tr>
                        <tr>
                            <td><img src="assets/flash_cs5.png" width="90" height="80" alt="Flash CS5" /></td>
                            <td><a href="tutorials/tutorials_intermediate.php"><h2>Flash CS4/CS5 Intermediate Tutorials</h2></a></td>
                            <td><div class="difficulty_star2"></div></td>
                        </tr>
                        <tr>
                            <td><img src="assets/flash_cs5.png" width="90" height="80" alt="Flash CS5" /></td>
                            <td><a href="tutorials/tutorials_advanced.php"><h2>Flash CS4/CS5 Advanced Tutorials</h2></a></td>
                            <td><div class="difficulty_star3"></div></td>
                        </tr>
                        <tr>
                            <td><img src="assets/flash_cs5.png" width="90" height="80" alt="Flash CS5" /></td>
                            <td><a href="tutorials/tutorials_platform_game.php"><h2>Flash CS4/CS5 Platfrom Game Tutorials</h2></a></td>
                            <td><div class="difficulty_star3"></div></td>
                        </tr>
                    </table>
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
