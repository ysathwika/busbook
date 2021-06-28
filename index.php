<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    <?php include "includes/navigation.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                    $bus_per_page = 3;

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'] ;  
                    }
                    else {
                        $page = "";
                    }

                    if ($page == "" || $page == 1) {
                        $page_1 = 0;
                    }
                    else {
                        $page_1 = ($page * $bus_per_page) - $bus_per_page;
                    }

                    $query = "SELECT *  FROM  posts";
                    $bus_count = mysqli_query($connection,$query);
                    $count = mysqli_num_rows($bus_count);

                    $count = ceil($count / $bus_per_page) ;

                    $query = "SELECT * FROM posts LIMIT $page_1,$bus_per_page";
                    $select_all_posts_query = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        $post_id = $row['post_id'];

                        if ($post_date > date('Y-m-d')) {
                    
                        ?>
                        <!-- <?php echo $count; ?> -->
                       
                    <?php } } ?>   
                    <h3> Your <span style="color: lightgreen">SAFETY</span> is our utmost <span style="color: lightgreen">PRIORITY.</span> &#9989;</h3>

                    <div class="col-lg-6">
                        <img src="images/buslogo.png" width="500px" style="margin-top: 10%;">
                    </div> 
            </div>
            <?php include "includes/sidebar.php"; ?>
        </div>
        <hr>
<?php include "includes/footer.php"; ?>
