<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<!-- Navigation -->
<?php include "includes/navigation.php"; ?>
<!-- Page Content -->

<?php
    	if (isset($_GET['orderid'])) {
    		$orderid = $_GET['orderid'];
         $bus_id = $_GET['bus_id'];

    		$query = "SELECT * FROM orders WHERE order_id=$orderid";
    		$bus_order = mysqli_query($connection,$query);

    		if ($bus_order) {
             while ($row = mysqli_fetch_assoc($bus_order)) {
               $username = $row['user_name'];
               $age = $row['user_age'];
               $source = $row['source'];
               $destination = $row['destination'];
               $date = $row['date'];
               $date = explode(" ", $date);
               // $time = $row['time'];
            }
    		} else {
    			die("Query Failed".mysqli_error($connection));
         }
    	}



       if(isset($_POST['update']))
       {
           $date_new = $_POST['date2'];
           $query = "UPDATE orders SET date='$date_new' WHERE order_id='$orderid' ";
           $query_run = mysqli_query($connection,$query);
       
           if($query_run){
               echo '<script type="text/javascript"> 
                        alert("Adjustment Date of Ticket request sent Successfull");
                        window.location.href = "./profile.php";
                     </script>';
               // header('Location: profile.php');
           }else{
               echo '<script type="text/javascript"> alert("Adjustment of Ticket is Failed") </script>';
           }
       }
?>


<html>
   <head>
      <title>Adjustment of Tickets</title>
      <style>
         body{
         background-color: whitesmoke;
         }
         input{
         width: 35%;
         height: 5%;
         border: 1px;
         border-radius: 05px;
         padding: 8px 15px 8px 15px;
         margin: 10px 0px 15px 0px;
         box-shadow: 1px 1px 2px 1px grey;
         }
         label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​
      </style>
   </head>
   <body>
      <center>
         <form action="" method="POST">
            <h2> Ticket Adjustment </h2> <br> <h4> View details here: </h4> <br>

            <label> Name: </label>
            <input type="text" name="username" value="<?php echo $username; ?>" readonly/><br/>

            <label> Age: </label>
            <input type="text" name="age" value="<?php echo $age; ?>" readonly/><br/>

            <label> Source: </label>
            <input type="text" name="source" value="<?php echo $source; ?>" readonly/><br/>

            <label> Destination: </label>
            <input type="text" name="destination" value="<?php echo $destination; ?>" readonly/><br/>

            <label> Travelling Date: </label>
            <input type="text" name="date" value="<?php echo $date[0]; ?>" readonly/><br/>

            <label> Your Request Date: </label>
            <input type="date" name="date2" /><br/>


            <input type="submit" name="update" value="Adjust My Ticket"/><br/>
         </form>
      </center>
   </body>
</html>
<?php include "includes/footer.php"; ?>