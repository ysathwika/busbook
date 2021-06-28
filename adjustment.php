<?php 

if(isset($_POST['update']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bus";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "UPDATE 'orders' SET 'source'='".$source."', 'destination'='".$destination."', 'date'='".$date."', 'time'='".$time."' WHERE 'user_id' = $user_id";

    $result = mysqli_query($connect, $query);

    if($result)
    {
        echo 'Adjustment of Ticket is Successful';
    }else{
        echo 'Adjustment of Ticket is Failed';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Adjustment of Tickets
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
            Source: <input type="text" name="source"><br><br>
            Destination: <input type="text" name="destination"><br><br>
            Date: <input type="date" name="date"><br><br>
            Time: <input type="time" name="time"><br><br>
            <input type="submit" name="update" value="Adjustment of Ticket">
        </form>
    </body>
</html>