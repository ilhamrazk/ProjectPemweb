<?php
    session_start();

    //connect to database
    $db = mysqli_connect("localhost", "root", "kutukupret123", "ilham");
    if (isset($_POST['submit'])) {
      $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
      $password2 = mysqli_real_escape_string($db,$_POST['confirmpassword']);
      $phone_number = mysqli_real_escape_string($db,$_POST['phonenumber']);
      $gender = mysqli_real_escape_string($db,$_POST['gender']);

      if ($password == $password2) {
        $password = md5($password); //hashing password
        $sql = "INSERT INTO signup(fullname, username, email, password, phone_number, gender)
        VALUES('$fullname', '$username', '$email', '$password', '$phone_number', '$gender')";
        mysqli_query($db, $sql);
        header("location: loginpage.php");
      }else{
        $_SESSION['message'] = "The two passwords do not match";
      }
    }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eventation : Login</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="shortcut icon" href="images/favicon-16x16.png   ">
    <style>
    </style>
  </head>
    <body>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <div class="ui grid container">
        <div class="sixteen wide column">
            <center>
                <a href="train6.html">
                    <img class="ui medium image" src="images/logo.png" style="padding-left: 10px; padding-top: 15px; width: 400;"></center>
                </a>

                </div>
    </div>

    <div class="ui two column centered grid" style="margin-top: 50px">
            <div class="column">
                <div class="ui segment" style="">
                <h3 style="text-align: center">Hi, tell us a bit of your self!</h3>
                <div style="margin-left: 40px; margin-right: 40px; padding-top: 10px;">
                        <form class="ui form" method="post" id="form">
                                <div class="field">
                                    <label for="fullname"> Full Name </label>
                                    <input type="text" name="fullname" placeholder="Full Name">
                                </div>
                                <div class="field">
                                    <label for="username"> Username </label>
                                    <input type="text" name="username" placeholder="Username">
                                </div>
                                <div class="field">
                                    <label for="email"> Email Address </label>
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label for="password"> Password </label>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="field">
                                        <label for="confirmpassword"> Confirm Password </label>
                                        <input type="password" name="confirmpassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label for="nomorhp"> Phone Number </label>
                                        <input type="text" name="phonenumber" placeholder="Phone Number">
                                    </div>
                                    <div class="field">
                                        <label> Gender </label>
                                        <select class="ui search dropdown" name="gender">
                                            <option value="null"></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="inline field">

                                    <div class="ui checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <label>I agree to the Terms and Conditions</label>
                                    </div>

                                </div>
                                <br>
                                <center>
                                    <button class="ui blue button" type="submit" name="submit">Sign Me Up!</button>
                        </form>
                                <br>
                                <div class="ui error message"></div>
                                <p><br> Have an account? Sign in<a href="loginpage.html"> here</a></p>
                                </center>

        </div>
    </div>
    <script>
    $('select.dropdown')
        .dropdown();
    </script>

    <script>$('.ui.form')
            .form({
              on: 'blur',
              inline : true,
              fields: {
                fullname: {
                  identifier  : 'fullname',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'You forgot to type your name!'
                    }
                  ]
                },
                username: {
                  identifier  : 'username',
                  rules: [
                    {
                      type   : 'minLength[6]',
                      prompt : 'Your username must be at least 6 characters'
                    }
                  ]
                },
                email: {
                    identifier  : 'email',
                    rules: [
                    {
                        type   : 'email',
                        prompt : 'Please enter a valid email address'
                    }
                    ]
                },
                password: {
                  identifier  : 'password',
                  rules: [
                    {
                      type   : 'minLength[8]',
                      prompt : 'Your password must be at least 8 characters'
                    },
                ]
              },
              confirmpassword: {
                  identifier  : 'confirmpassword',
                  rules: [
                    {
                      type   : 'match[password]',
                      prompt : "Your password doesn't match"
                    },
                ]
              },
            phonenumber: {
                identifier  : 'phonenumber',
                rules: [
                {
                    type   : 'number',
                    prompt : ''
                },
                {
                    type   : 'minLength[11]',
                    prompt : "Your phone number can't be that short!"
                }
                    ]
            },
              checkbox: {
                identifier  : 'checkbox',
                rules: [
                {
                    type   : 'checked',
                    prompt : 'You have not agree to our Terms And Condition'
                }
                ]
            }
          }
      }
    );
</script>
  </body>
</html>
