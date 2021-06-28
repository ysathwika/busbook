<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Payment.css">

</head>

<body>

    <div class="site-blocks-cover" style="background-image: url(images/formbg.jpeg); height: 950px; width: 98.9vw"
        data-aos="fade" data-stellar-background-ratio="0.5">

        <div class="container" style="height: 770px; margin-top: 50px;">
            <div class="row justify-align-center align-items-center">
                <div class="col">
                    <div class="header">
                        <h2 style="text-shadow: 1px 1px 2px #ffffffe3;">PAYMENT</h2>
                    </div>
                    <form class="form" id="form">
                        <div class="form-control">
                            <label for="email">Card</label>
                            <a href=""><img src="images/visa.png" style="width: 70px; margin-bottom: 5px;" alt=""></a>
                            <a href=""><img src="images/mastercard.png" style="width: 80px; margin-bottom: 5px;"
                                    alt=""></a>
                            <small></small>
                        </div>

                        <div class="form-control">
                            <label for="payment">Payment</label>
                            <div id="payment"
                                style="display: block; height: 43px; width: 100%; padding: 10px; border-radius: 5px; outline: none; border: 2px solid #f0f0f0;">
                            </div>
                            <small></small>
                        </div>

                        <div class="form-control">
                            <label for="name">Name on Card</label>
                            <input type="text" id="name" placeholder="Enter Your Name">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                            <small></small>
                        </div>

                        <div class="form-control">
                            <label for="num">Card Number</label>
                            <input type="text" id="num" placeholder="Enter Card Number">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                            <small>Error msg</small>
                        </div>

                        <div class="form-control">
                            <label for="expdate">Expire Month</label>
                            <input type="text" id="expdate" placeholder="mm/yyyy">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                            <small>Error msg</small>
                        </div>

                        <div class="form-control">
                            <label for="cvv">CVV</label>
                            <input type="password" id="cvv" name="cvv" placeholder="Enter CVV">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                            <small>Error msg</small>
                        </div>
                        <div class="button">
                            <button onclick="location.href='Form.html'"
                                style="color: white; text-decoration: none;">Previous</button>
                            <button type="submit" style="color: white; text-decoration: none;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="js/Payment.js"></script>

</body>

</html>


<script>



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
        showError(name, "Please fill out this field!");
    }
    else if (!isname(nameValue)) {
        showError(name, "This contain only letters!")
    }
    else {
        // name.innerHTML = name.value.toUpperCase();
        showSuccess(name);
    }


    if (numValue === '') {
        showError(num, "Please fill out this field!");
    }
    else if (!isNumValid(numValue)) {
        showError(num, "This contain numbers only, must starts with 4 or 5 and length should be between 13-16")
    }
    else {
        showSuccess(num);
    }


    if (expdateValue === '') {
        showError(expdate, "Please fill out this field!");
    }

    else if (!isExpiryValid(expdateValue)) {
        showError(expdate, "Not Valid! Eg.02/2020");
    }
    else {
        showSuccess(expdate);
    }

    if (cvvValue === '') {
        // cvv.style.border = "2px solid red";
        showError(cvv, "Please fill out this field!");
    }
    else if (!isCvvValid(cvvValue)) {
        showError(cvv, "Incorrect! This should be of length 3-4 and contain numbers only.")
    }
    else {
        // cvv.style.border = "2px solid green";
        showSuccess(cvv);
    }
}

function showError(input, msg) {
    const formControl = input.parentNode;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerHTML = msg;
}

function showSuccess(input) {
    const formControl = input.parentNode;
    formControl.className = 'form-control success';
}

// function isEmailValid(email) {
//     return /^[a-zA-Z\-]+[a-zA-Z0-9.-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,3}$/.test(email);
// }

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
function showError(input, msg) {
    const formControl = input.parentNode;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerHTML = msg;
}

function showSuccess(input) {
    const formControl = input.parentNode;
    formControl.className = 'form-control success';
}



var pay = document.getElementById("payment")
var money = localStorage.getItem('Payment')

pay.innerHTML = "Rs " + money + "/-";



function validateMyForm() {
    if (!((name.parentNode.className == 'form-control success') && (num.parentNode.className == 'form-control success') && (expdate.parentNode.className == 'form-control success') && (cvv.parentNode.className == 'form-control success'))) {
        returnToPreviousPage();
        return false;
    }


    return true;
}


function Proceed() {
    if (validateMyForm()) {
        location.href = "PrintPass.html";
    }
}

</script>

<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html{
    overflow-x: hidden;
}

body {
            /* background: url(https://guidetoiceland.imgix.net/469993/x/0/.jpg?auto=format%2Ccompress&fit=crop&crop=faces%2Cedges%2Ccenter&ixlib=react-8.6.4&h=610&q=35&dpr=1);
            background-repeat: no-repeat;
            background-size: cover; */
    font-family: 'Open Sans', sans-serif;
            /* height: 100vh; */
            /* display: flex;
            justify-content: center;
            align-items: center; */
}

.site-blocks-cover{
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
}
/* -------------------------------------------------…
@media only screen and (min-width: 1200px){
        .container {
            /* z-index: 2; */
            background-color: #fff;
            width: 80vw;
            height: 660px;
            border-radius: 5px;
            overflow: hidden;
            /* margin-top: 3px;
            margin-bottom: 53px;
            margin-left: 16%; */
            margin: auto;
            box-shadow: lightslategray;

        }

        .header {
            background-color: black;
            color: white;
        }

        .header h2 {
            padding: 20px;
            text-align: center;
        }

        .form {
            padding: 20px 30px;
        }

        .form-control {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        .form-control label {
            display: block;
            margin-bottom: 5px;
        }

        .form-control input {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            outline: none;
            border: 2px solid #f0f0f0;
        }

        .form-control i {
            position: absolute;
            visibility: hidden;
            right: 10px;
            top: 40px;
        }

        .form-control small {
            position: absolute;
            left: 0;
            margin-top: 2px;
            visibility: hidden;
        }

        button {
            display: inline-block;
            width: 30%;
            background-color:black;
            color: white;
            text-align: center;
            padding: 15px;
            outline: none;
            border-radius: 5px;
            border: none;
        }

        .button {
            text-align: center;
        }

        .form-control.success input {
            border-color: green;
        }

        .form-control.error input {
            border-color: red;
        }

        .form-control.success .fa-check-circle {
            visibility: visible;
            color: green;
        }

        .form-control.error .fa-exclamation-circle {
            visibility: visible;
            color: red;
        }


        .form-control.error small {
            visibility: visible;
            color: red;
        }
    }


/* ---------------------------------------------------------------------------------------------------------------------------- */

@media only screen and (min-width: 992px){
    .container {
        /* z-index: 2; */
        background-color: #fff;
        width: 80vw;
        height: 660px;
        border-radius: 5px;
        overflow: hidden;
        /* margin-top: 3px;
        margin-bottom: 53px;
        margin-left: 16%; */
        margin: auto;
        box-shadow: lightslategray;
    }
    .header {
        background-color: black;
        color: white;
    }

    .header h2 {
        padding: 20px;
        text-align: center;
    }

    .form {
        padding: 20px 30px;
    }

    .form-control {
        margin-bottom: 10px;
        padding-bottom: 20px;
        position: relative;
    }

    .form-control label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control input {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        border: 2px solid #f0f0f0;
    }

    .form-control i {
        position: absolute;
        visibility: hidden;
        right: 10px;
        top: 40px;
    }

    .form-control small {
        position: absolute;
        left: 0;
        margin-top: 2px;
        visibility: hidden;
    }

    button {
        display: inline-block;
        width: 30%;
        background-color:black;
        color: white;
        text-align: center;
        padding: 15px;
        outline: none;
        border-radius: 5px;
        border: none;
    }

    .button {
        text-align: center;
    }

    .form-control.success input {
        border-color: green;
    }

    .form-control.error input {
        border-color: red;
    }

    .form-control.success .fa-check-circle {
        visibility: visible;
        color: green;
    }

    .form-control.error .fa-exclamation-circle {
        visibility: visible;
        color: red;
    }


    .form-control.error small {
        visibility: visible;
        color: red;
    }
}


/* ------------------------------------------------------------------------------------------------------------------------- */
@media only screen and (min-width: 768px) {
    .container {
        /* z-index: 2; */
        background-color: #fff;
        width: 80vw;
        height: 660px;
        border-radius: 5px;
        overflow: hidden;
        /* margin-top: 3px;
        margin-bottom: 53px;
        margin-left: 16%; */
        margin: auto;
        box-shadow: lightslategray;
    }
    .header {
        background-color: black;
        color: white;
    }

    .header h2 {
        padding: 20px;
        text-align: center;
    }

    .form {
        padding: 20px 30px;
    }

    .form-control {
        margin-bottom: 10px;
        padding-bottom: 20px;
        position: relative;
    }

    .form-control label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control input {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        border: 2px solid #f0f0f0;
    }

    .form-control i {
        position: absolute;
        visibility: hidden;
        right: 10px;
        top: 40px;
    }

    .form-control small {
        position: absolute;
        left: 0;
        margin-top: 2px;
        visibility: hidden;
    }

    button {
        display: inline-block;
        width: 30%;
        background-color:black;
        color: white;
        text-align: center;
        padding: 15px;
        outline: none;
        border-radius: 5px;
        border: none;
    }

    .button {
        text-align: center;
    }

    .form-control.success input {
        border-color: green;
    }

    .form-control.error input {
        border-color: red;
    }

    .form-control.success .fa-check-circle {
        visibility: visible;
        color: green;
    }

    .form-control.error .fa-exclamation-circle {
        visibility: visible;
        color: red;
    }


    .form-control.error small {
        visibility: visible;
        color: red;
    }
}


/* ------------------------------------------------------------------------------------------------------------------------------ */
@media only screen and (min-width: 600px){
    .container {
        /* z-index: 2; */
        background-color: #fff;
        width: 80vw;
        height: 660px;
        border-radius: 5px;
        overflow: hidden;
        /* margin-top: 3px;
        margin-bottom: 53px;
        margin-left: 16%; */
        margin: auto;
        box-shadow: lightslategray;
    }
    .header {
        background-color: black;
        color: white;
    }

    .header h2 {
        padding: 20px;
        text-align: center;
    }

    .form {
        padding: 20px 30px;
    }

    .form-control {
        margin-bottom: 10px;
        padding-bottom: 20px;
        position: relative;
    }

    .form-control label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control input {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        border: 2px solid #f0f0f0;
    }

    .form-control i {
        position: absolute;
        visibility: hidden;
        right: 10px;
        top: 40px;
    }

    .form-control small {
        position: absolute;
        left: 0;
        margin-top: 2px;
        visibility: hidden;
    }

    button {
        display: inline-block;
        width: 30%;
        background-color:black;
        color: white;
        text-align: center;
        padding: 15px;
        outline: none;
        border-radius: 5px;
        border: none;
    }

    .button {
        text-align: center;
    }

    .form-control.success input {
        border-color: green;
    }

    .form-control.error input {
        border-color: red;
    }

    .form-control.success .fa-check-circle {
        visibility: visible;
        color: green;
    }

    .form-control.error .fa-exclamation-circle {
        visibility: visible;
        color: red;
    }


    .form-control.error small {
        visibility: visible;
        color: red;
    }
}


/* -------------------------------------------------------------------------------------------------------------------- */
@media only screen and (max-width: 600px) {
    .container {
        /* z-index: 2; */
        background-color: #fff;
        width: 80vw;
        height: 660px;
        border-radius: 5px;
        overflow: hidden;
        /* margin-top: 3px;
        margin-bottom: 53px;
        margin-left: 16%; */
        margin: auto;
        box-shadow: lightslategray;
    }
    .header {
        background-color: black;
        color: white;
    }

    .header h2 {
        padding: 20px;
        text-align: center;
    }

    .form {
        padding: 20px 30px;
    }

    .form-control {
        margin-bottom: 10px;
        padding-bottom: 20px;
        position: relative;
    }

    .form-control label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control input {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        border: 2px solid #f0f0f0;
    }

    .form-control i {
        position: absolute;
        visibility: hidden;
        right: 10px;
        top: 40px;
    }

    .form-control small {
        position: absolute;
        left: 0;
        margin-top: 2px;
        visibility: hidden;
    }

    button {
        display: inline-block;
        /* width: 30%; */
        background-color:black;
        color: white;
        text-align: center;
        padding: 15px;
        outline: none;
        border-radius: 5px;
        border: none;
    }

    .button {
        text-align: center;
    }

    .form-control.success input {
        border-color: green;
    }

    .form-control.error input {
        border-color: red;
    }

    .form-control.success .fa-check-circle {
        visibility: visible;
        color: green;
    }

    .form-control.error .fa-exclamation-circle {
        visibility: visible;
        color: red;
    }


    .form-control.error small {
        visibility: visible;
        color: red;
    }
}

</style>
