<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "icon" type = "image/png" href = "https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg">
    <link rel="stylesheet" href="style.css">
    <title>Reservation</title>
</head>
<body> 
    <header>
        <div  style="background-image: url(https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80); background-attachment: fixed; height: 600px; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
          <div class="overlay"></div>
          <!-- navbar -->
          <nav class="nav navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark-transparent">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg" height="50" alt="Your choise logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item footer-link-item">
                    <a class="nav-link text-dark" href="signup1.php">LOGIN </a>
                  </li>
                  <li class="nav-item footer-link-item">
                    <a class="nav-link text-dark" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item footer-link-item">
                    <a class="nav-link text-dark" href="menu.html">MENU</a>
                  </li>
                  <li class="nav-item active footer-link-item">
                    <a class="nav-link text-dark" href="reservation.php">RESERVATION</a>
                  </li>
                  <li class="nav-item footer-link-item">
                    <a class="nav-link text-dark" href="contact.html">CONTACT US</a>
                  </li>
                  <li class="nav-item footer-link-item">
                    <a class="nav-link text-dark" href="about.html">ABOUT US</a>
                  </li>
                  
                </ul>
              </div> <!--collapse end-->
            </div> <!--container end-->
          </nav> <!--navbar end-->
          
          <div class="container flex-column d-flex justify-content-center"style=" height: 600px;">
            <div class="text-center py-4" >
              <h1 class="text-white py-3" >
                <span class="font-weight-bold" style="font-size:1.5cm; color:rgb(216, 13, 47)">RESERVATION</span>
              </h1>
              <h2 class="font-weight-normal font-italic" style="font-size:1.5cm; color:rgb(216, 13, 47)"  >
                Come with family & feel the joy of mouthwatering food
              </h2>
            </div>
            <div class="gotoupbtn">
        <a href="#" class="gotoupbtn"><i class="far fa-arrow-alt-circle-up"></i></a>    
      </div>
              </div>
        </div>
      </header> 
     
      <section>
        <div class="container shadow py-5 my-5">
          <div class="row py-3">
            <div class="col-12 text-center px-md-5 px-sm-2 py-3">
              <h2 style="font-weight: 600;">BOOK A TABLE</h2>
              <p>We look forward to welcoming you back</p>
              <p class="px-md-5 px-sm-2 mx-5">Please note that we require card details to secure your booking. In the event that the reservation is not cancelled with 24 hours' notice, it will result in a charge of sh200 per guest.</p>
              <hr>
            </div>
          </div> <!--row end-->
          <div class="form">
          <div class="row py-3 justify-content-center bg-dark ">
            <div class="col-md-8 col-sm-12">

            <form method="POST" action="lounge.php">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label style="color: beige;" for="name">Full Name</label>
            <input type="text" class="form-control border-dark" name="name" placeholder="name" required>
        </div>
        <div class="col-md-6 mb-3">
            <label style="color: beige;" for="email">Email Address</label>
            <input type="text" class="form-control border-dark" name="email" placeholder="email" required>
        </div>
    </div> <!--form-row end-->

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label style="color: beige;" for="numberofperson">Number of person</label>
          
            <select class="form-control border-dark" name="numberofperson" required>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
    <label style="color: beige;" for="phone">Phone Number</label>
    <input type="tel" class="form-control border-dark" id="phone" name="phone" placeholder="Enter your phone number" required>
</div>
    </div> <!--form-row end-->

    <div class="form-row">
        <div class="col-md-6 mb-3">
        <label for="date">Date:</label>
<input type="date" id="date" name="date" required>
        </div>
        <div class="col-md-6 mb-3">
        <label for="time">Time:</label>
<input type="time" id="time" name="time" required>
        </div>
    </div><!--form-row end-->

    <div class="form-row">
        <div class="col-12 p-2">
            <label style="color: beige;" for="payment">Payment</label>
            <select class="form-control border-dark" name="payment" required>
                <option>MPesa</option>
                <option>visa</option>
                <option>mastercard</option>
                <option>cash</option>
                <option>paypal</option>
            </select>
        </div>
    </div><br>

    <div class="form-row">
        <div class="col-md-12 col-sm-12">
            <label style="color: beige;" for="message">Message</label>
            <textarea class="form-control border-dark" name="message" placeholder="Your message"></textarea>
        </div>
    </div> <!--form-row end-->

    <div class="form-row justify-content-center py-3">
        <div class="col-6 p-2">
            <button style="color: beige;" type="submit"value="submit" class="col-12 btn border-dark custom-btn">Submit</button>
        </div>
    </div>
</form>

              
            </div>
          </div> <!--row end-->
        </div>
      </div>
      </section>
      
      <!-- footer 4-->
      <div>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 text-center">
                <hr class="pt-5 mt-5">
              </div>
              <div class="col-lg-4 col-md-12 text-center">
                <img src="https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg" height="150" alt="Your choise logo">
            <span>Big Lounge</span>
              </div>
              <div class="col-lg-4 col-md-12 text-center">
                <hr class="pt-5 mt-5">
              </div>
            </div> <!--row end--><br><br>
            <p>If you have any questions, do not hesitate to ask them.</p>
        <div class="row justify-content-center">
          <div class="col-md-9 col-sm-10 px-2 py-3">
            <div class="d-flex justify-content-between py-3 my-2">
            <a href="https://twitter.com/irinnahrin" class="icon-link"><i class="fab fa-twitter"></i></a>
                  <a href="https://web.whatsapp.com/" class="icon-link"><i class="fab fa-whatsapp"></i></a>
                  <a href="https://www.instagram.com/irene.waweru.100/" class="icon-link"><i class="fab fa-instagram"></i></a>
                  <a href="www.facebook.com" class="icon-link"><i class="fab fa-facebook"></i></a>
            </div>
          </div>
          </div>
            <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Nairobi,Kenya<br><br>
            <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: 0711791575<br>
            <div class="py-2 p-1 m-2">
          <i class="fas fa-envelope-open-text fs-30"></i>
          <a href="mailto:irenewaweru9@gmail.com"><span class="footer-link-item"> irenewaweru9@gmail.com</span></a>
          </div>
            <p id="current-year"></p> 
        </footer>
    </div> <!--footer end-->
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="scripts.js"></script>
</body>
</html>