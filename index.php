<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-hope</title>
    <link rel="stylesheet" href="style.css" />
    <!-- icon link*************** -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <h1>Once you choose hope,<br> anything is possible...</h1>
            <a href="#">Get Started</a>
        </div>
    </header>

    <!-- section-1**************************** -->
    <section class="angad">
        <div class="section_text">
            <p>CERTIFIED WEB DESIGNER BASED IN OAKLAND, CALIFORNIA</p>
            <h1>Problems I can help with</h1>
            <div class="hr"></div>
        </div>
        <div class="card">
            <div class="card_data">
                <img src="image/2-home.jpg" height="420px" width="310px">
                <h2>Web Design</h2>
                <p>Focus on how you can help and <br> benefit your user. Use simple <br> words to avoid confusion.</p>
            </div>
            <div class="card_data">
                <img src="image/2-home.jpg" height="420px" width="310px">
                <h2>Graphic Design</h2>
                <p>Focus on how you can help and <br> benefit your user. Use simple <br> words to avoid confusion.</p>
            </div>
            <div class="card_data">
                <img src="image/2-home.jpg" height="420px" width="310px">
                <h2>Content Creation</h2>
                <p>Focus on how you can help and <br> benefit your user. Use simple <br> words to avoid confusion.</p>
            </div>

        </div>

    </section>
    <!-- section-2**************************** -->

    <section class="client_reviwe">
        <img src="image/5-home.jpg" alt="">
        <p>Ruth A. Flora</p>
        <p style="color:  #0E5735;">◆◆◆◆◆</p>
        <h2>You can showcase a client review here. Make it nice <br> and short, then use this button to <br> send them
            to your reviews or services page.</h2>
        <a href="#">What My Clients Say</a>

    </section>
    <!-- section-3****************************** -->
    <section class="welcome">
        <div class="wlc1"><img src="image/6-home.jpg" width="320.1rem" height="500rem">
            <h3>Dragos Andrei Atudorei</h3>
            <p>WordPress Content Creator <br>
                Certified Web Designer <br>
                Incurable Perfectionist</p>
        </div>
        <div class="wlc_data">
            <p class="wlc">WELCOME!</p>
            <h1>My name is Andrei and I am <br> the creator of this template.</h1>
            <p>I gave it my all to make this the best design to start from. <br> <b> I named it Hope</b>, in honor of my
                <br> client who inspired me to make it – her middle name is <b>Hope</b>. <br><br>
                For the first section at the top of the page, I recommend <br> writing something that will <b> pique the
                    interest </b>of your <br> target audience. Make them curious to read more! <br><br>

                These middle sections are the perfect place to introduce <br> yourself, and to perhaps start <b>
                    introducing your service</b> <br><br>

                The last section below is great for a call to action.
            </p>
            <a class="wlc_btn1" href="#">See My Services</a>
            <a class="wlc_btn2" href="#">More About Me</a>
        </div>
    </section>
    <!-- section-4*******************************888 -->
    <section class="call">
        <h1>Insert a call to action</h1>
        <p>Think of what you want your visitor to do next. <br> Maybe they should contact you?</p>
        <a href="#">Get in Touch</a>

    </section>
    <footer class="foot">
        <div class="menu1">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="services.php">SERVICES</a>
            <a href="contact.php">CONTACT</a>
        </div>
        <div>
            <img src="image/logo-black-1.png" height="auto" width="60px">
        </div>
        <div>
            &copy;2024 Hope Starter Design
        </div>
    </footer>
    <script src="index.js"></script>
</body>

</html>