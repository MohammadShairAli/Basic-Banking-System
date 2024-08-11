<?php
    require_once "all_customer2.php";
    $query = "select * from data";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL CUSTOMERS</title>
    <link rel="stylesheet" href="all_customer.css">
</head>
<body>
    <div class="block">
        <div class="inner_block">
            <h2 class="heading">DATA OF ALL CUSTOMERS</h2>
            <div class="outside_table">
                <table class="table">
                    <tr class = "firstrow">
                        <th>ID </th>
                        <th>FULL NAME </th>
                        <th>AGE </th>
                        <th>E-MAIL </th>
                        <th>CURRENT BALANCE</th>
                    </tr>
                    <tr>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <td><?php echo $row["ID"];  ?></td>
                            <td><?php echo $row["FULLNAME"];  ?></td>
                            <td><?php echo $row["AGE"];  ?></td>
                            <td><?php echo $row["E-MAIL"];  ?></td>
                            <td><?php echo $row["CURRENT BALANCE"];  ?></td>
                            </tr>
                            <?php
                            }
                        ?>
                </table>
            </div>
            <div class = button_transfer_money><button onclick="location.href='transfer_money.html'"> TRANSFER MONEY </button></div>
            <div class = back><button onclick="location.href='welcome.html'"> BACK </button></div> 
        </div>
    </div>
    
</body>
</html>