<?php include("path.php") ?>
<?php  include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d7c1c9e0e8.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>

<?php include(ROOT_PATH ."/app/dry/header.php");?>

    <div class="auth-content">
        <form action="login.php" method="post">
           <h2 class="form-title">Login</h2> 
           <?php include(ROOT_PATH ."/app/helpers/formErrors.php");?>

           <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
           </div>
            
            <div>
                <label>Password</label>
                <input type="password" name="password"  value="<?php echo $password; ?>"  class="text-input">
           </div>
            
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <p><a href="<?php echo BASE_URL .'/register.php' ?>">Sign Up</a></p>
        </form>
    </div>
    
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>