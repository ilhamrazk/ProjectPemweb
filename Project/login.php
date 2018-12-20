<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eventation : Login</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="shortcut icon" href="favicon-16x16.png   ">
    <style>
    </style>
  </head>
    <body>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <div class="ui grid container">
        <div class="sixteen wide column">
            <center>
                <a href="index.php">
                    <img class="ui medium image" src="logo.png" style="padding-left: 10px; padding-top: 15px; width: 400;"></center>
                </a>
        
                </div>
    </div>

    <div class="ui three column centered grid" style="margin-top: 50px">
            <div class="column">
                <div class="ui segment" style="">
                    <center>
                        
                        <h3>Sign in first to get the most from us!</h3>
                        <div style="margin-left: 40px; margin-right: 40px; padding-top: 10px;">
                            <form class="ui form" method="POST" action="includes/login.inc.php" id="form">
                                
                                    <div class="field">
                                    <label for="username"> Username </label>
                                    <input type="text" name="username" placeholder="Username/Email ">
                                </div>
                                <div class="field" id="password">
                                    <label for="password"> Password </label>
                                    <input type="password" name="password" placeholder="Password">
                                <div class="field">
                                </div >
                                <button class="ui blue button" name="submit" type="submit" >Login
                                </div>
                                <div class="ui error message">
                                    
                                </div>   
                            </form>
                            <p>Don't have an account? Sign up<a href="register.php"> here</a></p>
                        </div>
                    </center> 
                </div>
            </div>
    </div>
    <script>$('.ui.form')
            .form({
              on: 'blur',
              fields: {
                username: {
                  identifier  : 'username',
                  rules: [
                    {
                      type   : 'minLength[6]',
                      prompt : 'Your username must be at least 6 characters'
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
              }
          }
      }
    );
</script>
  </body>
</html>
