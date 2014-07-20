<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Borris123PSN Prodct Help</title>
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
        	  <h1>Product</h1>
              <h1>help</h1>
          </div>
            
            <!--center start-->
			<div id="center">
            
            	<!--mainContent start-->
                <div id="mainContent">
					
          			
          
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
