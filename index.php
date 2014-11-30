<html>
  <head>
    <title>Dirsec.net</title>
    
    <!-- Begin metainformation tags -->
    <meta charset="UTF-8">
    <meta name="description" content="TF2 Quality Custom Maps">
    <meta name="keywords" content="TF2 Custom Maps Gaming Team Fortress">
    <meta name="author" content="The Dirsec Team.">
    
    <!-- Begin external file (css/js) links -->
    <link rel="stylesheet" type="text/css" href="media/stylesheet.css">
  </head>
  <body>
      
    <!-- Basic wrapper for the content to stay centered -->
    <div id="body-wrapper">
        
        <!-- Begin main div for the header -->
        <div class="header content" id="mainheader">
            
            <!-- Container for the logo icon -->
            <div class="header content" id="logo">
                
            </div>
            
            <!-- Container for the actual name text -->
            <div class="header content" id="title">
                <h1>Dirsec.net</h1>
            </div>
            
        </div>
        
        <!-- Begin seperator section (with tagline) -->
        <div class="seperator content" id="top-seperator">
            
            <!-- Container for the tagline itself -->
            <div class="content" id="tagline">
                
                <!-- PHP to choose a tagline from a list -->
                <?php
                    $subtitles = array(
                      1 =>  "Over 30 custom"
                    );
                    $max = count($taglines);
                    $min = $max - ($max - 1);
                    echo($subtitles[rand($min, $max)]);
                ?>
            </div>
            
            <!-- List of players in game. Will implement in the future -->
            <div class="content" id="player count">
                <!-- Leave blank for now since requires API -->
            </div>
        </div>
        
        <!-- Begin main website body -->
        <div class="content body" id="body-background">
        </div>
    </div>
  </body>
</html>
