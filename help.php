<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='help.css'>
    <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px;
            background-color: blue;
            color: white;
            border: 1px solid darkred;
            border-radius: 5px;
            z-index: 1000;
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
    <script>
        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const success = urlParams.get('success');

            if (success) {
                showPopup(success);
            }

        }

        function showPopup(message) {
            const popup = document.createElement('div');
            popup.className = 'popup';
            popup.textContent = message;
            document.body.appendChild(popup);
            popup.style.display = 'block';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 5000);
        }
    </script>

</head>
<title>Connect with us </title>

<body>

    <header>
        <nav>
            <div class="header-logo"><img src="./Images/bb_logo(black).png"></div>
            <div class="header-list">
                <ul>
                    <li><a href="help.php">Get Help</a></li>
                    <li><a href="donate.html">Donate</a></li>
                    <li><a href="index.html#vol-sect">Volunteer</a></li>
                    <li><a href="index.html#about-us">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <main>
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <form action="feedback.php" method="post">

                        <h2>Connect with us </h2>
                        <input type="text" class="field" placeholder="Your Name" name="name">
                        <input type="email" class="field" placeholder="Your Email" name="email">
                        <input type="number" class="field" placeholder="Phone" name="phno">
                        <textarea placeholder="Message" class="field" name="feedback"></textarea>
                        <lable> <?php if (isset($_GET['error'])) { ?>
                                <p class="error"> <?php echo $_GET['error']; ?> </p>
                            <?php } ?>
                        </lable>
                        <br>
                        <button class="btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </main>



    <footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">2024 © All rights reserved.</div>
            </div>
        </div>
        <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations and fears
                aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a sleeve and help
                save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/indiablooddonation/?hl=en" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a></li>
                </ul>
            </div>
        </div>


    </footer>


</body>

</html>