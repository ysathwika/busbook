<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<?php
  if (isset($_SESSION['s_username'])) { ?>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

/* .container {
  height:100%;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  background:-webkit-linear-gradient(#c5e5e5, #ccddf9);
  background:linear-gradient(#c9e5e9,#ccddf9);
} */
.content {
  display: flex;
  justify-content: center;
  height: auto;
}
.dropdown-select.visible {
  display:block;
}
.dropdown {
  position:relative;
}
ul {
  margin:0;
  padding:0;
}
ul li {
  list-style:none;
  padding-left:10px;
  cursor:pointer;
}
ul li:hover {
  background:rgba(255,255,255,0.1);
}
.dropdown-select {
  position:absolute;
  background:#77aaee;
  text-align:left;
  box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
  border-bottom-right-radius:5px;
  border-bottom-left-radius:5px;
  width:90%;
  left:2px;
  line-height:2em;
  margin-top:2px;
  box-sizing:border-box;
}
.thin {
  font-weight:400;
}
.small {
  font-size:12px;
  font-size:.8rem;
}
.half-input-table {
  border-collapse:collapse;
  width:100%;
}
.half-input-table td:first-of-type {
  border-right:10px solid #4488dd;
  width:50%;
}
.window {
  height:540px;
  width:800px;
  background:#fff;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  border-radius:30px;
  z-index:10;
}
.order-info {
  height:100%;
  width:50%;
  padding-left:25px;
  padding-top:15px;
  padding-bottom:15px;
  padding-right:25px;
  box-sizing:border-box;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  position:relative;
}
.price {
  bottom:0px;
  position:absolute;
  right:0px;
  color:#4488dd;
}
.order-table td:first-of-type {
  width:25%;
}
.order-table {
    position:relative;
}
.line {
  height:1px;
  width:100%;
  margin-top:5px;
  margin-bottom:5px;
  background:#ddd;
}
.order-table td:last-of-type {
  vertical-align:top;
  padding-left:25px;
}
.order-info-content {
  margin-top: 10px;
  margin-down: 10px;
  table-layout:relative;
  overflow-x: hidden;
        overflow-y: auto;
}
.full-width {
  width:100%;
}
.pay-btn {
  border:none;
  background:#22b877;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:25px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.pay-btn:hover {
  background:#22a877;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}

.total {
  margin-top:25px;
  font-size:20px;
  font-size:1.3rem;
  position:absolute;
  bottom:30px;
  right:27px;
  left:35px;
}
.dense {
  line-height:1.2em;
  font-size:16px;
  font-size:1rem;
}
.input-field {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}
.credit-info {
  background:#4488dd;
  height:100%;
  width:100%;
  color:#eee;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  font-size:14px;
  font-size:.9rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-sizing:border-box;
  padding-left:25px;
  padding-right:25px;
  border-top-right-radius:30px;
  border-bottom-right-radius:30px;
  position:relative;
}
.dropdown-btn {
  background:rgba(255,255,255,0.1);
  width:100%;
  border-radius:5px;
  text-align:center;
  line-height:1.5em;
  cursor:pointer;
  position:relative;
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-btn:after {
  content: '\25BE';
  right:8px;
  position:absolute;
}
.dropdown-btn:hover {
  background:rgba(255,255,255,0.2);
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-select {
  display:none;
}
.credit-card-image {
  display:block;
  max-height:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:35px;
  margin-bottom:15px;
}
.credit-info-content {
  margin-top:25px;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:100%;
}
@media (max-width: 600px) {
  .window {
    width: 100%;
    height: 100%;
    display:block;
    border-radius:0px;
  }
  .order-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .credit-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .pay-btn {
    border-radius:0px;
  }
  .form2-control i {
            position: absolute;
            visibility: hidden;
            right: 10px;
            top: 40px;
  }

  .form2-control.success input {
            border-color: green;
        }

        .form2-control.error input {
            border-color: red;
        }

        .form2-control.success .fa-check-circle {
            visibility: visible;
            color: green;
        }

        .form2-control.error .fa-exclamation-circle {
            visibility: visible;
            color: red;
        }


        .form2-control.error small {
            visibility: visible;
            color: red;
        }

}

</style>
<div class='content'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
        <?php
         $curr_user_id = $_SESSION['s_id'];

          $query = "SELECT * FROM orders INNER JOIN posts ON orders.bus_id = posts.post_id where orders.user_id = $curr_user_id AND (unix_timestamp( ) - unix_timestamp( time ) ) < 60  ORDER BY order_id DESC ";
          
          // echo (mysqli_affected_rows($connection));

          $select_user_orders = mysqli_query($connection, $query);

          $count=1;
          while ($row = mysqli_fetch_assoc($select_user_orders)) {
            $passenger = $row['user_name'];
            $passenger_age = $row['user_age'];
            $source = $row['source'];
            $destination = $row['destination'];
            $dob = $row['date'];
            $cost = $row['cost'];
            $orderid = $row['order_id'];
            $busid = $row['bus_id'];
            $busdate = $row['post_date'];
            $count++;

            //$new_query = "SELECT post_date FROM posts WHERE post_id = $busid";

            //echo $busdate;
            if (date("Y-m-d") >= $busdate || date("Y-m-d") <= $busdate) {
              # code...
            
            ?>
                <div class='line'></div>
                <table class='order-table'>
                <tbody>
                <tr>
                  <td><b>Passenger Name:</b> </td>
                  <td><?php echo $passenger; ?></td>
                </tr>
                <tr>
                  <td><b>Passenger Age:</b> </td>
                  <td><?php echo $passenger_age; ?></td>
                </tr>
                <tr>
                  <td><b>Source: </b></td>
                  <td><?php echo ucfirst($source); ?></td>
                </tr>
                <tr>
                  <td><b>Destination: </b></td>
                  <td><?php echo ucfirst($destination); ?></td>
                </tr>
                <tr>
                  <td><b>Date Of Booking: </b></td>
                  <td><?php echo $dob; ?></td>
                </tr>
                <tr>
                  <td><b>Cost: </b></td>
                  <td><?php echo $cost; ?></td>
                </tr>
                
              </tbody>

                </table>
                <?php } } ?>
                <p><center><b>Proceed to pay <br> Total amount: <?php echo ($count * $cost)-150; ?><b> </center> </p>
        
       
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <table class='half-input-table'>
              <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                <ul>
                  <li>Master Card</li>
                  <li>American Express</li>
                  </ul></div>
                </div>
               </td></tr>
            </table>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
          
           <form  class="form" id="form">
           
              <div class="form2-control">
                Card Number
                <input class="input-field" type="text" id="num" placeholder="Enter Card Number" >
                <small></small>
              </div>

              <div class="form2-control">
                Card Holder
                <input type="text" id="name" class="input-field" placeholder="Enter Your Name">
                <small></small>
              </div>
              
              <div class="form2-control">
                <table class='half-input-table'>
                  <tr>
                    <td> Expires
                    <input class="input-field" type="text" id="expdate" placeholder="mm/yyyy">
                    <small></small>
                    </td>
                    <td>CVC
                    <input class="input-field" type="password" id="cvv" name="cvv" placeholder="Enter CVV">
                    <small></small>
                    </td>
                  </tr>
                </table>
              </div>

                <button type="submit" class='pay-btn'>PAY</button>
              </form>


          </div>

        </div>
      </div>
</div>
<script>
var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click',function(){
  var node;
  for (var i = 0; i < this.childNodes.length-1; i++)
    node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
       activeDropdown = node; 
    };
})

window.onclick = function(e) {
  console.log(e.target.tagName)
  console.log('dropdown');
  console.log(activeDropdown)
  if (e.target.tagName === 'LI' && activeDropdown){
    if (e.target.innerHTML === 'Master Card') {
      document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Master Card';
    }
    else if (e.target.innerHTML === 'American Express') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'American Express';      
    }
    else if (e.target.innerHTML === 'Visa') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Visa';
    }
  }
  else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
    activeDropdown.classList.remove('visible');
    activeDropdown = null;
  }
}


// ----------------validations part-----------------------

const form = document.getElementById('form');
let name = document.getElementById('name');
const num = document.getElementById('num');
const expdate = document.getElementById('expdate');
const cvv = document.getElementById('cvv');
const small = document.querySelector('small');

name.innerHTML = name.value.toUpperCase()

form.addEventListener('submit', function (e) {
    e.preventDefault();
    checkInput();
    Proceed();
})

function checkInput() {
    const nameValue = name.value.trim();
    const numValue = num.value.trim();
    const cvvValue = cvv.value.trim();
    const expdateValue = expdate.value.trim();
    // const destinationValue = destination.value.trim();

    if (nameValue === '') {
      name.style.border = "2px solid red";
        showError(name, "Please fill out this field!");
    }
    else if (!isname(nameValue)) {
      name.style.border = "2px solid red";
        showError(name, "This contain only letters!")
    }
    else {
        name.innerHTML = name.value.toUpperCase();
        name.style.border = "2px solid green";
        showSuccess(name);
    }


    if (numValue === '') {
      num.style.border = "2px solid red";
        showError(num, "Please fill out this field!");
    }
    else if (!isNumValid(numValue)) {
      num.style.border = "2px solid red";
        showError(num, "This contain numbers only and should start with 4 or 5, length should be 16 digits")
    }
    else {
      num.style.border = "2px solid green";
        showSuccess(num);
    }


    if (expdateValue === '') {
      expdate.style.border = "2px solid red";
        showError(expdate, "Please fill out this field!");
    }

    else if (!isExpiryValid(expdateValue)) {
      expdate.style.border = "2px solid red";
        showError(expdate, "Not Valid! Eg.02/2020");
    }
    else {
      expdate.style.border = "2px solid green";
        showSuccess(expdate);
    }

    if (cvvValue === '') {
        cvv.style.border = "2px solid red";
        showError(cvv, "Please fill out this field!");
    }
    else if (!isCvvValid(cvvValue)) {
      cvv.style.border = "2px solid red";
        showError(cvv, "Incorrect! This should be of length 3-4 and contain numbers only.")
    }
    else {
        cvv.style.border = "2px solid green";
        showSuccess(cvv);
    }
}

function showError(input, msg) {
    const formControl = input.parentNode;
    formControl.className = 'form2-control error';
    const small = formControl.querySelector('small');
    small.innerHTML = msg;
}

function showSuccess(input) {
    const formControl = input.parentNode;
    formControl.className = 'form2-control success';
    const small = formControl.querySelector('small');
    small.innerHTML = "";
}


function validateMyForm() {
    if (!((name.parentNode.className == 'form2-control success') && (num.parentNode.className == 'form2-control success') && (expdate.parentNode.className == 'form2-control success') && (cvv.parentNode.className == 'form2-control success'))) {
        returnToPreviousPage();
        return false;
    }


    return true;
}

function Proceed() {
    if (validateMyForm()) {
        location.href = "booksuccess.php";
    }
}


function isname(name) {
    return /^[a-zA-Z \-]+$/.test(name);
}

function isNumValid(num) {
    return /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$/.test(num);
}
function isCvvValid(cvv) {
    return /^[0-9]{3,4}$/.test(cvv);
}

function isExpiryValid(exp) {
    return /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/.test(exp);
}


</script>

<?php } ?>
<?php include "includes/footer.php"; ?>