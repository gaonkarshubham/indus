<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <title>INDUS HOTEL | EXPERIENCE THE BEST</title>
</head>

<body>
    <!-- main container -->

    <div class="container">

        <!-- header starts here -->
        <header class="header">

            <a class="user-logo-nav" href="index.php">IN</a>

            <!-- user navbar  -->
            <nav class="user-nav">

                <!--content/usrnav-->
                <ul class="user-nav__menu">

                    <li> <a href="gallery.php">gallery</a> </li>
                    <li> <a href="about.php">about</a> </li>
                    <li class="last"><a href="team.php">team</a></li>
                    <li>
                    <?php
                        if(isset($_SESSION['userId'])){
                            echo '<a href="includes/login.out.php" class="sign-btn" style=" color: #da006d;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Sign Out
                        </a>';
                        }
                        else{
                            echo '<a href="login.php" class="sign-btn" style=" color: #da006d;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Sign In
                        </a>';
                        }
                    ?>
                    </li>
                 
                </ul>
              
            </nav>
            <!-- user nabar ends here -->
           
        
            
        </header>
        <!-- header ends here -->

        <!-- hotel-view starts here -->
        <main class="hotel-view">

            <!-- image section starts here -->
            <section class="main-img-section">

                <!-- txt and button starts-->
                <div class="main-qoute">
                    <!--main/image-btn-->
                    <h1 class="pri-head">
                        <span class="pri-head-main">feel</span>
                        <span class="pri-head-sub">the best in the world</span>
                    </h1>
                    <a href="nearyou.php" class="btn btn--white btn-animated">Near You</a>
                </div>
                <!-- txt and button end -->

                <!-- bckgrnd image -->
                <div>
                    <img src="img/banner-small.jpg" alt="main-img" class="main-section-img">
                    <!--main/main_image-->
                </div>
                <!-- bckgrnd image end -->
            </section>
            <!-- image section ends here -->

            <!-- story display block -->
            <div class="story">
                <div class="story__pictures">
                    <img class="story__img--1" src="img/hotel-4.jpg" alt="hotel img">
                    <img class="story__img--2" src="img/towel.jpg" alt="towel img">

                </div>

                <div class="story__content">
                    <h3 class="heading-3 u-margin-bottom-small">HAPPY CUSTOMERS</h3>
                    <h2 class="heading-2 u-margin-bottom-small">&ldquo;THE WAY YOU LIKE&rdquo; </h2>
                    <p class="story-text u-margin-bottom-medium">We have manage to deliver above the expectation of
                        customers year on year </p>
                    <button class="str-btn" onclick="review()">Find more</button>
                </div>

            </div>

            <!-- story display block end -->
            <!-- feature starts here -->
            <section class="section-2">
                <div class="section-features">
                    <!-- first element -->
                    <div class="row">
                        <div class="in">
                            <div class="feature-box">

                                <svg class="feature-box__icon">
                                    <use xlink:href="img/sprite.svg#icon-globe"></use>
                                </svg>
                                <h3 class="heading-tertiary u-margin-bottom-small">best in class</h3>
                                <p class="feature-box__text">
                                    We inheritate the premium class people without any compromises
                                </p>
                            </div>
                        </div>
                        <!-- second element -->
                        <div class="in">
                            <div class="feature-box">
                                <svg class="feature-box__icon">
                                    <use xlink:href="img/sprite.svg#icon-compass"></use>
                                </svg>
                                <h3 class="heading-tertiary u-margin-bottom-small">best surrounding</h3>
                                <p class="feature-box__text">
                                    We have hotels at the best location one could possibly think of
                                </p>
                            </div>
                        </div>
                        <!-- third element -->
                        <div class="in">
                            <div class="feature-box">
                                <svg class="feature-box__icon">
                                    <use xlink:href="img/sprite.svg#icon-heart-outlined"></use>
                                </svg>
                                <h3 class="heading-tertiary u-margin-bottom-small">best staff</h3>
                                <p class="feature-box__text">
                                    Each staff member is qualified and customer can ask for hostel certification
                                </p>
                            </div>
                        </div>
                        <!-- fourth element -->
                        <div class="in">
                            <div class="feature-box">
                                <svg class="feature-box__icon">
                                    <use xlink:href="img/sprite.svg#icon-star-outlined"></use>
                                </svg>
                                <h3 class="heading-tertiary u-margin-bottom-small">best rated</h3>
                                <p class="feature-box__text">
                                    We are among the top Hotels in the world and growing exponentially
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best deal section starts here -->

            <section class="section-deal" id="section-deal">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="head-sec">
                        Most popular hotels around the world
                    </h2>
                </div>

                <div class="row-1">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">INDUS BEACH RESORT</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>near beach hotels</li>
                                    <li>premium service</li>
                                    <li>free wifi</li>
                                    <li>enjoy with family or friends</li>
                                    <li>editor's choice</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">Rs. 4999</p>
                                </div>
                                <?php
                                if(isset($_SESSION['userId'])){
                                echo '<a href="booking.php"  class="btn btn--adpt">Book now!</a>';
                                }
                                else{
                                    echo '<a href="login.php" class="btn btn--adpt">Book now!</a>';
                                }
                                ?>    
                            </div>
                        </div>
                    </div>


                    <div class="in">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &NonBreakingSpace;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">INDUS TROPICAL
                                        RESORT</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>savana like feeling</li>
                                        <li>well surrounded</li>
                                        <li>our own tours and travels</li>
                                        <li>get ready to go in another world</li>
                                        <li>editor's choice</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">Rs. 7999</p>
                                    </div>
                                    <?php
                                    if(isset($_SESSION['userId'])){
                                    echo '<a href="booking.php"  class="btn btn--adpt">Book now!</a>';
                                    }
                                    else{
                                    echo '<a href="login.php" class="btn btn--adpt">Book now!</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="in">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &#160;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">INDUS CHILL RESORT</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>get ready for mountains</li>
                                        <li>our tours and travels for hiking</li>
                                        <li>best trained skiers</li>
                                        <li>all equipment provided</li>
                                        <li>editor's choice</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">RS. 8999</p>
                                    </div>
                                    <?php
                                    if(isset($_SESSION['userId'])){
                                    echo '<a href="booking.php"  class="btn btn--adpt">Book now!</a>';
                                    }
                                    else{
                                    echo '<a href="login.php" class="btn btn--adpt">Book now!</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="nearyou.php" class="btn btn--pink">Discover our hotels</a>
                </div>
            </section>

            <section class="section-book">
                <div class="book">
                    <div class="book__form">
                        <form action="includes/contact.inc.php" action="contact.php" class="form" method="post">
                            <div class="u-margin-bottom-medium">
                                <h2 class="head-sec">
                                    Want to know more
                                </h2><br>
                                <h3 class="head-sec">
                                    Contact us
                                </h3>
                            </div>

                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full Name" name="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email Address" name="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group">
                            <button class="btn btn--pink" name="contact">Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- best deal section ends here -->
        </main>
        <!-- hotelview ends -->
    </div>

    <!-- content ends here -->
    <footer>
        <div class="footer">
            <p>
                indus hotels and resorts &trade; <br>copyright reserved &reg;

            </p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>
