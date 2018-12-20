<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CANON</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <style>
      .column{
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <div class="ui grid container">
    <div class="sixteen wide column">
      <center><h1>"JUDUL"</h1></center>
    </div>
          <div class="sixteen wide column">
              <center>
            <div class="ui ordered steps">
        <div class="active step">
          <div class="content">
            <div class="title">Rincian</div>
            <div class="description"></div>
          </div>
        </div>
        <div class="incompleted step">
          <div class="content">
            <div class="title">Pembayaran</div>
            <div class="description"></div>
          </div>
        </div>
        <div class="incompleted step">
          <div class="content">
            <div class="title">Selesai</div>
            <div class="description"></div>
          </div>
        </div>
      </div>
    </center>
    </div>

    <div class="sixteen wide column">
      <form class="ui form">
        <div class="field">
          <label>First Name</label>
          <input type="text" name="first-name" placeholder="First Name">
        </div>
        <div class="field">
          <label>Last Name</label>
          <input type="text" name="last-name" placeholder="Last Name">
        </div>
        <div class="field">
          <div class="field">
            <label>Email Address</label>
            <input type="text" name="email-address" placeholder="user@gmail.com">
          </div>
          <div class="field">
            <div class="field">
              <label>Nomor HP</label>
              <input type="text" name="nomor-hp" placeholder="08XXXXXXXXXX">
            </div>
            <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" tabindex="0" class="hidden">
            <label>I agree to the Terms and Conditions</label>
          </div>
        </div>
        <button class="ui button" type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
