<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food For All</title>
    <style>
        :root{
    --yellow:#F7CA3E;
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition:all .2s linear;
}

h1, h3{
    font-family: 'Oswald', sans-serif;
}

*::selection{
    background:var(--yellow);
    color:#fff;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

body{
    overflow-x: hidden;
    /* height:200rem; */
}

html::-webkit-scrollbar{
    width:1.4rem;
}

html::-webkit-scrollbar-track{
    background:#333;
}

html::-webkit-scrollbar-thumb{
    background:var(--yellow);
}

section{
    min-height: 100vh;
    padding:1rem 10%;
    padding-top: 8.5rem;
}

.btn{
    font-size: 1.7rem;
    padding:.7rem 4rem;
    border-radius: 5rem;
    margin-top: 1rem;
    background:none;
    color:#333;
    cursor: pointer;
    border:.2rem solid var(--yellow);
}

.btn:hover{
    background:var(--yellow);
}

.heading{
    text-align: center;
    font-size: 4rem;
    padding:0 .5rem;
    color:#333;
    margin-top:30px;
    margin-bottom: 20px;
}

.heading span{
    color:var(--yellow);
}

header{
    position: fixed;
    top:0; left:0;
    z-index: 1000;
    width:100%;
    background:#fff;
    padding:1.5rem 10%;
    box-shadow: 0 .3rem 2rem rgba(0,0,0,.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header .logo p{
    height:5rem;
    font-family: 'Oswald', sans-serif;
    font-size: 50px;
    color: #F7CA3E;
    margin-bottom:20px;
}

header .navbar ul{
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

header .navbar ul li{
    margin-left: 3rem;
}

header .navbar ul li a{
    font-size: 1.7rem;
    color:#666;
}

header .navbar1 ul{
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

header .navbar1 ul li{
    margin-left: 3rem;
}

header .navbar1 ul li a{
    font-size: 1.7rem;
    color:#666;
}

header .navbar ul li a.active,
header .navbar ul li a:hover{
    color:var(--yellow);
}

header #menu-bar{
    font-size: 3rem;
    color:#666;
    cursor: pointer;
    display: none;
}

.home{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
    z-index: 0;
    overflow: hidden;
}

.home::before,
.home::after{
    content:'';
    position: absolute;
    top:5rem; right:-6rem;
    background:var(--yellow);
    border-radius: 3rem;
    transform:rotate(-45deg);
    height:40rem;
    width:70rem;
    z-index: -2;
    animation: animte 1s linear 1;
}

@keyframes animte{
    0%{
        transform:rotate(45deg) translateY(-40rem);
    }
}

.home::before{
    top:-7rem;
    background:#fff;
    box-shadow: 0 1rem 4rem rgba(0,0,0,.1);
    z-index: -1;
}

.home .image{
    flex:1 1 39rem;
}

.home .image img{
    width:100%;
    border-radius:50%;
}

.home .content{
    flex:1 1 39rem;
}

.home .content h3{
    color:#333;
    font-size: 6rem;
}

.home .content p{
    color:#666;
    font-size: 2rem;
    padding:1rem 0;
}

.quotess {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color:#22313F;
  padding-top: 100px;
}
.quote-wrapper {
  width: 100%;
  height: 370px;
  margin: 0 10px;
}
.quote-wrapper .quote-body {
  width: 100%;
  height: 200px;
  padding: 50px 35px;
  background-color: #fff;
  border-radius: 50px;
  border: 2px solid #22313F;
}
.quote-wrapper .quote-body .icon-quote {
  text-align: center;
  font-size: 30px;
  color: #22313F;
  height: 42px;
}
.quote-wrapper .quote-body .icon-quote .icon {
  margin-right: 5px;
}
.quote-wrapper .quote-body .author {
  font-size: 15px;
  text-align: right;
  margin-top: 15px;
}
.quote-wrapper .quote-body .quote-buttons {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 12px;
  padding: 7px 0;
}
.quote-wrapper .quote-body .quote-buttons .social a {
  font-size: 40px;
  color: #455261;
  transition: .3s ease;
}
.quote-wrapper .quote-body .quote-buttons .social a:hover {
  color: #00acee;
}
.quote-wrapper .quote-body .quote-buttons .btn7 button {
  border: none;
  outline: none;
  padding: 10px 15px;
  background-color: #455261;
  color: #fff;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}
.quote-wrapper .quote-body .quote-buttons button:active {
  background-color: #00acee;
}


.footer{
    background:#282727;
    padding:1rem 7%;
}

.footer .box-container{
    display: flex;
    flex-wrap: wrap;
}

.footer .box-container .box{
    flex:1 1 25rem;
    margin:2rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:#fff;
    padding:1rem 0;
    font-weight: normal;
}

.footer .box-container .box p{
    font-size: 1.7rem;
    color:#eee;
    padding:1rem 0;
}

.footer .box-container .box a{
    font-size: 1.7rem;
    color:#eee;
    padding:1rem 0;
    display: block;
}

.footer .box-container .box a:hover{
    color:var(--yellow);
}

.footer .box-container .box p i{
    padding-right: .5rem;
    color:var(--yellow);
}

.footer .credit{
    font-size: 2rem;
    text-align: center;
    border-top: .2rem solid rgba(255,255,255,.7);
    padding:2rem 1rem;
    font-weight: normal;
    letter-spacing: .1rem;
    color:#fff;
}

.footer .credit a{
    color:var(--yellow);
}



















/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .home::before,
    .home::after{
        display: none;
    }

}

@media (max-width:768px){


    header #menu-bar{
        display: block;
    }

    header .navbar{
        position: fixed;
        top:8rem; left:0;
        width:100%;
        background:var(--yellow);
        border-top: .2rem solid rgba(0,0,0,.1);
        transform:scaleY(0);
        transform-origin: top;
        opacity: 0;
    }

    header .logo p{
    height:5rem;
    font-family: 'Oswald', sans-serif;
    font-size: 35px;
    color: #F7CA3E;
    margin-bottom:20px;
    margin-left:-20px;
}

    header .navbar ul{
        flex-flow: column;
        padding:2rem;
    }

    header .navbar ul li{
        margin:1.5rem;
        width: 100%;
    }

    header .navbar ul li a{
        display: block;
        color:#fff;
        padding-left: 2rem;
        border-left: .2rem solid #fff;
        font-size: 2rem;
    }

    header .navbar ul li a:hover,
    header .navbar ul li a.active{
        color:#333;
        border-color: #333;
    }

    .fa-times{
        transform:rotate(180deg);
    }

    header .navbar.nav-toggle{
        transform:scaleY(1);
        opacity: 1;
    }

    .home .content{
        text-align: center;
    }

    .home .content h3{
        font-size: 4.5rem;
    }

    .order .row .image{
        display: none;
    }

}

@media (max-width:500px){

    html{
        font-size: 50%;
    }

    section{
        padding:1rem 5%;
        padding-top: 8.5rem;
    }
    header .logo p{
    height:5rem;
    font-family: 'Oswald', sans-serif;
    font-size: 25px;
    color: #F7CA3E;
    margin-bottom:20px;
}
}

@media (max-width:450px){

    html{
    font-size: 50%;
    }

    section{
    padding:1rem 5%;
    padding-top: 8.5rem;
    }
    header .logo p{
    height:5rem;
    font-family: 'Oswald', sans-serif;
    font-size: 20px;
    color: #F7CA3E;
    margin-bottom:20px;
}
.quote-wrapper .quote-body .icon-quote {
  text-align: center;
  font-size: 15px;
  color: #22313F;
  height: 42px;
}
}
    </style>

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="welcome.php" class="logo"><p>Food For All</p></a>

    <div id="menu-bar" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="welcome.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="mission.php">mission</a></li>
            <li><a href="news.php">news</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="donate.php">donate</a></li>
        </ul>
    </nav>
    <nav class="navbar1">
        <ul>
            <img src="https://img.icons8.com/ios-glyphs/30/000000/user--v1.png" style="margin-right:-25px; margin-left:30px;">
            <li><a href="http://localhost/login/index.php"><b><?php echo "Welcome ". $_SESSION['username']?></b></a></li>
</ul>
</nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-right">
        <h3>For Homeless, Food is a bigger worry than coronavirus</h3>
        <p>Donate food essentials to poor</p>
        <a href="donate.php"><button class="btn">Donate now</button></a>
    </div>

    <div class="image" data-aos="fade-up">
        <img src="https://t3.ftcdn.net/jpg/02/92/07/56/360_F_292075696_hGdSBQ9Bvf1jsaVMP2rTpuRr0VMATck0.jpg" alt="">
    </div>

</section>

<!-- home section ends -->
<!-- Quote section starts-->
<div class="quotess">
<div class="quote-wrapper">

    <div class="quote-body">
      <div class="icon-quote">
        <span class="icon">
          <i class="fas fa-quote-left"></i>
        </span>
        <br>
        <span class="quote">Giving is not just about make a donation, it's about make a difference.</span>
        <br>
        <span class="icon">
        <i class="fas fa-quote-right"></i>
        </span>
      </div>
      <div class="author">― Kathy Calvin</div>

      <div class="quote-buttons">
        <div class="social">
          <a href="https://twitter.com/" target="_blank">
            <i class="fab fa-twitter-square"></i>
          </a>
        </div>

        <div class="btn7">
          <button id="quote-btn">New Quote</button>
        </div>
      </div>
    </div>
  </div>
  </div>

<!--Quote section ends-->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Faridabad, india 400104 </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-phone"></i> +111-222-333 </p>
        </div>

        <div class="box">
            <h3>branch location</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">france</a>
            <a href="#">russia</a>
        </div>

        <div class="box">
            <h3>quick links </h3>
            <a href="welcome.php">home</a>
            <a href="about.php">about</a>
            <a href="mission.php">mission</a>
            <a href="news.php">news</a>
            <a href="donate.php">donate</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a target="blank" href="https://www.instagram.com/diya_chaudhary27/">instagram</a>
            <a target="blank" href="https://www.facebook.com/">facebook</a>
            <a target="blank" href="https://twitter.com/">twitter</a>
            <a target="blank" href="https://www.linkedin.com/in/diya-933411202/">linkedin</a>
        </div>

    </div>

    <h1 class="credit">create by <a href="#">Diya</a> all rights reserved. </h1>

</div>

<!-- footer section ends -->













<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="C:\Users\DELL\OneDrive\Desktop\lololo\c.js"></script>

<!-- initializing aos  -->

<script>
    $(document).ready(function(){

$('#menu-bar').click(function(){
    $(this).toggleClass('fa-times');
    $('.navbar').toggleClass('nav-toggle');
});

$(window).on('load scroll',function(){

    $('#menu-bar').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');

    $('section').each(function(){

        let top = $(window).scrollTop();
        let height = $(this).height();
        let id = $(this).attr('id');
        let offset = $(this).offset().top - 200;

        if(top > offset && top < offset + height){
            $('.navbar ul li a').removeClass('active');
            $('.navbar').find(`[href="#${id}"]`).addClass('active');
        }

    });

});

$('.list .btn').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    let src = $(this).attr('data-src');
    $('.mission .row .image img').attr('src',src);
});

});

    AOS.init({
        delay:400,
        duration:1000
    })

</script>
<script>
    const quotes = [{
    quote: `Every man is guilty of all the good he did not do.`,
    author: `― Voltaire`
}, {
    quote: `No one has ever become poor by giving.`,
    author: `― Anne Frank`
}, {
    quote: `Those who are happiest are those who do the most for others.`,
    author: `― Booker T. Washington`
}, {
    quote: `Alone we can do so little, together we can do so much.`,
    author: `― Helen Keller`
}, {
    quote: `Giving a little is better than not giving at all`,
    author: `― Steve Jobs`
}, {
    quote: `The idea is not to live forever...but maybe to help another live a little longer...`,
    author: `― Alan Kay`
}, ]
// New Quote Button
const quoteBtn = document.getElementById('quote-btn');
// Get Quote and author Section
const quote = document.querySelector('.quote');
const author = document.querySelector('.author');
// Event Handler
quoteBtn.addEventListener('click', () => {
    let random = Math.floor(Math.random() * quotes.length);
    quote.innerHTML = quotes[random].quote;
    author.innerHTML = quotes[random].author;
})
</script>

</body>
</html>
