<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    <?php include "includes/navigation.php"; ?>

<?php

if (isset($_POST['register'])) {
//echo "registered";
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];

if ($username=="" || $firstname=="" || $lastname=="" || $email=="" || $phone_no=="" || $password=="") {
  echo "**ALL FIELDS MANDATORY";
}
elseif (strlen($phone_no)!=10) {
  echo "**PhoneNo Must Contain Of 10 Digits";
}

else {

$query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_phoneno, user_role) VALUES('$username', '$password', '$firstname', '$lastname', '$email', '$phone_no', 'subscriber') ";

$register_user = mysqli_query($connection, $query);

if(!$register_user) {
    die("Query Failed" . mysqli_error($connection));
}

header("Location: index.php");

}

}

?>

<style>

label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 710px;
  margin: 6rem auto 8.1rem auto;
  width: 400px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}

</style>


    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/buslogo.png" width="500px" style="margin-top: 30%;">
            </div>
            <div class="col-lg-6" style="background-color: #CAD5E2;">
            <div id="card">
              <div id="card-content">
                <div id="card-title">
                  <h2>REGISTRATION</h2>
                  <div class="underline-title"></div>
                </div>
                  
                  <form action=""  method="post" class="form">
                   
                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Username
                      </label>
                    <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
                    <div class="form-border"></div>
                   
                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Firstname
                      </label>
                    <input id="user-email" class="form-content" type="text" name="firstname" autocomplete="on" required />
                    <div class="form-border"></div>

                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Lastname
                      </label>
                    <input id="user-email" class="form-content" type="text" name="lastname" autocomplete="on" required />
                    <div class="form-border"></div>

                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Email
                      </label>
                    <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                    <div class="form-border"></div>

                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Phone number
                      </label>
                    <input id="user-email" class="form-content" type="tel" name="phone_no" pattern="[123456789][0-9]{9}" title="Please enter valid phone number" autocomplete="on" required />
                    <div class="form-border"></div>
                   
                    <label for="user-password" style="padding-top:22px">&nbsp;Password
                      </label>
                    <input id="user-password" class="form-content" type="password" name="password" required />
                    <div class="form-border"></div>

                    <a href="#">
                    </a>
                    <input id="submit-btn" type="submit" name="register" value="SIGNUP" />
                    
                  </form>
                </div>
              </div>
                        

            </div>
        </div>

    </div>
        <hr>

<?php include "includes/footer.php"; ?>