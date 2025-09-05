<?php
    include 'connection.php';
    session_start();
    $admin_id = $_SESSION['admin_name'];

    if(!isset($admin_id)) {
        header('location:login.php');

    }

    if(isset($_POST['logout'])) {
        session_destroy();
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon link-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" href="style.css">
    <title>Admin pannel</title>
</head>
<body>
    <?php 
        include 'admin_header.php';
    ?>

    <div class="line4">
        <section class="dashboard">
            <div class="box-container">
                <div class="box">
                    <?php 
                        $total_pendings = 0;
                        $select_pendings = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'pending'") or die('query failed');

                    ?>
                </div>
            </div>
        </section>
    </div>
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>