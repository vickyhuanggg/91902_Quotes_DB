<!DOCTYPE html>
<html lang="en">

<?php include("content/head.php"); ?>

<body>
    <div class = "box wrapper">
        <!-- h1 is the largest heading -->    
            <?php 
            include("content/head_nav.php")
            ?>
        
        <div class = "box logo">
            <img class="img-circle" src="images/gen_logo.png" height="150"  alt="generic logo">
        </div>
        <!-- / nav --> 
            
        <div class="box main">
            
            <?php
            
            if(!isset($_REQUEST['page'])) {
                include("content/home.php");
            }   // end of if that includes home page
            
            else {
                // prevents users from navigating through file system
                $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);
                include("content/$page.php");
                
            }  // end of else that includes requested content
            
            ?>
            
        </div>    <!-- / main -->
        
        <?php include("content/footer.php"); ?>
        
    </div> <!-- end of the wrapper div -->
          
    
</body>
</html>

    

    