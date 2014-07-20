<!DOCTYPE HTML>
<html>
<head>

    <title>Borris123PSN - Videos: <?php echo $_GET['p']; ?> </title>
    <link href="../css/main_layout.videos2.css" rel="stylesheet" type="text/css" />

	<script src="../scripts/swfobject_modified.js" type="text/javascript"></script>
    <script src="../scripts/toggle_show-hide.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <?php include("../scripts/php_includes/google_analytics.php"); ?>
    
    <style> 
    	#center {
        height: 900px; 
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
        
        	<div id="top"><h1>Videos</h1></div>
        
            <!--center start-->
          <div id="center">
            
            	<!--mainContent start-->
                <div id="mainContent">
                
					<?php
					// the video id
					$vid = $_GET['v'];
					
					// function to parse a video <entry>
					function parseVideoEntry($entry) {      
					  $obj= new stdClass;
					  
					  // get nodes in media: namespace for media information
					  $media = $entry->children('http://search.yahoo.com/mrss/');
					  $obj->title = $media->group->title;
					  $obj->description = $media->group->description;
					  
					  // get video player URL
					  $attrs = $media->group->player->attributes();
					  $obj->watchURL = $attrs['url']; 
					  
					  // get video thumbnail
					  $attrs = $media->group->thumbnail[0]->attributes();
					  $obj->thumbnailURL = $attrs['url']; 
							
					  // get <yt:duration> node for video length
					  $yt = $media->children('http://gdata.youtube.com/schemas/2007');
					  $attrs = $yt->duration->attributes();
					  $obj->length = $attrs['seconds']; 
					  
					  // get <yt:stats> node for viewer statistics
					  $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
					  $attrs = $yt->statistics->attributes();
					  $obj->viewCount = $attrs['viewCount']; 
					  
					  // get <gd:rating> node for video ratings
					  $gd = $entry->children('http://schemas.google.com/g/2005'); 
					  if ($gd->rating) { 
						$attrs = $gd->rating->attributes();
						$obj->rating = $attrs['average']; 
					  } else {
						$obj->rating = 0;         
					  }
						
					  // get <gd:comments> node for video comments
					  $gd = $entry->children('http://schemas.google.com/g/2005');
					  if ($gd->comments->feedLink) { 
						$attrs = $gd->comments->feedLink->attributes();
						$obj->commentsURL = $attrs['href']; 
						$obj->commentsCount = $attrs['countHint']; 
					  }
					  
					  // get feed URL for video responses
					  $entry->registerXPathNamespace('feed', 'http://www.w3.org/2005/Atom');
					  $nodeset = $entry->xpath("feed:link[@rel='http://gdata.youtube.com/schemas/
					  2007#video.responses']"); 
					  if (count($nodeset) > 0) {
						$obj->responsesURL = $nodeset[0]['href'];      
					  }
						 
					  // get feed URL for related videos
					  $entry->registerXPathNamespace('feed', 'http://www.w3.org/2005/Atom');
					  $nodeset = $entry->xpath("feed:link[@rel='http://gdata.youtube.com/schemas/
					  2007#video.related']"); 
					  if (count($nodeset) > 0) {
						$obj->relatedURL = $nodeset[0]['href'];      
					  }
					
					  // return object to caller  
					  return $obj;      
					}   
					
					// set video data feed URL
					$feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $vid;
				
					// read feed into SimpleXML object
					$entry = simplexml_load_file($feedURL);
					
					// parse video entry
					$video = parseVideoEntry($entry);
					   
					// display main video record
					echo "<h2>{$video->title}</h2>\n";
					
					echo '<div class="video"><iframe width="560" height="315" src="http://www.youtube.com/embed/' . $vid . '" frameborder="0" allowfullscreen></iframe></div>';  
					?>
                    
                    <a onclick="toggle_visibility('video_description');" class="show-hide_button" >Show/Hide</a>
                    
                    <?php
					echo '<div class="desciption">';
						
						echo "<h4>DECRIPTION:</h4>\n";
						
						echo "<p id='video_description'>$video->description</p>\n";
						
						echo "<div></div>";
					echo '</div>';
					?>
                    
          </div>
                <!--mainContent end-->

                <!--sidebar start-->
                <div id="sidebar">
                	<?php include("videos_sidebar1.html"); ?>
            	</div>
                <!--sidebar end-->
                
            </div>
            <!--center start-->
        
        	<!--bottom start-->
          	<div id="bottom">
                <ul>
                    <li>Posted by: Borris123PSN</li>
                    <li>Visit <a href="http://www.youtube.com/user/Borris123PSN">Borris123PSN's channel</a> at Youtube</li>
                    <li>Want to learn more about me? visit the <a href="http://borris123psn.dylanmadisetti.com/aboutme.html">about me</a> page at <a href="http://borris123psn.dylanmadisetti.com">borris123psn.dylanmadisetti.com</a></li>
                    <li>Like these videos? go to my channel and hit the &quot;like&quot; button!</li>
                </ul>
            </div>
            <!--bottom end-->
            
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

