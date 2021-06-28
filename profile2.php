<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
    <?php include "includes/navigation.php"; ?>
    <!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->

    <div class="container" style="width: 50%;">
                              
        <h2 style="margin-left: 40%;">Your Profile</h2>
        <?php $image = $_SESSION['s_image'] ; ?>
        <!-- <img src="admin/images/<?php echo $image;?>" width="200" style="margin-left: 32%;" class="img-circle" alt="Profile">  -->
        <!-- <br><br><br><br> -->
        <div class="tab" >
            <button class="tablinks active" style="width: 100%" id="defaultOpen" onclick="openCity(event, 'Personel Details')">Personal Details</button>
            <!-- <button class="tablinks" style="width: 33%" onclick="openCity(event, 'Tickets Booked')">Tickets Booked</button> -->
            <!-- <button class="tablinks" style="width: 33%"  onclick="openCity(event, 'Edit Details')">Edit Details</button> -->
        </div>
        <div id="Personel Details" class="tabcontent">
          <h3>Details</h3>
          <!-- <?php echo $_SESSION['s_id'];?> -->
          <br>
          <?php
          $curr_user_id = $_SESSION['s_id'];
          //echo $curr_user_id;
          $query = "SELECT * FROM users where user_id = $curr_user_id";

          $select_user = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($select_user)) {
            $username = $row['username'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_phoneno = $row['user_phoneno'];
            ?>

            <table class="table table-striped" style="width: 50%">
              <tbody>
                <tr>
                  <td><b>Username:</b> </td>
                  <td><?php echo $username; ?></td>
                </tr>
                <tr>
                  <td><b>FirstName:</b> </td>
                  <td><?php echo ucfirst($user_firstname); ?></td>
                </tr>
                <tr>
                  <td><b>Lastname: </b></td>
                  <td><?php echo ucfirst($user_lastname); ?></td>
                </tr>
                <tr>
                  <td><b>Email: </b></td>
                  <td><?php echo $user_email; ?></td>
                </tr>
                <tr>
                  <td><b>Phone No: </b></td>
                  <td><?php echo $user_phoneno; ?></td>
                </tr>
              </tbody>
            </table>

          <?php } ?>
        </div>
    </div>
        <hr>
    <script>
document.getElementById('defaultOpen').click();
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
       
        evt.currentTarget.className += " active";
    }
    </script>

<?php include "includes/footer.php"; ?> 
