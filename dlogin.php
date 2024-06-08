<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) 
{
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blood Donation & Request</title>
        <script type="text/javascript">
        window.onload = function() {
            <?php
            if (isset($_SESSION['message'])) {
                echo "alert('" . $_SESSION['message'] . "');";
                unset($_SESSION['message']); // Clear the message after displaying it
            }
            ?>
        };
    </script>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(to bottom right, #FF6347, #FFFFFF);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .container {
                max-width: 800px;
                width: 90%;
                margin: 20px;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .section {
                flex: 1;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
                margin: 20px;
            }

            h2 {
                color: #FF6347;
            }

            p {
                color: #333;
            }

            button {
                padding: 10px 20px;
                background-color: #FF6347;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                margin-top: 10px;
            }

            button:hover {
                background-color: #D84315;
            }

            .logout {
                position: absolute;
                top: 20px;
                right: 20px;
            }

            @media screen and (max-width: 600px) {
                .container {
                    flex-direction: column;
                    align-items: stretch;
                }

                .section {
                    margin: 10px 0;
                }
            }
        </style>
    </head>

    <body>

        <div class="logout">
            <a href="logout.php">logout</a>
        </div>

        <div class="container">
            <div class="section">
                <h2>Donate Blood</h2>
                <p>Thank you for considering donating blood. Your donation can save lives!</p>
                <button onclick="window.location.href='d1.html'">Donate Now</button>
            </div>

            <div class="section">
                <h2>Request Blood</h2>
                <p>If you are in need of blood, we are here to help you. Please request below.</p>
                <button onclick="window.location.href='request.html'">Request Now</button>
            </div>
        </div>

        

    </body>

    </html>
    <?php
} 
else
 {
    header("Location: r.php");
    exit();
}
?>