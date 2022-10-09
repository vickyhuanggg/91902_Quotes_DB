<?php

if(!isset($_REQUEST['authorID']))
{
    header('Location: index.php');
}



// Get Author details from author table
$author_to_find = $_REQUEST['authorID'];


$find_sql = "SELECT * FROM `Quotes`
JOIN author ON (`author`.`Author_ID` = `Quotes`.`Author_ID`)WHERE `quotes`.`Author_ID` = $author_to_find
";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

$country1 = $find_rs['Country1_ID'];
$country2 = $find_rs['Country2_ID'];

$occupation1 = $find_rs['Career1_ID'];
$occupation2 = $find_rs['Career2_ID'];

//get author name
include("get_author.php");

?>

<br />

<div class="about">
    <h2>
        <?php echo $full_name ?> - About
    </h2>
    
    <p><b>Born:</b> <?php echo $find_rs['Born']; ?> </p>
    
    <p>
        <?php
        // show countries...
        country_job($dbconnect, $country1, $country2, "Country", "Countries", "country", "Country_ID", "Country")
        ?>
    </p>
    
    <p>
        <?php
        // show occupations...
        country_job($dbconnect, $occupation1, $occupation2, "Occupation", "Occupations", "career", "Career_ID", "Career")
        ?>
    </p>
    
<?php

    // if logged in, show edit / delete options...
    if (isset($_SESSION['admin'])) {
        
        ?>
    
    <div class="edit-tools">
        
    <a href="index.php?page=../admin/editauthor&authorID=<?php echo $find_rs['Author_ID']; ?>" title="Edit author"><i class="fa fa-edit fa-2x"></i></a>

    &nbsp; &nbsp;
        
    <a href="index.php?page=../admin/deleteauthor_confirm&ID=<?php echo $find_rs['Author_ID']; ?>" title="Delete Author"><i class="fa fa-trash fa-2x"></i></a>

        
    </div>  <!-- / author edit tools -->
    
    <?php
    }   // end edit tools if
        ?>

    
</div>  <!-- / about the author div -->

<br />

<?php

// Loop through results and dislay them...
do {
    
    $quote = preg_replace('/[^A-Za-z0-9.,\s\'\-]/', ' ', $find_rs['Quote']);
    
    ?>

    <div class="results">
        <p>

            <?php echo $quote; ?><br/>
            
        </p>
        
        <?php include("show_subjects.php");?>

    </div>

<br/>

<?php
    
}   // end of display results 'do'

while($find_rs = mysqli_fetch_assoc($find_query))


?>