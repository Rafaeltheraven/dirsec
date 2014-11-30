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
            <!-- Placeholder for now... -->
        </div>
        
        <!-- Begin seperator section (bottom) -->
        <div class="seperator content" id="bottom-seperator">
            
            <!-- Container for an email address (contact info) -->
            <div class="content" id="contactinfo">
                <!-- Will use recaptcha mailhide to protect spam -->
                <a href="http://www.google.com/recaptcha/mailhide/d?k=01g-3xbBaAqHRpIK6ZancRVA==&amp;c=1kevnjVi_aJfQ-xQYx1ydw-tuIeSQpGAbaRTxEGMH0E=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501g-3xbBaAqHRpIK6ZancRVA\75\75\46c\0751kevnjVi_aJfQ-xQYx1ydw-tuIeSQpGAbaRTxEGMH0E\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">h...</a>@gmail.com
            </div>
        </div>
        
        <!-- Begin footer with maps list -->
        <div class="content footer" id="footer">
            <h2 id="maplist-header">
                Maps:
            </h2>
            
        </div>
    </div>
  </body>
</html>
