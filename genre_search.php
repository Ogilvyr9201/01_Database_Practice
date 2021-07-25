<?php 
    include "topbit.php"; /*  header php */

// if find button pushed
if (isset($_POST['find_genre']))

{

// retieves genre and sanatises it
$genre=test_input(mysqli_real_escape_string($dbconnect,
$_POST['genre']));
    

$find_sql="SELECT * FROM `book_reviews` WHERE `genre` LIKE '%$genre%' ORDER BY `genre` ASC";
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);

?>

        
        <div class="box main">
            <h2>genre Search</h2>

            <?php
            
            // Check if there are any results

            if ($count<1)

            {
            ?>

            <div class="error">
                Sorry! There are no resluts that match your search
                please use the search box in the sidebar to try again.
            
            </div>
            
            <?php

            } // end count 'if'

            // if there are not results, output an error
            else {
                
                do {

                ?>
                <!-- Results go here -->
                <div class="results">

                <p>Title: <span class="sub_heading"><?php echo 
                $find_rs['Title']; ?></span>
                </p> 

                <p>Author: <span class="sub_heading"><?php echo 
                $find_rs['Author']; ?></span>
                </p>

                <p>Genre: <span class="sub_heading"><?php echo 
                $find_rs['Genre']; ?></span>
                </p>

                <p>Rating: <span class="sub_heading"><?php 
                    for ($x=0; $x < $find_rs['Rating']; $x++)
                    
                    {
                        echo "&#9733;";
                    }
                    
                    ?>
                </p>

                <p><span class="sub_heading">Review / Response</span>
                </p>

                <p>
                <?php echo $find_rs['Review']; ?>

                </p>

                </div> <!-- Results -->

                <br />


            <?php    

                } // end of 'do'

                while($find_rs=mysqli_fetch_assoc($find_query));

            } // end else

            // if there are results, display them
            
            } // end 'isset'

            ?>

        </div>    <!-- / main -->
            
<?php 
    include "bottombit.php"; /*  footer php */
?>