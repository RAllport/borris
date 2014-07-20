<!DOCTYPE HTML>
<html>
<head>

	<title>Borris123PSN ActionScript Tutorials</title>
	<link href="../css/main_layout.css" rel="stylesheet" type="text/css" />
    <link href="../css/tutorial_link.css" rel="stylesheet" type="text/css" />
  
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" />
    
	<script src="../scripts/swfobject_modified.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <?php include("../scripts/php_includes/google_analytics.php"); ?>
    
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
            <?php include("../scripts/php_includes/header.php"); ?>
        </div>
        <!--header end-->
      
        <!--menu bar start-->
        <div id="flashMenu">
            <?php include("../scripts/php_includes/navigation.php"); ?>
        </div>
        <!--menu bar end-->
        
        <!--contentWrapper start-->
		<div id="contentWrapper">
        
        	<div id="top">
				<h1>as3 tutorials</h1>
       	  	</div>
            
            <!--center start-->
			<div id="center">
            	
                <!--mainContent start-->
                <div id="mainContent">
                	
                    <h2>ActionScript 3.0 Essentials</h2>
                    
                    <?php
					// set feed URL
					$feedURL = 'http://gdata.youtube.com/feeds/api/playlists/PLD15EFB9E76D3707C?v=2';
					
					// read feed into SimpleXML object
					$sxml = simplexml_load_file($feedURL);
					
					// iterate over entries in feed
					foreach ($sxml->entry as $entry) {
					  // get nodes in media: namespace for media information
					  $media = $entry->children('http://search.yahoo.com/mrss/');
					  
					  // get video player URL
					  $attrs = $media->group->player->attributes();
					  $watch = $attrs['url']; 
					  
					  // get video thumbnail
					  $attrs = $media->group->thumbnail[0]->attributes();
					  $thumbnail = $attrs['url']; 
							
					  // get <yt:duration> node for video length
					  $yt = $media->children('http://gdata.youtube.com/schemas/2007');
					  $attrs = $yt->duration->attributes();
					  $length = $attrs['seconds']; 
					  
					  // get <yt:stats> node for viewer statistics
					  $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
					  $attrs = $yt->statistics->attributes();
					  $viewCount = $attrs['viewCount']; 
					  
					  // get <gd:rating> node for video ratings
					  $gd = $entry->children('http://schemas.google.com/g/2005'); 
					  if ($gd->rating) {
						$attrs = $gd->rating->attributes();
						$rating = $attrs['average']; 
					  } else {
						$rating = 0; 
					  } 
					  
					  // get video id from url ($watch)
					  parse_str( parse_url( $watch, PHP_URL_QUERY ), $my_array_of_vars ); 
					  ?>
                      
                    
                    <a class="tutorialLink" href="video.php?v=<?php echo $my_array_of_vars['v']; ?>&p=<?php echo $media->group->title; ?>">
                    
                        <h3 class="title">
                        	<?php
								$strings = explode(":", $media->group->title);
								$newTitle = $strings[1];
								echo $newTitle; 
							?>
                        </h3>
                        
                        <div class="Vinfo">
                            <span class="attr">Duration:</span> <?php printf('%0.2f', $length/60); ?> min.
                    	</div>
                    </a>
                          
					<?php
					}
					?>
                    
                </div>
                <!--mainContent end-->
				
                <!--sidebar start-->
				<div id="sidebar">
                    <?php include("../sidebar1.html"); ?>
                </div>
                <!--sidebar end-->
                
        	</div>
            <!--center end-->
            
			<div id="bottom"></div>
            
		</div>
      	<!--contentWrapper end-->
        
        <!--footer start-->
        <div id="footer">
        	<?php include("../scripts/php_includes/footer.php"); ?>
        </div>
        <!--footer end-->
      
    </div>
    <!--wrapper end-->
    
    <script type="text/javascript">
    swfobject.registerObject("FlashID");
    </script>
</body>
</html>
