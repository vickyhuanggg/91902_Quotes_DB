        <!--subject tags go here -->
        <p>
            <?php 
                $sub1_ID = $find_rs['Subject1_ID'];
                $sub2_ID = $find_rs['Subject2_ID'];
                $sub3_ID = $find_rs['Subject3_ID'];
                
                $all_subjects = array($sub1_ID, $sub2_ID, $sub3_ID);
    
                //loop through subject ID's and look up the subject name</p>
                foreach($all_subjects as $subject){
                    // Get subject name
                    $sub_sql = "SELECT * FROM `subject` WHERE `Subject_ID` = $subject";
                    $sub_query = mysqli_query($dbconnect, $sub_sql);
                    $sub_rs = mysqli_fetch_assoc($sub_query);
            
                    if($subject != 0){
                    ?>
                
                <!-- show subjects -->
                <span class="tag">
                    <a href="index.php?page=subject&subjectID=<?php echo $sub_rs['Subject_ID']; ?>">
                        <?php echo $sub_rs['Subject']; ?>
                    </a>
                </span> &nbsp;
            
            <?php
                
                } //end subject exists 
                    
                unset($subject);
                    
                } // end subject loop
            // if logged in, show edit / delete options...
        if (isset($_SESSION['admin'])) {
        
            ?>
        <div class="edit-tools">
            
    <!-- add quote in link -->      
    <a href="index.php?page=../admin/editquote&ID=<?php echo $find_rs['ID']; ?>" title="Edit quote"><i class="fa fa-edit fa-2x"></i></a>
            
    &nbsp; &nbsp;

    <a href="index.php?page=../admin/deletequote_confirm&ID=<?php echo $find_rs['ID']; ?>" title="Delete quote"><i class="fa fa-trash fa-2x"></i></a>
            
        </div>  <!-- / edit tools div -->
        
        <?php
            
            }   // admin tools if
            
            ?>
        </p>