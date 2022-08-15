<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Quick Quotes</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="theme/quick_quotes.css"> 
    <link rel="stylesheet" href="theme/font-awesome.min.css">
    <link rel="stylesheet" href="theme/auto_complete.css">
    
</head>

<body>
    <div class = "box wrapper">
        <!-- h1 is the largest heading -->    
        
        <div class = "box logo">
            <img class="img-circle" src="images/gen_logo.png" height="150"  alt="generic logo">
        </div>
        
        <div class="box banner">
            
            <a class="backhome" href="index.php"><h1>Quick Quotes</h1></a>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            
            <div class="linkwrapper">
                <div class="commonsearches">
                    
                    <a class="topnav" href="index.php?page=showall">All</a> | 
                    
                    <a class="topnav" href="index.php?page=recent">Recent</a> | 
                    <a class="topnav" href="index.php?page=random">Random</a> 
                </div>  <!-- / common searches -->
            
                <div class="topsearch">
                    
                    <!-- Quick Search -->           
                    <form method="post" action="index.php?page=quick_search" enctype="multipart/form-data">

                        <input class="search quicksearch" type="text" name="quick_search" size="40" value="" required placeholder="Quick Search..." />

                        <input class="submit" type="submit" name="find_quick" value="&#xf002;" />

                    </form>     <!-- / quick search -->
                    
                </div>  <!-- / top search -->
                
                <div class="topadmin">
                    
                    <?php 
                    
                    if (isset($_SESSION['admin'])) {
                        
                    ?>
                    
                    <a href="#"></a>
                    
                    <!-- add quote in link -->      
                    <a class="topnav top-icons" href="index.php?page=../admin/new_quote" title="Add a quote"><i class="fa fa-plus fa-2x"></i></a>
                    
                    &nbsp; &nbsp;
                    
                    <a class="topnav top-icons" href="index.php?page=../admin/logout" title="log out"><i class="fa fa-sign-out fa-2x"></i></a>
                    
                    <?php
                }   // end in admin mode if

                    else {
                    
                    ?>
                    
                    <a class="topnav top-icons" href="index.php?page=../admin/login" title="log in"><i class="fa fa-sign-in fa-2x"></i></a>
                    
                    <?php
                    }   // end log in mode else
                        ?>
                    
                </div>  <!-- / top admin -->
                
            </div>  <!--- / link wrapper -->
            
        </div>    <!-- / nav -->      
            
        <div class = "box main">
            <!-- h2 is the second largest heading. There are 6 headings -->
            <h2>First Page heading</h2>
            <!-- p is a paragraph -->
            <p>Sugar plum powder dessert bonbon powder lollipop lollipop muffin I love. Tiramisu dessert I love sugar plum apple pie marzipan chocolate bar brownie. Pudding tiramisu caramels biscuit tiramisu. I love gummies gummies pie sweet pudding I love I love. Donut halvah candy oat cake donut. Caramels wafer danish jelly-o.
            Jelly beans gingerbread jelly tootsie roll. Lemon drops bear claw I love tiramisu candy canes cake. Jelly-o apple pie powder tart I love candy tiramisu. Topping liquorice cake sesame snaps brownie. Lemon drops jelly beans brownie danish I love fruitcake cotton candy danish. Dragée pastry halvah macaroon I love chocolate bar caramels liquorice. Halvah cupcake muffin fruitcake pastry I love bear claw I love jelly. Tart chocolate bar croissant danish jelly. Sugar plum powder cupcake muffin gingerbread I love sweet.
            Biscuit jelly I love jelly-o candy canes chupa chups topping lemon drops I love. Sesame snaps macaroon lemon drops carrot cake I love. Chocolate bar gingerbread chupa chups. Dessert chocolate pastry liquorice tootsie roll lemon drops sweet macaroon liquorice. I love muffin bonbon. Cupcake apple pie chocolate cake bonbon topping. Macaroon gummi bears dragée caramels donut chocolate.
            </p>
            *********************************************************  
            <br> <!-- br is a break line -->
        </div>
        
        <div class = "box footer">
            CC Whaea Suzanne 2022
        </div>    
    
    </div> <!-- end of the wrapper div -->
</body>
</html>

    

    