<?php
    $con = mysqli_connect("localhost","root","","transfer_history");

    if(isset($_POST['submit'])){

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $amount = $_POST['amount'];
        $payment_method = $_POST['payment_method'];

        

        $query = "INSERT INTO data(full_name, email, phone_number, amount, payment_method)
        VALUES('$full_name','$email','$phone_number','$amount','$payment_method')";

        $run = mysqli_query($con,$query);
    }  
?>