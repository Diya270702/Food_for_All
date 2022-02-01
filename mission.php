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


.mission .row{
    display: flex;
    border-top: .3rem dashed rgba(0,0,0,.2);
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.mission .row .image{
    margin:2rem;
    padding:2rem;
    flex:1 1 40rem;
    border-radius: 1rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.2);
}

.mission .row .image img{
    width:100%;
    object-fit: cover;
    border-radius: 1rem;
}

.mission .row .content{
    flex:1 1 40rem;
}

.mission .row .content .info{
    padding:1rem 0;
}

.mission .row .content .info h3{
    display: flex;
    align-items: center;
    font-size: 2.4rem;
    color:#333;
}

.mission .row .content .info h3 span{
    padding-right: 1rem;
    color:var(--yellow);
}

.mission .row .content .info p{
    padding:1rem 0;
    padding-left: 4.5rem;
    font-size: 1.5rem;
    color:#666;
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
            <li><a href="welcome.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a class="active" href="mission.php">mission</a></li>
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

<!-- mission section starts-->

<section class="mission" id="mission">

<h1 class="heading"> our <span>mission</span> </h1>

<div class="row" data-aos="fade-right">

    <div class="image" data-aos="fade-left">
        <img src="https://static.wixstatic.com/media/51db15ac941b483581e07075ff929e18.jpg/v1/fit/w_924,h_520/51db15ac941b483581e07075ff929e18.jpg" id="menu-img" alt="">
    </div>

    <div class="content">
        <div class="info">
            <h3> <span>01.</span> To Provide Unconditional Help To The Poor And Needy In The Society </h3>
            <p>We work Together</p>
        </div>
        <div class="info">
            <h3> <span>02.</span> To Provide Free Food To Poor And Homeless, Needy </h3>
            <p>We work Together</p>
        </div>
        <div class="info">
            <h3> <span>03.</span> To Feed Hungry And Poor On Streets, Destitute Homes, Orphanages, Old Age Homes And Where There Are Hungry Stomaches </h3>
            <p>We work Together</p>
        </div>
    </div>

</div>

</section>
<!--mission section ends-->

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
            <a href="home.php">home</a>
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

</body>
</html>
