<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Borris123PSN <?php echo $_GET['p']; ?> </title>
    <link href="../css/main_layout.videos2.css" rel="stylesheet" type="text/css" />
	<link href="../css/swf_download.css" rel="stylesheet" type="text/css" />
    
	<script src="../scripts/swfobject_modified.js" type="text/javascript"></script>
    <script src="../scripts/toggle_show-hide.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <?php include("../scripts/php_includes/google_analytics.php"); ?>
    
    <style> 
    	#center {
        height: 1900px; 
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
        	
            <!--dir script start
                This script determines what directory to go in when a video is clicked.
                It determines whether the word 'tutorial' is in the Title of the link.
                If it is then the link will lead to the tutorials directory, else it 
                it will lead to the videos directory
            -->
            <?php			
                if(stripos($_GET['p'], "beginner tutorial") > 0)
                {
                    $tutType = "beginner tutorials";
                    $diff = 1;
                }
                else if(stripos($_GET['p'], "intermediate tutorial") > 0)
                {
                    $tutType = "intermediate tutorials";
                    $diff = 2;
                }
                else if(stripos($_GET['p'], "advance tutorial") > 0)
                {
                    $tutType = "advanced tutorials";
                    $diff = 3;
                }
                else if(stripos($_GET['p'], "actionscript tutorial") > 0)
                {
                    $tutType = "AS3 tutorials";
                    $diff = 2;
                }
                else if(stripos($_GET['p'], "platform game tutorial") > 0)
                {
                    $tutType = "platform game tutorials";
                    $diff = 3;
                }
                
            ?>
            <!--dir script end-->
            
        	<div id="top"><h1><?php echo $tutType; ?></h1></div>
        
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
                    <!--
                    <h4>CATEGORY:</h4>
                    <p>Game Tutorial</p>
                    -->
                    <h4>DIFFICULTY:</h4>
                    <?php
					if($diff == 1)
					{
						echo "<p><img src=\"../assets/difficulty star 1.png\" width=\"125\" height=\"35\" alt=\"difficulty star 1\" />(Beginner)</p>";
					}
					else if($diff == 2)
					{
						echo "<p><img src=\"../assets/difficulty star 2.png\" width=\"125\" height=\"35\" alt=\"difficulty star 2\" />(Intermediate)</p>";
					}
					else if($diff == 3)
					{
						echo "<p><img src=\"../assets/difficulty star 3.png\" width=\"125\" height=\"35\" alt=\"difficulty star 3\" />(Advanced)</p>";
					}
                    ?>
					<!--
                    <h4>REQUIREMENTS:</h4>
                    <ol>
                        <li>an understanding of the flash interface<br /></li>
                        <li>Knowledge of ActionScritp 3.0</li>
                        <li>a brain</li>
                        <li>2 hands</li>
                        <li>knowing math! if u don't know what 1 +1 is, then don't look  at this video</li>
                    </ol>
                    -->
                    
                    <!--switch characters script-->
                    <?php
					$page =  $_GET['p'];
					
					$qMarkPos = stripos($page, "?");
					if($qMarkPos > 0)
					{
						$page = substr_replace($page, "-", $qMarkPos, 1);
					}
					
					$slashPos = stripos($page, "/");
					if($slashPos > 0)
					{
						$page = substr_replace($page, "-", $slashPos, 1);
					}
					
					$colonPos = stripos($page, ":");
					if($colonPos > 0)
					{
						$page = substr_replace($page, ";", $colonPos, 1);
					}
					
					?>
                    <!--switch characters script end-->
                    
                    <p>After this tutorial you should have this:</p>
                        
					<div class="download_swf_file">
                        <div class="swfFile">
                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="550" height="400" id="FlashID2" title="<?php echo $_GET['p']; ?>">
                                <param name="movie" value="../downloads/<?php echo $page; ?>.swf" />
                                <param name="quality" value="high" />
                                <param name="wmode" value="opaque" />
                                <param name="swfversion" value="6.0.65.0" />
                                <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
                                <param name="expressinstall" value="../scripts/expressInstall.swf" />
                                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                                <!--[if !IE]>-->
                                <object type="application/x-shockwave-flash" data="../downloads/<?php echo $page; ?>.swf" width="550" height="400">
                                  <!--<![endif]-->
                                  <param name="quality" value="high" />
                                  <param name="wmode" value="opaque" />
                                  <param name="swfversion" value="6.0.65.0" />
                                  <param name="expressinstall" value="../scripts/expressInstall.swf" />
                                  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                                  <div>
                                    <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                                    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                                  </div>
                                  <!--[if !IE]>-->
                                </object>
                                <!--<![endif]-->
                          </object>
                        </div>
                
                        <a class="download_btn" href="../downloads/<?php echo $page; ?>.zip"></a>
					</div>
                    
          		</div>
                <!--mainContent end-->

                <!--sidebar start-->
                <div id="sidebar">
                    <?php include("tutorials_sidebar1.php"); ?>
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

