<?php
include_once 'config.php';
session_start();
$firstname="Ayesha";
$lastname="Khalid";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CV Builder</title>
</head>
<?php
     $sql=mysqli_query($conn,"SELECT * FROM basic WHERE first_name='$firstname' AND last_name='$lastname'");
     $data = mysqli_fetch_array($sql);
?>

<body>
    <div style="background-color: white;">
        <nav class="navbar navbar-expand-lg navbar-light " >
            <a class="navbar-brand" href="#"><img class="image" src="images/logo-png.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#zee" >About</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Templates
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Template 1</a>
                                <a class="dropdown-item" href="#">Template 2</a>
                                <a class="dropdown-item" href="#">Template 3 </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.html">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </li>

                    </ul>
                </span>
            </div>
        </nav>
        <div style="height: 1200px;">

          <div class="wrapper">
            <div class="intro">
              <div class="profile">
                <div class="photo">
                  <img src="../images/<?php echo $data["picture"]; ?>" alt="">
                </div>
                <div class="bio">
                  <h1 class="name"><?php echo($data['first_name']);
                  echo(" ");
                  echo($data['last_name']);?></h1>
                  <p class="profession"><?php echo($data['profession']);?></p>
                </div>
              </div>
              <div class="intro-section about">
                <h1 class="title">Objective</h1>
                <p class="paragraph">
                  Hi everyone, I am a [Your Profession], graduated from [your college], Taiwan and my major is [your field]. I recently try my
                  best to improve my skills on [skill]. My favorite thing is to observe others' portfolio.
                </p>
              </div>
              <div class="intro-section contact">
                <h1 class="title">Contact</h1>
                <div class="info-section">
                  <i class="fas fa-phone"></i>
                  <span><?php echo("+92");
                            echo($data['contact']);?></span>
                </div>
                <div class="info-section">
                  <i class="fas fa-map-marker-alt"></i>
                  <span><?php echo($data['city']);
                            echo(" , ");
                            echo($data['country']);?></span>
                </div>
                <div class="info-section">
                  <i class="fas fa-paper-plane"></i>
                  <span><?php echo($data['email']); ?></span>
                </div>
              </div>
              <div class="intro-section follow">
                <h1 class="title">Social</h1>
                <div class="info-section link">
                  <i class="fab fa-github"></i>
                    <span><?php echo($data['github']); ?></span>
                  </a>
                </div>
                <div class="info-section link">
                  <i class="fab fa-linkedin"></i>
                    <span>  <?php echo($data['linkedin']); ?></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail">
              <div class="detail-section edu">
                <div class="detail-title">
                  <div class="title-icon">
                    <i class="fas fa-user-graduate"></i>
                  </div>
                  <span>Eduation</span>
                </div>
                <div class="detail-content">
                  <div class="timeline-block">
                    <h1>University Name</h1>
                    <p>city, country</p>
                    <time>start year - end year</time>
                  </div>
                  <div class="timeline-block">
                    <h1>College Name</h1>
                    <p>city, country</p>
                    <time>start year - end year</time>
                  </div>
                </div>
              </div>
              <div class="detail-section edu">
                <div class="detail-title">
                  <div class="title-icon">
                    <i class="fas fa-user-graduate"></i>
                  </div>
                  <span>Experience</span>
                </div>
                <div class="detail-content">
                  <div class="timeline-block">
                    <h1>Company Name</h1>
                    <p>City, Country</p>
                    <time>start year - end year</time>
                  </div>
                  <div class="timeline-block">
                    <h1>Company Name</h1>
                    <p>City, Country</p>
                    <time>start year - end year</time>
                  </div>
                </div>
              </div>
              <div class="detail-section pg-skill">
                <div class="detail-title">
                  <div class="title-icon">
                    <i class="fas fa-laptop-code"></i>
                  </div>
                  <span>Programming skills</span>
                </div>
                <div class="detail-content">
                  <ul class="pg-list">
                    <li>
                      <span>HTML5</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 90%"></div>
                      </div>
                    </li>
                    <li>
                      <span>CSS3</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 75%"></div>
                      </div>
                    </li>
                    <li>
                      <span>Javascript</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 70%"></div>
                      </div>
                    </li>
                    <li>
                      <span>JQuery</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 50%"></div>
                      </div>
                    </li>
                    <li>
                      <span>NodeJS</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 70%"></div>
                      </div>
                    </li>
                    <li>
                      <span>ReactJS</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 75%"></div>
                      </div>
                    </li>
                    <li>
                      <span>VueJS</span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: 40%"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ; margin-bottom: 1%;"><a>Copyright<i class="fa fa-copyright" aria-hidden="true"></i>CV</a></div>
                    <div class="col-sm-12 col-md-6 col-lg-3"style="margin-top:1% ;"><a><i class="fa fa-whatsapp" aria-hidden="true"></i>&ensp;+92256314548 <br></a></div>

                    <div class="col-sm-12 col-md-6 col-lg-3"style="margin-top:1% ;"><a><i class="fa fa-envelope-o" aria-hidden="true"></i>&ensp;CV@gmail.com</a></div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
