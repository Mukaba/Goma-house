<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c1b2c888b.js" crossorigin="anonymous"></script>
    <title>RalEtsteManagementSystem</title>
    <!-- ==== CSS ==== -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <img src="img/logo1.png" alt="" class="logo1">
        <ul class="nav-links">
            <li class="active"><a href="#"></a>HOME</li>
            <li><a href="#"></a>FEATURED LISTING</li>
            <li><a href="#"></a>ABOUT US</li>
            <li><a href="#"><i class="fa-solid fa-circle-user" id="register-icon"></i></a>Register</li>
            <li><a href="#"><i class="fa-solid fa-right-to-bracket" id="login-icon"> </i></a>Login</li>
            <li class="ctn"><a  href="#"></a>CONTACT</li>
        </ul>
       <div class="mobile-nav">
        <img src="./img/menu-btn.png" alt="" class="menu-btn">
        <h1 class="close-btn">X</h1>
       </div>
    </nav>
    <header>
        <div class="header-content">
            <div class="line1"></div>
            <h1><em> GOMA </em>HOUSE CONNECT</h1>
            <div class="line"></div>
            <p>Search real estate property records,housess condos,land and more on gomahouseconnect.com <br>
                Find property info from the most comprehensive source data.</p> <br>
            <a href="#" class="ctn">LEARN MORE</a>
        </div>
    </header>
    <!-- == Events == -->
    <section class="events">
        <div class="title">
            <h1>FEATURED LISTING</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./img/img1.png" alt="">
                <h4>EXPLORE THE REAL ESTATE</h4>
                <p>Search real estate property records,housess condos,land and more on gomahouseconnect.com <br>
                    Find property info from the most comprehensive source data.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img src="./img/img2.png" alt="">
                <h4>FIND THE BEST ESTATE</h4>
                <p>Search real estate property records,housess condos,land and more on gomahouseconnect.com <br>
                    Find property info from the most comprehensive source data.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
        </div>
    </section>
    <section class="explore">
      <div class="explore-content">
        <h1>ABOUT US</h1>
        <div class="line"></div>
        <p>Search real estate property records,housess condos,land and more on gomahouseconnect.com <br>
            Find property info from the most comprehensive source data..</p>
        <a href="#" class="ctn">Learn More</a>
      </div>
    </section>

    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1>CONTACTUS</h1>
                <div class="line4"></div>
    </section>
    <section class="footer">
        <p>GOMA, RDC | Phone: (+243) 975 583 990 | Email: aubinsimpeze01@gmail.com</p>
        <p>Copyright &copy 2022</p>
    </section>
    <script>
        const mobileNav = document.querySelector('.mobile-nav')
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')
        const closeBtn = document.querySelector('.close-btn')

        mobileNav.addEventListener('click',(e)=>{
            navlinks.classList.toggle('mobile-menu')
            if(e.target === menuBtn){
                menuBtn.replaceWith(closeBtn)
                closeBtn.style.display = 'block'
            }
            if(e.target === closeBtn){
                closeBtn.replaceWith(menuBtn)
            }
        })
    </script>
</body>
</html>