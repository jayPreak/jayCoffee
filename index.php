<?php
$server = 'localhost';
$dbname = 'contact_db';
$username = 'root';
$password = '';


    $conn = mysqli_connect($server, $username, $password, $dbname) or die('connection failed');

    if(isset($_POST['send'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $msg = mysqli_real_escape_string($conn, $_POST['message']);
     
        $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
        
        if(mysqli_num_rows($select_message) > 0){
           $message[] = 'message sent already!';
        }else{
           mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
           $message[] = 'message sent successfully!';
        }
     
     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jayCoffee</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>


    <?php
        if(isset($message)){
            foreach($message as $message){
               echo '
               <div class="message" data-aos="zoom-out">
                  <span>'.$message.'</span>
                  <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
               </div>
               ';
            }
         }
    
    ?>
    <header class = "header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">jayCoffee</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#staff">Staff</a>
            <a href="#contact">contact us</a>
        </nav>

        <div class="follow">
            <a href="https://www.behance.net/jayPreak" class="fa-brands fa-behance"></a>
            <a href="https://twitter.com/jayPreak" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/jaypreak8/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/jayesh-bhushan-587616200/" class="fab fa-linkedin"></a>
            <a href="https://github.com/jayPreak" class="fab fa-github"></a>
        </div>
    </header>


    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/user-img.jpg" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hi, This is jayCoffee</h3>
            <span data-aos="fade-up">an imaginary Coffee Shop 😝</span>
            <p data-aos="fade-up">jayCoffee is very beautiful, clean, interactive, modern, professional, elegant, stylish, attractive, impressive, efficiently coded, meticulously crafted professional HTML/CSS/JS/PHP landing page.</p>
            <a data-aos="fade-up" href="#about" class="btn">about jayCoffee</a>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"> <span>jayCoffee</span> </h1>

        <div class="biography">

            <p data-aos="fade-up">We are coffee punks who don’t exaggerate about their Americanos. Time, temperature, and technique need to be on point to make the best cup of coffee, but it’s all for nothing without quality beans roasted to perfection.  </p>

            <div class="bio">
                <h3 data-aos="zoom-in"> <span></span> Cofee </h3>
                <h3 data-aos="zoom-in"> <span></span> Menu </h3>
                <h3 data-aos="zoom-in"> <span></span> Breads </h3>
                <h3 data-aos="zoom-in"> <span></span> Beans </h3>
                <h3 data-aos="zoom-in"> <span></span> Shakes </h3>
                <h3 data-aos="zoom-in"> <span></span> SpaceGlide </h3>
                <h3 data-aos="zoom-in"> <span>name : </span> Jayesh Bhushan </h3>
                <h3 data-aos="zoom-in"> <span>email : </span> jayesh.preak2003@gmail.com </h3>
                <h3 data-aos="zoom-in"> <span>address : </span> Haryana, india </h3>
                <h3 data-aos="zoom-in"> <span>phone : </span> +91 9582111131 </h3>
                
            </div>

            <a href="#" class="btn" data-aos="fade-up">download menu</a>

        </div>
        
        <div class="skills" data-aos="fade-up">

            <h1 class="heading"> <span>we like</span> </h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left"> <h3><span>Black</span> <span>40%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>Latte</span> <span>30%</span></h3> </div>
                <div class="bar" data-aos="fade-left"> <h3><span>Cappuccino</span> <span>15%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>Americano</span> <span>10%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>Espresso</span> <span>5%</span></h3> </div>

            </div>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>Menu</span> </h1>

            <div class="row">

                <div class="box-container">

                    <h3 class="title" data-aos="fade-right">Snacks & Salads</h3>

                    <div class="box" data-aos="fade-right">
                    <span>₹500</span>
                    <h3>Croque monsieur</h3>
                    <p>Not your average ham and cheese toasty.</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                    <span>₹900</span>
                    <h3>Caesar salad</h3>
                    <p>Leaves, chicken, croutons, and love.</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                    <span>₹600</span>
                    <h3>Salad nicoise</h3>
                    <p>Really nice Salad not even gonna lie, tru h yrr</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                    <span>₹600</span>
                    <h3>Tempura veg</h3>
                    <p>A selection of fried veg with a surprising dip.</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                    <span>₹600</span>
                    <h3>Mushroom quiche</h3>
                    <p>We look after our vegetarian friends.</p>
                    </div>

                </div>

                <div class="box-container">

                    <h3 class="title" data-aos="fade-left">pastries & specials</h3>

                    <div class="box" data-aos="fade-left">
                    <span>₹400</span>
                    <h3>Scones and cream</h3>
                    <p>An English classic with a modern twist.</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                    <span>₹600</span>
                    <h3>Cinnamon bun</h3>
                    <p>Dirty fingers means it's delicious</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                    <span>₹1200</span>
                    <h3>Blue Berry Cheesecake</h3>
                    <p>Yeah Blue berry CHeesecake, yeah it's expensive</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                    <span>₹60000</span>
                    <h3>Lamb casserole</h3>
                    <p>A hearty meal for the hungry.</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                    <span>₹6000</span>
                    <h3>Dried hake and new potatoes</h3>
                    <p>Fresh fish served with a yummy sauce.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-mug-hot"></i>
                <h3>Coffee</h3>
                <p>Want to experience the best coffee you’ve ever tasted? Come join us at jayCofee</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-cake-candles"></i>
                <h3>Pastries</h3>
                <p>Our skilled pastry chef Jayesh spent years studying the arts of flake, crunch, and chew</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-bread-slice"></i>
                <h3>Breads</h3>
                <p>Our skilled pastry chef Jayesh spent years studying the arts of flake, crunch, and chew</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-jar"></i>
                <h3>Jam</h3>
                <p>Yeah we like jam</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-music"></i>
                <h3>Music</h3>
                <p>We love music!</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-champagne-glasses"></i>
                <h3>Parties</h3>
                <p>And of course we love Partying!</p>
            </div>

        </div>

    </section>

    <section class="staff" id="staff">

        <h1 class="heading" data-aos="fade-up"> <span>our staff</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <img src="images/img-1.jpg" alt="">
                <h3>Chef</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-2.jpg" alt="">
                <h3>Baker</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-3.jpg" alt="">
                <h3>Pastry Chef</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-4.jpg" alt="">
                <h3>Barista</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-5.jpg" alt="">
                <h3>Bai/Managaer</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-6.jpg" alt="">
                <h3>Bai #2</h3>
                <span>( 2020 - 2022 )</span>
            </div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+91 9582111131</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>jayesh.preak2003@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>haryana, india - 122002</p>
            </div>

        </div>

    </section>

    <div class="credit"> &copy; copyright @ <?php echo date('d/m/Y'); ?> by <a href= "https://github.com/jayPreak"><span> Jayesh Bhushan</span></a></div>


<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
</body>

</html>