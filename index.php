<?php
include("connection.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >
    <title>Khel Mahakumbh</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="popup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
       
        footer {
            margin-top: 0px;
            background-color: rgb(25, 9, 2);
            color: white;
        }

        .frow {
            margin-left: 10px;
            padding: 30px;
            display: flex;
            justify-content: space-evenly;
        }

        .fcol {
            flex-direction: column;
        }

        .fcol ul {
            list-style-type: none;
            padding: 10px 0px;
        }

        footer a {
            text-decoration: none;
            color: white;
        }

        footer a:hover {
            color: #af2f0f;
        }

        .fhead {
            padding-bottom: 5px;
            font-weight: bold;
        }

        .socials {
            display: grid;
            justify-content: space-evenly;
            grid-template-rows: 15px 15px 15px 15px 15px;
            grid-template-columns: 15px 15px 15px 15px 15px;
            padding: 0px 0px;
        }

        footer p {
            text-align: center;
            background-color: rgb(25, 9, 2);
            color: white;
        }
    </style>
</head>
<body>
<!--navbar-->
<div class="navbar navbar-expand-sm bg-dark ">
    <div class="container-fluid">
        <i class="bi bi-list" id="bars" data-bs-target="#menu" data-bs-toggle="offcanvas" ></i>
        <a href="" class="navbar-brand" id="logo" style="margin-left:600px;"></a>
<!--        dropdown btn-->
        <div class="dropdown" id="drop_btn">
            <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Other
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="src/institute/Institute_registration.php"><span class="d-item">Institute Registration</span></a></li>
                <li><a class="dropdown-item" href="src/team/team_register.php"><span class="d-item">Team Registration</span> </a></li>
                <li><a class="dropdown-item" href="src/coach/coach_registration.php"><span class="d-item"> Coach Registration </span></a></li>
                <li><a class="dropdown-item" href="src/individual/individual_registration.php"><span class="d-item"> Individual Registration </span></a></li>
                <li><a class="dropdown-item" href="src/club/club_registration.php"><span class="d-item"> Club Registration </span></a></li>
                
            </ul>
        </div>
            <a href="src/login.php" class="btn">
                <i class="bi bi-box-arrow-in-left" id="sign">
                </i>
            </a>

    </div>
</div>
<!--explore-->
<div class="land_img">
<p style="font-size:100px; color:white; display:block;">
   <span style="color:#ff6131;">Khel</span> <span style="color:white;">Maha</span><span style="color:green;">kumbh</span>

    </p>
        <p style="color:cyan; font-size:30px; margin-left:-700px; margin-top:150px;">
            A platform where talent meets passion.
        </p>
    <br>
    <img src="Khel-logo.png" alt="" height="150px;" width="150px;" style=" margin-left:-300px; margin-top:220px;">
    <br>
    <a type="button" class="btn" id="explore_btn"  data-bs-target="#menu" data-bs-toggle="offcanvas">
        Explore!</a>
       
</div>
<!--offcanvas-->
<div id="menu" class="offcanvas offcanvas-start bg-dark text-light d-flex flex-column text-center ">

    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Menu</h1>
        <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav menu-list">
            <li class="nav-item"><a href="index.php" class="nav-link text-light menu-link">Home</a></li>
            <li class="nav-item"><a href="src/Game_details.html" class="nav-link text-light menu-link " >Games</a></li>
            <li class="nav-item"><a href="src/event_registration.php" class="nav-link text-light menu-link">Events</a></li>
            <li class="nav-item"><a href="src/Game_details.html" class="nav-link text-light menu-link">Resources</a></li>
            
            <li class="nav-item"><a href="src/blog.html" class="nav-link text-light menu-link">Blog</a></li>
            <li class="nav-item"><a href="src/login.php" class="nav-link text-light menu-link">Login</a></li>

        </ul>
    </div>
    <div class="offcanvas-footer">
        <i class="bi bi-telephone-inbound" id="call"></i>  <h4 class="text-primary">Call us on: +91-7990122530</h4>
    </div>
</div>

<!--carousel game-card-->
<h1 class=" text-center text-muted " style=" margin-top:430px;"  >Games</h1>

<div class="carousel slide  my-1" id="carousel_2" data-bs-ride="carousel">


    <div class="carousel-inner ">
        <div class="carousel-item active">
<!--            1-->
            <div class="card" style="width: 18rem; height:440px; margin-left:200px; display:flex; float:left; margin-top:40px;">
                <img class="card-img-top" src="hockey.jfif" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Hockey</h5>
                    <p class="card-text">Hockey is believed to date from the earliest civilizations. The Arabs, Greeks, Persians, and Romans each had their own versions, and traces of a stick game played by the Indians of America have found.</p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#hockey" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Hockey"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>

                </div>
            </div>

<!--            2-->
            <div class="card" style="width: 18rem; height:440px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="badminton.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Badminton</h5>
                    <p class="card-text">Badminton is a racket sport played by either two opposing players (singles) or two opposing pairs (doubles), who take positions on opposite halves of a rectangular court that is divided by a net..</p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#badminton" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Badminton"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>
                </div>
            </div>
<!--3-->
            <div class="card" style="width: 18rem; height:440px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="Running.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Running</h5>
                    <p class="card-text">
                        Running is a method of terrestrial locomotion allowing humans and other animals to move rapidly on foot. Running is a type of gait characterized by an aerial phase in which all feet are above the ground
                    </p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#running" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Running"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>
                </div>
            </div>

<!--            4-->
            <div class="card" style="width: 18rem; height:440px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="basketball.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Basketball</h5>
                    <p class="card-text">
                        Basketball is a game played between two teams of five players each on a rectangular court, usually indoors. Each team tries to score by tossing the ball through the opponent'basket.
                    </p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#basketball" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Basketball"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>
                </div>
            </div>
<div class="view_games">
    <a href="src/Game_details.html" target="_blank" class="view">View all</a>
</div>
        </div>
        <div class="carousel-item">
<!--            1-->
            <div class="card" style="width: 18rem; height:440px; margin-left:200px; display:flex; float:left; margin-top:40px;">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Kho-Kho</h5>
                    <p class="card-text">
                        Kho Kho is a traditional Indian sport, being one of the oldest outdoor sports dating back to ancient India. It is the second most popular traditional tag game in the Indian subcontinent after Kabaddi.
                    </p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#kho-kho" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Kho-Kho"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>
                </div>
            </div>

            <!--            2-->
            <div class="card" style="width: 18rem; height:440px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Volleyball</h5>
                    <p class="card-text">
                        Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other team's court under organized rules.
                    </p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#volleyball" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Volleyball"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>
                </div>
            </div>
            <!--3-->
            <div class="card" style="width: 18rem; height:440px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">cycling</h5>
                    <p class="card-text">
                        Cycling, also, when on a two-wheeled bicycle, called bicycling or biking, is the use of cycles for transport, recreation, exercise or sport
                    </p> <br>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#Cycling" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Cycling"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>

                </div>
            </div>

            <!--            4-->
            <div class="card" style="width: 18rem; height:440px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title">Weight Lifting</h5>
                    <p class="card-text">
                        Weight lifting and similar strength training activities are examples of anaerobic exercise. Anaerobic exercise involves a short burst of intense movement, while only burning carbohydrates for energy.
                    </p>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/Game_details.html#weight-lifting" id="enroll-a" style="text-decoration:none; color:black;">View Details</a>
                    </button>
                    <button  class=" card-btn" id="card_btn">
                        <a href="src/event_registration.php?event=Weight Lifting"  id="enroll-a" style="text-decoration:none; color:black;">Enroll</a>
                    </button>
                </div>
            </div>
            <div class="view_games">
                <a href="src/Game_details.html" class="view">View all</a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" data-bs-target="#carousel_2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" style="margin-left:100px; border:1px solid black; background-color:black;margin-top:10px; "></span>
    </button>
    <button class="carousel-control-next" data-bs-target="#carousel_2"  data-bs-slide="next" style="height:30px;">
        <span class="carousel-control-next-icon" style=" border:1px solid black; background-color:black; margin-right:-60px;margin-top:460px; "></span>
    </button>
</div>

<!--carousel event-card-->
<h1 class=" text-center text-muted " style=" margin-top:70px;"  >Events</h1>

<div class="carousel slide  my-1" id="carousel_3" data-bs-ride="carousel">


    <div class="carousel-inner ">
        <div class="carousel-item active">
            <!--            1-->
            <div class="card" style="width: 18rem; height:250px; margin-left:200px; display:flex; float:left; margin-top:40px;">
                <img class="card-img-top" src="hockey.jfif" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Hockey</h5>
                    <button  class="card-btn" id="card_btn"><a href="src/Game_details.html#hockey">View Details</a></button>
                </div>
            </div>

            <!--            2-->
            <div class="card" style="width: 18rem; height:250px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="badminton.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Badminton</h5>
                    <button class="card-btn" id="card_btn"><a href="src/Game_details.html#badminton">View Details</a></button>
                </div>
            </div>
            <!--3-->
            <div class="card" style="width: 18rem; height:250px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="Running.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Running</h5>
                    <button  class=" card-btn" id="card_btn"><a href="src/Game_details.html#running">View Details</a></button>
                </div>
            </div>

            <!--            4-->
            <div class="card" style="width: 18rem; height:250px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="basketball.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Basketball</h5>

                    <button  class=" card-btn" id="card_btn"><a href="src/Game_details.html#basketball">View Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="src/Game_details.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            1-->
            <div class="card" style="width: 18rem; height:250px; margin-left:200px; display:flex; float:left; margin-top:40px;">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Kho-Kho</h5>
                    <button  class=" card-btn" id="card_btn"><a href="src/Game_details.html#kho-kho">View Details</a></button>
                </div>
            </div>

            <!--            2-->
            <div class="card" style="width: 18rem; height:250px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">volleyball</h5>
                    <button  class=" card-btn" id="card_btn"><a href="src/Game_details.html#volleyball">View Details</a></button>
                </div>
            </div>
            <!--3-->
            <div class="card" style="width: 18rem; height:250px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">cycling</h5>
                    <button  class=" card-btn" id="card_btn"><a href="src/Game_details.html#cycling">View Details</a></button>
                </div>
            </div>

            <!--            4-->
            <div class="card" style="width: 18rem; height:250px; display:flex; float:left; margin-left:50px; margin-top:40px;">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img" style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Weight lifting</h5>
                    <button  class=" card-btn" id="card_btn"><a href="src/Game_details.html#weight-lifting"> View Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="src/Game_details.html" class="view">View all</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-target="#carousel_3" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" style="margin-left:80px; border:1px solid black; background-color:black;margin-top:0px; "></span>
    </button>
    <button class="carousel-control-next" data-bs-target="#carousel_3"  data-bs-slide="next" style=" height:30px; " >
        <span class="carousel-control-next-icon" style=" border:1px solid black; background-color:black;margin-top:290px; margin-right:-110px; "></span>
    </button>
</div>
<!--what's new-->
<div class="new-div">
        <div style="margin-top:0px;">
            <h1 id="new"><b>What's New?</b></h1>
        </div>
        <div class="card" id="new-card">
            <div class="card-body">
                <div class="card-main">
                    <div class="new-div1">
                        <img src="https://khelmahakumbh.gujarat.gov.in/uploads/news/164674649682khel-logo.jpg" alt="">
                    </div>
                    <div class="new-div2">
                        <b> Going All Online </b>
                    </div>
                    <div class="new-div3">
                        <img src="https://khelmahakumbh.gujarat.gov.in/uploads/assets/163894606251sag1.jpg" alt="">
                    </div>
                </div>
                <!--            2div-->
                <div class="card-main">
                    <div class="indi-register">
                        <img src=".idea/images/Registration-ss.png" alt="" height="200px" width="400px"><br> <br>
                        <span style="color:#ff6131;"><b>Online Registration of:</b></span><br>

                        <a href="src/Institute_registration.html">Institute/School Registration:</a> <br>
                        <a href="src/Team_Register.html"> Team Registration :</a> <br>
                        <a href="src/coach_registration.php"> Coach Registration :</a> <br>
                        <a href="src/individual_registration.php"> Individual Registration:</a>
                    </div>
                    <div class="map">
                        <img src=".idea/images/mapping.png" alt=""> <br><br>
                        <br>
                        <span style="color:#ff6131;"><b>Student-Coach Mapping.</b></span>
                    </div>
                    <div class="schedule">
                        <img src=".idea/images/schedule-ss.png" alt="" height="200px" width="400px">
                        <br><br>
                        <br>
                        <span style="color:#ff6131;"><b>Automated Scheduling of Events</b></span>
                    </div>
                </div>
                <div class="card-main">
                    <div class="stats">
                        <img src=".idea/images/stats.jpg" alt="" height="200px" width="400px">
                        <br><br>
                        <br>
                        <span style="color:#ff6131;"><b>Player stats</b></span>
                    </div>
                    <div class="finance">
                        <img src=".idea/images/financial.png" alt="" height="200px" width="400px">
                        <br><br>
                        <br>
                        <a href="ptable.html" style=" text-decoration:none;"><b style="color:#ff6131;">Prize distribution</b></a>
                    </div>
                </div>
            </div>

+ </div>
<footer id="footer" class="footer">
            <div class="footer-box">
                <div class="frow">
                    <div class="fcol">
                        <h4 class="fhead">Highlights</h4>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Games</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Careers</a></li>
                        </ul>
                    </div>
                    <div class="fcol">
                        <h4 class="fhead">Events</h4>
                        <ul>
                            <li><a href="">Faq</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Help and Support</a></li>
                            <li><a href="">Disclaimer</a></li>
                            <li><a href="">Developer APIs</a></li>
                        </ul>
                    </div>
                    <div class="fcol">
                        <h4 class="fhead">Legal</h4>
                        <ul>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Services</a></li>
                            <li><a href="">Copyright Policy</a></li>
                            <li><a href="">Accesibility Statements</a></li>
                            <li><a href="">Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="fcol">
                        <h4 class="fhead">Social Connect</h4>
                        <ul class="socials">
                            <li class="list-item">
                                <a href="">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="fcol contact">
                        <h4 class="fhead">Contact Us</h4>
                        <address class="address">
                            Sports, Youth & Cultural Activities Department<br>
                            Block No 14, 3rd Floor, Dr. Jivraj Mehta Bhavan Sector - 10, Gandhinagar.
                        </address>
                        <div class="site">
                            <a href="https://khelmahakumbh.gujarat.gov.in">khelmahakumbh.gujarat.gov.in</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>&lt;&lt;&lt;&copy;Sports Authority of Gujarat<br>Sports, Youth and Cultural Activities Department ,
                Government of Gujarat&gt;&gt;&gt;</p>
        </footer>
        <div class="popup">
        <div class="contentBox">
          <!-- <div class="cross"></div> -->
          <div class="content">
            <form action="">
              <br><h2 style="margin-left:0px;">Are you Specialy Abled?</h2><br>
              <input style="margin-left:40%;" type="radio" name="abled" id="abledyes" value="Yes"><span style="font-size: 17px;">Yes</span><br><br>
              <input style="margin-left:40%;" type="radio" name="abled" id="abledno" value="No"><span style="font-size: 17px;">No</span><br><br>
              <button style="margin-left:30%; font-size:20px; width: 100px; height: 30px; background-color: #2e7dc2; color:#f3f3f3; border-radius: 10px;">Submit</button>
            </form> 
          </div>
        </div>
      </div>
<script>
    if (location.search.includes("abled")) {
      
    } else  {
      const popup = document.querySelector('.popup');
      const bodyobj = document.getElementsByTagName('body');
      const cross = document.querySelector('.cross');
      window.onload = function(){
        setTimeout(function(){
          popup.style.display = "block";
        },2000);
      }
      cross.addEventListener('click', ()=> {
        popup.style.display = "none";
      });
    }
</script>

    </body>
</html>