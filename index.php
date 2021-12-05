<?php
$insert = false;
if (isset($_POST['name'])) {
    

    $server = "localhost";   
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if (!$con) {
    die("Connection Failed Vro ".mysqli_connect_error());
    }
// echo "Successfully Connected "; 

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `trip`.`tour` (`name`, `age`,`gender`, `email`, `phone`, `dt`) VALUES  ('$name', '$age', '$gender', '$email', '$phone', current_timestamp());";
    // echo $sql;
    // INSERT INTO `tour` (`name`, `age`, `gender`, `email`, `phone`, `dt`) VALUES ('1', 'Sikandar', '18', 'Male', 'email@gmail.com', '9999999999', '2021-11-23 21:39:33.000000');
    if($con->query($sql) == true){
        
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    // $place1=$_POST['place1'];
    // $place2=$_POST['place2'];
    // $num=$_POST['num'];
    // $date1=$_POST['date1'];
    // $date2=$_POST['date2'];
    // $sql = "INSERT INTO `trip`.`setour` (`place1`, `place2`, `num`, `date1`, `date2`) VALUES  ('$place1', '$place2', '$num', '$date1', '$date2',current_timestamp());";
    // // echo $sql;
    // //INSERT INTO `setour` (`place1`, `place2`, `num`, `date1`, `date2`) VALUES ('1', 'Mumbai', 'Goa', '6', '26/11/21', '29/11/21', '2021-11-23
    // // INSERT INTO `toursim` (`place1`, `place2`, `num`, `date1`, `date2`) VALUES ('Mumbai', 'Goa', '6', '26/11/21', '29/11/21');
    // if($con->query($sql) == true){

    //     $insert = true;
    // }
    // else{
    //     echo "ERROR: $sql <br> $con->error";
    // }

    $con ->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Year Project - Tourism Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css"> 

</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap");

    :root {
        --orange: #ffa500;
        --aqua: #00ffd0;
        --blue: #1358f8;
        --lightblue: rgb(14, 143, 248);
        --hollow: #0fff7a;
        --white: #fdfffe;
    }

    * {
        font-family: "Nunito", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-transform: capitalize;
        outline: none;
        border: none;
        text-decoration: none;
        transition: all 0.2s linear;
    }

    *::selection {
        background: var(--hollow);
        color: rgb(15, 255, 135);
        /* background-color: rgba(0, 0, 0, 0.075);  */
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-padding-top: 6rem;
        scroll-behavior: smooth;
    }

    section {
        padding: 2rem 9%;
    }

    .heading {
        text-align: center;
        padding: 2.5rem 0;
    }

    .heading span {
        font-size: 3.5rem;
        background: rgba(255, 165, 0, 0.2);
        color: var(--aqua);
        border-radius: 0.5rem;
        padding: 0.2rem 1rem;
    }

    .heading span.space {
        background: none;
    }

    #pipo span {
        color: var(--blue);
    }

    .pipol span {
        color: var(--blue);
    }

    .btn,
    .sbt,
    .valid {
        display: inline-block;
        margin-top: 1rem;
        background: #1ef875;
        color: rgb(16 16 16);
        padding: 0.8rem 3rem;
        border: 0.2rem solid rgb(8 144 255);
        cursor: pointer;
        font-size: 1.7rem;
    }

    form input {
        background: #d6dceb;
        color: rgb(7, 7, 7);
        border: 0.2rem solid var(--lightblue);
    }

    .valid {
        margin-left: 40%;
    }

    .btn:hover {
        /* background: rgba(17, 0, 255, 0.26); */
        color: black;
        font-weight: bold;
    }

    .valid:hover {
        background: rgb(27 95 247 / 98%);
        border: 1px solid #1def98;
        color: #000000;
        font-weight: bold;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: #333;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem 9%;
    }

    header .logo {
        font-size: 2.5rem;
        font-weight: bolder;
        color: rgb(25, 85, 250);
        text-transform: uppercase;
    }

    header .logo span {
        color: var(--aqua);
    }

    header .navbar a {
        color: #fff;
        font-size: 2rem;
        margin: 0 0.8rem;
    }

    .submitMsg {
        font-size: 2.5rem;
        font-weight: bolder;
        color: rgb(25, 85, 250);
        text-transform: uppercase;
    }

    header .navbar a:hover {
        color: var(--aqua);
    }

    header .icons i {
        font-size: 2.5rem;
        color: #efefef;
        cursor: pointer;
        margin-right: 2rem;
    }

    header .icons i:hover {
        color: var(--hollow);
    }

    header .search-bar-container {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        padding: 1.5rem 2rem;
        background: #333;
        border-top: 0.1rem solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        z-index: 1001;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .search-bar-container.active {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    header .search-bar-container #search-bar {
        width: 100%;
        padding: 1rem;
        text-transform: none;
        color: #333;
        font-size: 1.7rem;
        border-radius: 0.5rem;
    }

    header .search-bar-container label {
        color: #fff;
        cursor: pointer;
        font-size: 3rem;
        margin-left: 1.5rem;
    }

    header .search-bar-container label:hover {
        color: var(--hollow);
    }

    .login-form-container {
        position: fixed;
        top: -120%;
        left: 0;
        z-index: 10000;
        min-height: 100vh;
        width: 100%;
        background: rgba(0, 0, 0, 0.74);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-form-container.active {
        top: 0;
    }

    .login-form-container form {
        margin: 2rem;
        padding: 1.5rem 2rem;
        border-radius: 0.5rem;
        background: #fff;
        box-shadow: rgb(255 255 255 / 22%) 0px 10px 36px 0px, rgb(6 99 239) 0px 0px 0px 1px;
        width: 50rem;
    }

    .login-form-container form h3 {
        font-size: 3rem;
        color: var(--hollow);
        text-transform: uppercase;
        text-align: center;
        padding: 1rem 0;
    }

    .login-form-container form .box {
        width: 100%;
        padding: 1rem;
        font-size: 1.7rem;
        color: #333;
        margin: 0.6rem 0;
        border: 0.1rem solid rgba(0, 0, 0, 0.3);
        text-transform: none;
    }

    .login-form-container form .box:focus {
        border-color: var(--orange);
    }

    .login-form-container form #remember {
        margin: 2rem 0;
    }

    .login-form-container form label {
        font-size: 1.5rem;
    }

    .login-form-container form .btn {
        display: block;
        width: 100%;
    }

    .login-form-container form p {
        padding: 0.5rem 0;
        font-size: 1.5rem;
        color: #666;
    }

    .login-form-container form p a {
        color: var(--orange);
    }

    .login-form-container form p a:hover {
        color: #333;
        text-decoration: underline;
    }

    .login-form-container #form-close {
        position: absolute;
        top: 2rem;
        right: 3rem;
        font-size: 5rem;
        color: #fff;
        cursor: pointer;
    }

    #menu-bar {
        color: #fff;
        border: 0.1rem solid #fff;
        border-radius: 0.5rem;
        font-size: 3rem;
        padding: 0.5rem 1.2rem;
        cursor: pointer;
        display: none;
    }

    .home {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        position: relative;
        z-index: 0;
    }

    .home .content {
        text-align: center;
    }

    .home .content h3 {
        font-size: 4.5rem;
        background: linear-gradient(to right, #00ffff, #38ff14);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        box-decoration-break: clone;
        text-transform: uppercase;
    }

    .home .content p {
        font-size: 2.5rem;
        color: #fff;
        padding: 0.5rem 0;
    }

    .content span {
        font-size: 2.1rem;
        font-weight: bold;
        color: var(--blue);
    }

    .home .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .home .controls {
        padding: 1rem;
        border-radius: 5rem;
        background: rgba(0, 0, 0, 0.7);
        position: relative;
        top: 10rem;
    }

    .home .controls .vid-btn {
        height: 2rem;
        width: 2rem;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        margin: 0 0.5rem;
    }

    .home .controls .vid-btn.active {
        background: var(--orange);
    }

    .book .row {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        align-items: center;
    }

    .book .row .image {
        flex: 1 1 40rem;
    }

    .book .row .image img {
        width: 100%;
    }

    .book .row form {
        flex: 1 1 40rem;
        padding: 2rem;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        border-radius: 0.5rem;
    }

    .book .row form .inputBox {
        margin: auto;
        width: 70%;
        padding: 0.5rem 0;
    }

    .book .row form .inputBox input {
        width: 100%;
        padding: 1rem;
        border: 0.1rem solid rgba(0, 0, 0, 0.1);
        font-size: 1.7rem;
        color: #333;
        text-transform: none;
    }

    .book .row form .inputBox h3 {
        font-size: 2rem;
        padding: 1rem 0;
        color: #666;
    }

    .packages .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .packages .box-container .box {
        flex: 1 1 30rem;
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
    }

    .packages .box-container .box img {
        height: 25rem;
        width: 100%;
        object-fit: cover;
    }

    .packages .box-container .box .content {
        padding: 2rem;
    }

    .packages .box-container .box .content h3 {
        font-size: 2rem;
        color: #333;
    }

    .packages .box-container .box .content h3 i {
        color: var(--orange);
    }

    .packages .box-container .box .content p {
        font-size: 1.7rem;
        color: #666;
        padding: 1rem 0;
    }

    .packages .box-container .box .content .stars i {
        font-size: 1.7rem;
        color: var(--hollow);
    }

    .packages .box-container .box .content .price {
        font-size: 2rem;
        color: #333;
        padding-top: 1rem;
    }

    .packages .box-container .box .content .price span {
        color: #666;
        font-size: 1.5rem;
        text-decoration: line-through;
    }

    .services .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .services .box-container .box {
        flex: 1 1 30rem;
        border-radius: 0.5rem;
        padding: 1rem;
        text-align: center;
    }

    .services .box-container .box i {
        padding: 1rem;
        font-size: 5rem;
        color: var(--orange);
    }

    .services .box-container .box h3 {
        font-size: 2.5rem;
        color: #333;
    }

    .services .box-container .box p {
        font-size: 1.5rem;
        color: #666;
        padding: 1rem 0;
    }

    .services .box-container .box:hover {
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
    }

    .gallery .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .gallery .box-container .box {
        overflow: hidden;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        border: 1rem solid #fff;
        border-radius: 0.5rem;
        flex: 1 1 30rem;
        height: 25rem;
        position: relative;
    }

    .gallery .box-container .box img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .gallery .box-container .box .content {
        position: absolute;
        top: -100%;
        left: 0;
        height: 100%;
        width: 100%;
        text-align: center;
        background: rgba(0, 0, 0, 0.7);
        padding: 2rem;
        padding-top: 5rem;
    }

    .gallery .box-container .box:hover .content {
        top: 0;
    }

    .gallery .box-container .box .content h3 {
        font-size: 2.5rem;
        color: var(--orange);
    }

    .gallery .box-container .box .content p {
        font-size: 1.5rem;
        color: #eee;
        padding: 0.5rem 0;
    }

    .review .review-slider {
        padding-bottom: 2rem;
    }

    .review .box {
        padding: 2rem;
        text-align: center;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
    }

    .review .box img {
        height: 13rem;
        width: 13rem;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
    }

    .review .box h3 {
        color: #333;
        font-size: 2.5rem;
    }

    .review .box p {
        color: #666;
        font-size: 1.5rem;
        padding: 1rem 0;
    }

    .review .box .stars i {
        color: var(--orange);
        font-size: 1.7rem;
    }

    .contact .row {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        align-items: center;
    }

    .contact .row .image {
        flex: 1 1 35rem;
    }

    .contact .row form {
        flex: 1 1 50rem;
        padding: 2rem;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
    }

    .contact .row form .inputBox {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .contact .row form .inputBox input,
    .contact .row form textarea {
        width: 49%;
        margin: 1rem 0;
        padding: 1rem;
        font-size: 1.7rem;
        color: #333;
        background: #f7f7f7;
        text-transform: none;
    }

    .contact .row form textarea {
        height: 15rem;
        resize: none;
        width: 100%;
    }

    .brand-container {
        text-align: center;
    }

    /* .footer {
  background: #333;
}

.footer .box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.footer .box-container .box {
  padding: 1rem 0;
  flex: 1 1 25rem;
}

.footer .box-container .box h3 {
  font-size: 2.5rem;
  padding: 0.7rem 0;
  color: #fff;
}

.footer .box-container .box p {
  font-size: 1.5rem;
  padding: 0.7rem 0;
  color: #eee;
}

.footer .box-container .box a {
  display: block;
  font-size: 1.5rem;
  padding: 0.7rem 0;
  color: #eee;
}

.footer .box-container .box a:hover {
  color: var(--orange);
  text-decoration: underline;
}

.footer .credit {
  text-align: center;
  padding: 2rem 1rem;
  margin-top: 1rem;
  font-size: 2rem;
  font-weight: normal;
  color: #fff;
  border-top: 0.1rem solid rgba(255, 255, 255, 0.2);
}

.footer .credit span {
  color: var(--lightblue);
} */

    /* media queries  */

    @media (max-width: 1200px) {
        html {
            font-size: 55%;
        }
    }

    @media (max-width: 991px) {
        header {
            padding: 2rem;
        }

        section {
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        #menu-bar {
            display: initial;
        }

        header .navbar {
            position: absolute;
            top: 100%;
            right: 0;
            left: 0;
            background: #333;
            border-top: 0.1rem solid rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        }

        header .navbar.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        header .navbar a {
            display: block;
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin: 1.5rem 0;
            background: #222;
        }
    }

    @media (max-width: 450px) {
        html {
            font-size: 50%;
        }

        .heading span {
            font-size: 2.5rem;
        }

        .contact .row form .inputBox input {
            width: 100%;
        }
    }
</style>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>Tour</span> India</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="/Tour/book.php">book</a>
            <a href="/Tour/Packages.php">packages</a>
            <a href="/Tour/contact.php">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" style="display: none;" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="index.php" method="post">
            <h3 class="logo"><span>Tour India</span></h3>
            <input type="text" class="box" name="name" id="name" placeholder="Enter your name">
            <input type="text" class="box" name="age" id="age" placeholder="Enter your Age">
            <input type="text" class="box" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" class="box" name="email" id="email" placeholder="Enter your email">
            <input type="phone" class="box" name="phone" id="phone" placeholder="Enter your phone">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <!-- <p>forget password? <a href="#">click here</a></p>  -->
            <!-- <p>don't have and account? <a href="#">register now</a></p> -->
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>Give time to live life, peace awaits</p>
            <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form</p>";
        }
    ?>
            <!-- <a href="#" class="btn">discover more</a>  -->
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vg-3.mp4"></span>
            <span class="vid-btn" data-src="images/vg-4.mp4"></span>
            <span class="vid-btn" data-src="images/vg-2.mp4"></span>
            <span class="vid-btn" data-src="images/vg-1.mp4"></span>
            <span class="vid-btn" data-src="images/vg-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vg-3.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">
            <div class="igl">
                <!-- <img src="images/flight.png" alt=""> -->
                <div class="image">
                    <img src="images/tvg-1.jpg" alt="">
                </div>
            </div>

            <form action="">
                <div class="inputBox" >
                    <h3>From to</h3>
                    <input type="text"name="place1" id="place1" placeholder="location">
                </div>
                <div class="inputBox">
                    <h3>Destination</h3>
                    <input type="text"name="place2" id="place2" placeholder="Destination">
                </div>
                <div class="inputBox" >
                    <h3>how many</h3>
                    <input type="number"name="num" id="num" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>Start</h3>
                    <input type="date" name="date1" id="date1">
                </div>
                <div class="inputBox" >
                    <h3>End</h3>
                    <input type="date" name="date2" id="date2">
                </div>
                <!-- <input type="submit" class="valid" value="book now"> -->
                <button class="box">DO IT</button> 
            </form>

        </div>

    </section>

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading pipol">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/Img-ooty.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> <span>ooty</span> -tamil nadu </h3>
                    <p> lush greenery of coffee plantations, the cascading waterfalls Irupu Falls, Madikeri Fort, Sri
                        Omkareshwara Temple and Pushpagiri</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₹8,000.00 <span> ₹12,990.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img-shimla.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> <span>shimla</span> -himachal pradesh </h3>
                    <p>shopping at Mall Road and relishing the charm of the toy train are few of the best things to do
                        in Shimla which are enjoyed by kids and families alike</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">₹9,600.00 <span>₹11,000.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img-tirupati.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> <span>tirupati </span> -Andhra Pradesh </h3>
                    <p> the city has hills and amazing views making it the perfect place for families to
                        unwind themselves. <br><b>Sri Venkateswara Swamy Vaari Temple, Sri Venkateswara National
                            Park</b>
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₹9,990.00 <span>₹10,990.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img-maha.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i><span>Mahabaleshwar</span> -Maharashtra </h3>
                    <p>Pratapgad Fort, Venna Lake, Elphinstone Point, Lodwick Point, Kates Point <br>
                        A hill station in the Western Ghats, Mahabaleshwar is a great destination for families looking
                        for long stays</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₹7,100.00 <span>₹9,990.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img-temple.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i><span>Amritsar</span> -Punjab</h3>
                    <p>Jallianwala Bagh, Partition Museum, Akal Takht, Central Sikh Museum, <b>Golden Temple</b> </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₹8,000.00 <span> ₹12,990.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/img-manali.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> <span>Manali</span> -Himachal Pradesh</h3>
                    <p> Solang Valley is one major attraction where one can indulge in adventure sports. Try parasailing
                        on your next visit to Manali. One can book a stay at Mall Road there for an easier commute to
                        the attraction points in the city</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₹8,000.00 <span> ₹12,990.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading pipol">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p></p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p></p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p></p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p></p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p></p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p></p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading pipol">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/img-manali.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/Img-ooty.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/Img-ooty.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img-shimla.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img-temple.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img-tirupati.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/p-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p></p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading" id="pipo">
            <span class="pip">r</span>
            <span class="pip">e</span>
            <span class="pip">v</span>
            <span class="pip">i</span>
            <span class="pip">e</span>
            <span class="pip">w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <h3>Heena</h3>
                        <p></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <h3>Bhushan Lokande</h3>
                        <p></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <h3>Aditya karle</h3>
                        <p></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <h3>Krupa Patel</h3>
                        <p></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <h3>shardul Govekar</h3>
                        <p></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <h3>Samarth Satpute</h3>
                        <p></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading pipol">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="name" cols="30" rows="10"></textarea>
                <input type="submit" class="btn sbt" value="send message">
            </form>

        </div>

    </section>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>


</body>

</html>