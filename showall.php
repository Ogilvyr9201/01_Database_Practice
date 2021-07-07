<?php 
    include "topbit.php"; /*  header php */

$showall_sql="SELECT * FROM `book_reviews` ORDER BY `book_reviews`.`Title` ASC";
$showall_query=mysql_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>

        
        <div class="box main">
            <h2>All Items</h2>

            <!-- Results go here -->
            <div class="reults">

                <p>Title: <span class="sub_heading">title holder</span>
                </p> 

                <p>Author: <span class="sub_heading">author holder</span>
                </p>

                <p>Genre: <span class="sub_heading">genre holder</span>
                </p>

                <p>Rating: <span class="sub_heading">rating holder</span>
                </p>

                <p><span class="sub_heading">Review / Response</span>
                </p>

                <p>
                    review placeholder
                
                </p>
            
            </div> <!-- Results -->

        </div>    <!-- / main -->
            
<?php 
    include "bottombit.php"; /*  footer php */
?>