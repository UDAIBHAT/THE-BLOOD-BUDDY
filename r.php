<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Register.css'>
    <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img src="./Images/bb_logo(black).png"></div>
    <div class="header-list">
        <ul>
            <li><a href="help.php">Get Help</li></a>
            <li><a href="donate.html">Donate</li></a>
            <li><a href="index.html#vol-sect">Volunteer</li></a>
            <li><a href="index.html#about-us">About Us</a></li>
            </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img src="./Images/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Start Saving Lives</h1>
        <form action="LOGIN.php" method="post">
        <?php if(isset($_GET['error'])) { ?>
    <p class="error"> <?php echo $_GET['error']; ?> </p>
<?php } ?>

        
            
          
            
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="E-mail">
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data" name="password">   
            <div class="safety" style="font-family: sans-serif; font-size: 20px;">
                
            </div>
            <div class="action-btn">
                <button class="btn">LOGIN</button>
                <br>
               
            </div>
            <div>
            <p>Don't have an account? <a href="create.php" class="link-secondary">Create Account</a></p>

            </div>
        </form>
    </div>
</div>
<script src="./Register.js"></script>
</body>
</html>