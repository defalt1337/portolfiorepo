<?php
include '../database/upload.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/navbar.css">
  <link rel="stylesheet" href="../style/contact.css">
  <script type="text/javascript" src="../script/index.js"></script>
  <script type="text/javascript" src="../script/main.js"></script>
  <link rel="icon" href="../media/cyberpunk.png" type="x-image/icon">
  <title>Contact</title>
</head>

<body>
  <main>
    <div class="header">
      <div class="logo">Contact</div>
      <div class="menu">
        <a href="../index.php" class="link">
          <div class="title">Home</div>
          <div class="bar"></div>
        </a>
        <a href="about.php" class="link">
          <div class="title">About</div>
          <div class="bar"></div>
        </a>
        <a href="progress.php" class="link">
          <div class="title">Progress</div>
          <div class="bar"></div>
        </a>
        <a href="contact.php" class="link">
          <div class="title">Contact</div>
          <div class="bar"></div>
        </a>
      </div>
    </div>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form method="post" action="../database/upload.php" class="contact100-form validate-form">
          <span class="contact100-form-title">Contact us</span>
          <div class="wrap-input100 validate-input" data-validate="Name required">
            <span class="label-input100">Your name</span>
            <input type="text" name="name" class="input100" value="<?php $name; ?>" required placeholder="Enter your name">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Mail required">
            <span class="label-input100">Your e-mail</span>
            <input type="text" name="mail" class="input100" value="<?php $e_mail; ?>" required placeholder="Enter your mail address">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 input100-select">
            <span class="lable-input100">Topic</span>
            <div>
              <select class="selection-2" name="service" value="<?php $topic; ?>">
                <option>Question</option>
                <option>Meat</option>
                <option>Dunno what</option>
                <option>What</option>
                <option>Okay</option>
              </select>
            </div>
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Message needed">
            <span class="label-input100">Message</span>
            <textarea class="input100" name="message" value="<?php $message; ?>" placeholder="your message goes here"></textarea>
            <span class="focus-input100"></span>
          </div>
          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
              <button class="contact100-form-btn" name="megyeget" type="submit">
                <span>submit
                  <i class="fa fa-long-arrow-right m-1-7" aria-hidden="true"></i>
                </span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="footer-copyright text-right py-3">All rights reserved</div>
  </main>
</body>

</html>