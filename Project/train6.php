<!-- //include "koneksi.php";
// //get value
// $username = $_POST['username'];
// $password = $_POST['password'];
//
// //to prevent mysql injection
// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($link,$username);
// $password = mysqli_real_escape_string($link,$password);
//
//
// //query the database for user
// $result = mysqli_query("SELECT * FROM signup WHERE username = '$username' And password = '$password'");
// $row = mysqli_fetch_array($result);
// if ($row['username'] == $username && $row['password'] == $password)
// $username = mysql_real_escape_string($link, $_POST['username']);
// $password = mysql_real_escape_string($link, $_POST['password']);
//
// if (count($errors) == 0) {
//   $password = md5($password);
//   $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//   $result = mysqli_query($link, $query);
//   if(mysqli_num_rows($result) == 1){ -->
<<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.min.css" />
    <link rel="shortcut icon" href="favicon-16x16.png">
    <style>
        * {box-sizing: border-box;}
        .mySlides {display: none;}
        img {vertical-align: middle;}
        /* Slideshow container */
        .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
        }
        .active {
          background-color: #717171;
        }
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        @-webkit-keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }
        @keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }
        </style>
</head>
<body>
<script src="jquery-3.3.1.min.js"></script>
<script src="Semantic-UI-CSS-master/semantic.min.js"></script>
<div class="ui right aligned grid">
    <div class="center aligned sixteen wide column">
        <div class="ui secondary white menu">
          <a class="ui item" href="train6.html">
            <img class="ui small rounded image" src="logo.png">
              </a>
                <a class="active item">
                  Home
                </a>
                <a class="item">
                  Messages
                </a>
                <a class="item">
                  Friends
                </a>
                <div class="right menu">
                  <div class="ui item">
                      <div class="ui fluid search">
                      <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Common passwords...">
                        <i class="search icon"></i>
                      </div>
                      <div class="results"></div>
                    </div>
                  </div>
                  </div>
                  <div class="right menu">
<?php
if (isset($_SESSION['username'])) {
  // code...
  //divbaru
  echo<<< dika
  <a class="ui item">
    Sign Out
  </a>
dika;
}else{
echo<<< ilham
  <a class="ui item">
    Sign Up
  </a>
  <a class="ui item">
        Sign In
    </a>
ilham;
}

 ?>



                </div>
          </div>
    </div>
    <div class="sixteen wide column" style="max-height: 300px; width: 800px;">
        <div class="slideshow-container" style="text-align: center; max-height: 300px; max-width: 800px;">
            <div class="mySlides fade">
              <img class="ui fluid image" src="event1.jpg">
            </div>

            <div class="mySlides fade">
              <img class="ui centered medium image" src="event1.jpg" style="">
            </div>

            <div class="mySlides fade">
              <img class="ui centered medium image" src="event1.jpg" style="">
            </div>

            <br>

            <div style="text-align:center">
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
        </div>
    </div>
    <div class="center aligned fifteen wide centered column" style="padding-left: 50px">
      <div class>
        <div class="ui link cards">
                    <div class="card">
                      <div class="image">
                        <img src="1.jpg">
                      </div>
                      <div class="content">
                        <div class="header">Nama Event</div>
                        <div class="meta">
                          <a>Lokasi</a>
                        </div>
                        <div class="description">
                          Deskripsi
                        </div>
                      </div>
                      <div class="extra content">
                        <span class="right floated">
                          <i class="calendar icon"></i>
                          Tanggal
                        </span>
                        <span class="left floated" style="">
                          <i class="user icon"></i>
                         Kuota: 75 Orang
                        </span>
                      </div>
                    </div>
                    <div class="card">
                            <div class="image">
                              <img src="/images/avatar2/large/matthew.png">
                            </div>
                            <div class="content">
                              <div class="header">Matt Giampietro</div>
                              <div class="meta">
                                <a>Friends</a>
                              </div>
                              <div class="description">
                                Matthew is an interior designer living in New York.
                              </div>
                            </div>
                            <div class="extra content">
                              <span class="right floated">
                                Joined in 2013
                              </span>
                              <span>
                                <i class="user icon"></i>
                                75 Friends
                              </span>
                            </div>
                          </div>
                          <div class="card">
                                <div class="image">
                                  <img src="/images/avatar2/large/matthew.png">
                                </div>
                                <div class="content">
                                  <div class="header">Matt Giampietro</div>
                                  <div class="meta">
                                    <a>Friends</a>
                                  </div>
                                  <div class="description">
                                    Matthew is an interior designer living in New York.
                                  </div>
                                </div>
                                <div class="extra content">
                                  <span class="right floated">
                                    Joined in 2013
                                  </span>
                                  <span>
                                    <i class="user icon"></i>
                                    75 Friends
                                  </span>
                                </div>
                              </div>
                    <div class="card">
                      <div class="image">
                        <img src="/images/avatar2/large/molly.png">
                      </div>
                      <div class="content">
                        <div class="header">Molly</div>
                        <div class="meta">
                          <span class="date">Coworker</span>
                        </div>
                        <div class="description">
                          Molly is a personal assistant living in Paris.
                        </div>
                      </div>
                      <div class="extra content">
                        <span class="right floated">
                          Joined in 2011
                        </span>
                        <span>
                          <i class="user icon"></i>
                          35 Friends
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <div class="image">
                        <img src="/images/avatar2/large/elyse.png">
                      </div>
                      <div class="content">
                        <div class="header">Elyse</div>
                        <div class="meta">
                          <a>Coworker</a>
                        </div>
                        <div class="description">
                          Elyse is a copywriter working in New York.
                        </div>
                      </div>
                      <div class="extra content">
                        <span class="right floated">
                          Joined in 2014
                        </span>
                        <span>
                          <i class="user icon"></i>
                          151 Friends
                        </span>
                      </div>
                    </div>
        </div>
      </div>
    </div>
  </div>
<script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2500); //time(sec)
        }
  </script>

</body>
</html>
