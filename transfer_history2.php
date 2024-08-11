<?php
    require_once "transfer_history.php";
    $query = "select * from data";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION HISTORY</title>
    <link rel="stylesheet" href="transfer_history.css">
</head>
<body>
    <div class="block">
        <div class="inner_block">
            <h2 class="heading">TRANSACTION HISTORY OF ALL CUSTOMERS</h2>
            <div class="outside_table">
                <table class="table">
                    <tr class = "firstrow">
                        <th>FULL NAME</th>
                        <th>E-MAIL </th>
                        <th>PHONE NUMBER </th>
                        <th>AMOUNT </th>
                        <th>PAYMENT METHOD</th>
                    </tr>
                    <tr>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <td><?php echo $row["full_name"];  ?></td>
                            <td><?php echo $row["email"];  ?></td>
                            <td><?php echo $row["phone_number"];  ?></td>
                            <td><?php echo $row["amount"];  ?></td>
                            <td><?php echo $row["payment_method"];  ?></td>
                            </tr>
                            <?php
                            }
                        ?>
                </table>
            </div>
            <div class = button_transfer_money><button onclick="location.href='all_customer.php'"> CUSTOMER DETAIL </button></div>
        <div class = back><button onclick="location.href='transfer_money.html'"> BACK </button></div> 
           
        </div>  
           
    </div>
    
</body>
</html>