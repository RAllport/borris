<!DOCTYPE HTML>
<html>
<head>

	<title>Borris123PSN Videos</title>
	<link href="css/main_layout.css" rel="stylesheet" type="text/css" />
    <link href="css/video_link.css" rel="stylesheet" type="text/css" />
  
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" />
    
	<script src="scripts/swfobject_modified.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <?php include("scripts/php_includes/google_analytics.php"); ?>
    
    <style> #center {
        height: 13000px; 
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
        	  <h1>videos</h1></div>
            
            <!--center start-->
			<div id="center">
            	
                <!--mainContent start-->
                <div id="mainContent">
                	
                    <?php
					// set feed URL
					$feedURL = 'http://gdata.youtube.com/feeds/api/users/Borris123PSN/uploads?start-index=1&max-results=50';
					
					// read feed into SimpleXML object
					$sxml = simplexml_load_file($feedURL);
					?>
					  <h1><?php echo $sxml->title; ?></h1>
					<?php
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
                      
                      <!--dir script start
                    	This script determines what directory to go in when a video is clicked.
                        It determines whether the word 'tutorial' is in the Title of the link.
                        If it is then the link will lead to the tutorials directory, else it 
                        it will lead to the videos directory
                    -->
					<?php			
						if(stripos($media->group->title, "beginner tutorial") > 0)
						{
							$dir = "tutorials/";
							$diff = 1;
						}
						else if(stripos($media->group->title, "intermediate tutorial") > 0)
						{
							$dir = "tutorials/";
							$diff = 2;
						}
						else if(stripos($media->group->title, "advance tutorial") > 0)
						{
							$dir = "tutorials/";
							$diff = 3;
						}
						else if(stripos($media->group->title, "actionscript tutorial") > 0)
						{
							$dir = "tutorials/";
							$diff = 2;
						}
						else if(stripos($media->group->title, "platform game tutorial") > 0)
						{
							$dir = "tutorials/";
							$diff = 3;
						}
						else 
						{
							$dir = "videos/";
						}
					?>
                    <!--dir script end-->
                    
                      
                    <a class="videoLink" href="<?php echo $dir; ?>video.php?v=<?php echo $my_array_of_vars['v']; ?>&p=<?php echo $media->group->title; ?>">
                    
                    	<img class="thumbnail" src="<?php echo $thumbnail;?>" />
                    
                        <h2 class="title">
							<?php echo $media->group->title; ?>
                        </h2>
                        
                        <div class="decription">
                        	<p>
								<?php echo $media->group->description; ?>
                            </p>
                        </div>
                        
                        <div class="Vinfo">
                            <span class="attr">By:</span> <?php echo $entry->author->name; ?>
                            <span class="attr">Duration:</span> <?php printf('%0.2f', $length/60); ?> min.
                            <span class="attr">Views:</span> <?php echo $viewCount; ?>
                            <span class="attr">Rating:</span> <?php echo $rating; ?> 
                    	</div>
                    </a>
                          
					<?php
					}
					?>
                    
                    
                	
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
