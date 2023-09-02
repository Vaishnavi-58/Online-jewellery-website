<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Farming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel ="Stylesheet" href="style.css">
    </head>
 <body>
    <div class="Signup1">
    <form method="POST"action="login1.php">
     <h3>Sign Up</h3>
     <input type="text" name="name" placeholder="Your Name" required>
     <input type="text" name="contact no" placeholder="contact no" pattern="[0-9]{10}" required>
     <input type="" name="email" placeholder="Enter email" required>
     <input type="" name="address" placeholder="Enter address" required>
     <input type="" name="password" placeholder="Enter Password" required>
     <button type=" " name="submit" value=submit>Sign up</button>
    </form>
</div>
<?php include 'footer.php' ?>
</body>
  </html>