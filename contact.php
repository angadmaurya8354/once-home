<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con=mysqli_connect($server,$username,$password);

if (!$con){
    die("connection to this databas failed due to" . mysqli_connect_error());
}
// echo "connection to this databas";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql ="INSERT INTO `home_data`.`home` (`name`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$email', '$phone', '$other', current_timestamp());";

// echo $sql;

if($con->query($sql) == true){
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>
    <link rel="stylesheet" href="contact.css" />
    <!-- icon link*************** -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="image/logo.png" alt="" />
            </div>
            <div class="menu" id="menu">
                <a href="index.php">HOME</a>
                <a href="about.php">ABOUT</a>
                <a href="services.php">SERVICES</a>
                <a href="contact.php">CONTACT</a>
            </div>
            <div><a href="#" class="whats">202-555-7890</a></div>
            <div class="menu-icon">
                <i class="bi bi-card-text" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div class="header_data">
            <h1>Contact Us</h1>
        </div>
    </header>

    <!-- section-1****************************** -->
    <section class="massage">
        <h1>
            We respond to all messages <br />
            within 24 hours.
        </h1>

        <?php 
        if($insert == true){
        echo "<p style='text-align:center'>Successfully Submit.</p>";
        }
        ?>



        <form action="contact.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" />
            <input type="email" name="email" id="email" placeholder="Enter Your E-mail" />
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone" style="
            width: 37.5rem;
            padding: 1.4rem;
            margin: 0.8rem;
            font-size: 1.1rem;
            border-radius: 5px;
            border: 1px solid grey;
          " />
            <textarea name="other" id="other" placeholder="Write Your Massage"></textarea>
            <input type="submit" value="Send Now" />
        </form>
    </section>
    <!-- section-2********************* -->
    <section class="personal">
        <h1>Work with me online or in-person</h1>
        <div class="personal_info">
            <div class="contact">
                <p>E-MAIL</p>
                <h4>contact@example.com</h4>
                <p>PHONe</p>
                <h4>202-555-7890</h4>
                <p>LOCATION</p>
                <h4>123 Fifth Avenue, NY 10160, New York, USA</h4>
                <!-- <div class="icon"> -->

                <i class="bi bi-twitter"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <!-- </div> -->
            </div>
            <div class="about">
                <p>
                    You can use this final section to write some directions to <br />
                    your physical location, or any other useful information.
                    <br /><br />

                    <b> If you’re using this template </b> to build a website, and
                    <br />
                    have any questions at all, I’d love to help! <br /><br />

                    Just search for WP Maker to find our YouTube channel. <br />
                    Leave a comment on any video – I always reply. <br /><br />

                    Thank you <b> so much </b> for watching our tutorials!
                </p>
            </div>
        </div>
    </section>
    <footer class="foot">
        <div class="menu1">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="services.php">SERVICES</a>
            <a href="contact.php">CONTACT</a>
        </div>
        <div>
            <img src="image/logo-black-1.png" height="auto" width="60px" />
        </div>
        <div>&copy;2024 Hope Starter Design</div>
    </footer>
    <script src="contact.js"></script>

</body>

</html>