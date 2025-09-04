<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon link-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">    
    <link rel="stylesheet" href="style.css">
    <title>Register page</title>
</head>
<body>


<section class="form-container">
    <form method="post">
        <h1>register now</h1>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="cpassword" placeholder="Repeat your Password" required>
        <input type="submit" name="submit-btn" value="register now" class="btn">
        <p>already have an account ? <a href="login.php">Login now</a></p>
    </form>
</section>

    
</body>
</html>