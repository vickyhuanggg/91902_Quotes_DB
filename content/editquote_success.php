<h2>Edit Success!</h2>

<p>You have edited the following quote...</p>

<?php

$quote_ID=$_REQUEST['quote_ID'];

$find_sql = "SELECT * FROM `quotes`
JOIN author ON (`author`.`Author_ID` = `quotes`.`Author_ID`)  WHERE `ID` = $quote_ID";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);

// Loop through results and dislay them...
do {
    
    $quote = preg_replace('/[^A-Za-z0-9.?,\s\'\-]/', ' ', $find_rs['Quote']);
    
    // get author name
    include("get_author.php");
    
    ?>

    <div class="results">
    <p>
        <?php echo $quote; ?><br />
        
        <!-- display author name -->
        <a href="index.php?page=author&authorID=<?php echo $find_rs['Author_ID']; ?>">
            <?php echo $full_name; ?> 
        </a>
        
    </p>

    <?php include("show_subjects.php"); ?>

</div>

<br />

<?php
    
}   // end of display results 'do'

while($find_rs = mysqli_fetch_assoc($find_query))

?>