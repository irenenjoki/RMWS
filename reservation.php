<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "icon" type = "image/png" href = "https://bigsquare.co.ke/wp-content/uploads/2020/04/logo1.svg">
    <link rel="stylesheet" href="style.css">
    <title>Reservations</title>
</head>
<style>
  *{
      margin: 0;
      padding: 0;
      font-family: "Open Sans", sans-serif;
  }
  body{
      background-color: #000002;
  }
  
  .fs-30{
      font-size: 30px;
  }
  .fs-50{
      font-size: 50px;
  }
  html{
     scroll-behavior: smooth;
  }
  p{
      color: #f3f2ec;
  }
  /* footer */
  
  footer{
    background-color:  #8f8c8c;
     color:  #000000;
     font-weight: bold;
     text-decoration-line: none;
     text-align: center;
  }
  
  .footer-link-item{
      color: #f1420d;
      font-weight: bold;
      text-decoration-line: none;
  }
  .footer-link-item:hover{
      color: rgb(0, 0, 0);
      font-weight: normal;
  }
  .icon-link{
      color: rgb(235, 74, 10);
      font-size: 40px;
      font-weight: bold;
  }
  .icon-link:hover{
      color: rgb(12, 12, 11);
      font-weight: normal;
  }
  .gotoupbtn{
     position: fixed;
     width: 50px;
     height: 50px;
     background: #351002;
     bottom: 40px;
     right: 50px;
     border-radius: 2px;
     text-align: center;
     line-height: 50px;
     color: #056066;
     font-size: 30px;
     text-decoration: none;
     cursor: pointer;
     transition: 0.5s;
     z-index: 1;
  }
  .gotoupbtn:hover{
     font-size: 25px;
     background: rgb(5, 1, 14);
     color: rgb(248, 10, 10);
     width: 48px;
     height: 48px;
     border-radius: 50%;
  }
  
  .custom-btn:hover{
      background-color: rgb(15, 163, 27);
      font-weight: normal;
      color: white;
  }
  /* Home page */
  .circle-img{
      border-radius: 50%;
  }
  .icon-style{
      color: rgb(219, 21, 21);
      font-size: 30px;
  }
  /*.shadow-bg{
      background: rgb(228,228,228);
      background: radial-gradient(circle, rgba(228,228,228,1) 17%, rgba(208,205,253,1) 18%, rgba(220,213,255,1) 30%, rgba(228,227,229,1) 37%, rgba(206,203,255,1) 55%);
  }*/
  .height-5{
      height: 250px;
  }
  
  /* menu */
  
  /* card */
  
    .card-menu:hover{
      transform: scale(1.1);
      transition: transform 0.3s;
    }
   
    
  .card-menu{
      background-color: #0707077a;
  }
  .breadcrumb{
      background-color: #0c090460;
  }
  .background-image-container {
      position: relative;
      display: inline-block;
    }
    
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value (0.5) for the darkness level */
      z-index: 999;
    }
    .card-menu  img{
    width: 600px;
    max-width: 100%;
    box-shadow: 0 5px 15px 0px rgba(5, 226, 71, 0.5);
  }
  
  /*about*/
  #bg{
    background-attachment: fixed;
    background-position: center;
  }
  .about{
    width: 100;
    height: 100;
    justify-content: center;
    align-items: center;
    margin-top: 150px;
  }
  .about .content img{
    width: 600px;
    max-width: 100%;
    box-shadow: 0 5px 15px 0px rgba(226, 138, 5, 0.5);
  }
  
  .about .content img:hover{
    width: 630px;
    max-width: 130%;
  }
  .text{
    width: 550px;
    max-width: 100%;
  }
  
  .content{
    width: 1280px;
    max-width: 95%;
    align-items: center;
    justify-content: space-around;
  }
  .text h1 {
    color: #f76e13;
    font-size: 50px;
    margin-bottom: 40px;
    margin-top: 40px;
  }
   .text p{
    font-size: 18px;
    margin-bottom: 70px;
      color: #0f0f0f;
  }
  
  /* contact us */
  h2{
      color: #0c6611;
      font-size: xx-large;
  }
  h3{
      color: #0c6611;
  }
  h4{
      color: #0c6611;
  }
  
  ::-webkit-scrollbar {
      width: 5px;
      height: 7px;
  }
  
  /* Track (background of the scrollbar) */
  ::-webkit-scrollbar-track {
      background:transparent; /* Change the background color */
  }
  
  /* Scrollbar thumb (the draggable part) */
  ::-webkit-scrollbar-thumb {
      background: #eb6003; /* Change the color of the thumb */
      border-radius: 6px; /* Add rounded corners */
  }
  
  /* On hover, the thumb will have a different color */
  ::-webkit-scrollbar-thumb:hover {
      background: #555;
  }
  
  .form{
      box-shadow: 0 5px 15px 0px rgba(5, 226, 71, 0.5);
  }
  
      .reviews .content img:hover{
          width: 630px;
          max-width: 130%;
      }
      .reviews{
          box-shadow: 0 5px 15px 0px rgba(5, 226, 71, 0.5);
      }
      .index{
          box-shadow: 0 5px 15px 0px rgba(5, 226, 71, 0.5);
      }
    

.slider-container {
    display: flex;
    overflow: hidden;
    width: 100%;
    height: 100vh;
}

.slide {
    flex: 0 0 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.slide img {
    max-width: 100%;
    max-height: 70%;
}

.text-container {
    background-color:black;
    padding: 20px;
    border: 0px solid #ccc;
    border-radius: 0px;
}

.slider-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 10px;
    background-color: #333;
    color:rgb(255, 72, 0);
    border: none;
    cursor: pointer;
}

.prev-button {
    left: 0;
}

.next-button {
    right: 0;
}
img {
    float: left;
    margin: 0px 0px 15px 20px;
  }
  .text-img {
  float: right;
  border: 1px dotted black;
  margin: 0px 0px 15px 20px;
}
/* Additional styling for text and buttons */
</style>
<body> 
    <header>
        <div  style="background-image: url(https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80); background-attachment: fixed; height: 600px; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
          <div class="overlay"></div>
          <!-- navbar -->
          <nav class="nav navbar fixed-top navbar-expand-lg bg-light-transparent" style="background-color: rgba(0, 0, 0, 0.781);">
            <div class="container">
              <a class="navbar-brand" href="index.html">
              <img src="https://bigsquare.co.ke/wp-content/uploads/2020/04/logo1.svg" height="50" alt="Your choise logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active footer-link-item">
                <a class="nav-link"style="color:rgb(255, 72, 0)" href="index.html">HOME</a>
              </li>
              <li class="nav-item footer-link-item">
                <a class="nav-link"style="color:rgb(255, 72, 0)" href="menu.html">MENU</a>
              </li>
              <li class="nav-item footer-link-item">
                <a class="nav-link"style="color:rgb(255, 72, 0)" href="reservation.php">RESERVATION</a>
              </li>
              <li class="nav-item footer-link-item">
                <a class="nav-link"style="color:rgb(255, 72, 0)" href="contact.html">CONTACT US</a>
              </li>
              <li class="nav-item footer-link-item">
                <a class="nav-link"style="color:rgb(255, 72, 0)" href="about.html">ABOUT US</a>
                  </li>
                  
                </ul>
              </div> <!--collapse end-->
            </div> <!--container end-->
          </nav> <!--navbar end-->
          
          <div class="container flex-column d-flex justify-content-center"style=" height: 600px;">
            <div class="text-center py-4" >
              <h1 class="text-white py-3" >
                <span class="font-weight-bold" style="font-size:1.5cm; color:rgb(255, 72, 0)">RESERVATION</span>
              </h1>
              <h2 class="font-weight-normal font-italic" style="font-size:1.5cm; color:rgb(255, 72, 0)"  >
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
             
            
            <div class="slider-container">
        <div class="slide">
            <div class="text-container">
                
            </div>
            <img src="https://bigsquare.co.ke/wp-content/uploads/2020/04/adult-party-min.png" alt="Slide 1">
            <h1 style="color:white; font-size:1.6cm; font-family:Copperplate, Papyrus, fantasy;">ADULTS PARTY PACKAGE I <p style="font-size:0.5cm;color:rgb(241, 81, 7)">*ksh. 2500 per person for a minimum of 8 
            <br>people</p><p style="font-size:0.4cm; font-weight:lighter">Food<br><br>
            Big wings,samosas,spring roll starter combo.<br>
            A platter each or large pizza+ a salad of your choice<br><br>
            Desert<br> 
          Choice of cake or sundae<br><br>
          Drink<br>
          Glass of wine or mimmosa,beer,soda or bottle of water.
          </p></h1>
                
        </div>
        <div class="slide">
            <div class="text-container">
                
            </div>
            <img src="https://bigsquare.co.ke/wp-content/uploads/2020/04/adult-party-min.png" alt="Slide 2">
            <h1 style="color:white; font-size:1.6cm; font-family:Copperplate, Papyrus, fantasy;">ADULTS PARTY PACKAGE II <p style="font-size:0.5cm;color:rgb(241, 81, 7)">*ksh. 1900 per person for a minimum of 8 
            <br>people</p><p style="font-size:0.4cm; font-weight:lighter">Food<br><br>
            Big wings,samosas,spring roll starter combo.<br>
            A platter each or large pizza+ a salad of your choice<br><br>
            Desert<br> 
          Choice of cake or sundae<br><br>
          Drink<br>
         One fruit juice & 500ml water bottle per person.
          </p></h1>
                <p></p>
        </div>
        <div class="slide">
            <div class="text-container">
                
            </div>
            <img src="https://bigsquare.co.ke/wp-content/uploads/2020/04/adult-party-min.png" alt="Slide 2">
            <h1 style="color:white; font-size:1.6cm; font-family:Copperplate, Papyrus, fantasy;">ADULTS PARTY PACKAGE III <p style="font-size:0.5cm;color:rgb(241, 81, 7)">*ksh. 1200 per person for a minimum of 8 
            <br>people</p><p style="font-size:0.4cm; font-weight:lighter">Food<br><br>
            Half grilled chicken & chips,or any burger of your choice(no extras) with chips,<br>
           or a single large pizza of your choice(no extras)<br><br>
            Desert<br> 
          sundae of your choice<br><br>
          Drink<br>
          500ml water bottle per person.
          </p></h1>
                <p></p>
        </div>
        <!-- Add more slides with content and images as needed -->
    

    <button class="slider-button prev-button" onclick="prevSlide()">Previous</button>
    <button class="slider-button next-button" onclick="nextSlide()">Next</button>
    </div>
            </div>
    <br>
    <div class="text-img">
     <h1 style="color:white; font-size:1.6cm ;font-family:Copperplate, Papyrus, fantasy;"> <img src="https://nnmedia.nation.africa/uploads/2018/07/Family-eating.jpg" height="540" width="600">Kids birthday<p style="font-size:0.5cm;color:rgb(241, 81, 7)">*Kshs. 1,200 per child – minimum of 8 kids
    </p><p style="font-size:0.4cm; font-weight:lighter">1 serves 4 people regular pizza<br>
1x fruit juice and 1x water<br>
1x delectable dessert of choice<br>
(Dessert Pizza by prior arrangement and 1x per 4 people)<br>
<p style="font-size:0.5cm;color:rgb(241, 81, 7)">*Kshs. 1,000 per child – minimum of 8 kids</p>
<p style="font-size:0.4cm; font-weight:lighter">1x kid’s burger and fries,<br>
1x fruit juice and 1x water,<br>
1x delectable dessert of choice<br>
(Dessert Pizza by prior arrangement and 1x per 4 people)<br>
<p style="font-size:0.5cm;color:rgb(241, 81, 7)">*Kshs. 1,000 per child – minimum of 8 kids</p>
<p style="font-size:0.4cm; font-weight:lighter">2x fried chicken and chips<br>
1x fruit juice and 1x water<br>
1x delectable dessert of choice<br>
(Dessert Pizza by prior arrangement and 1x per 4 people)</p>
  </h1><br><br>
    </div>

  </div>
          </div>


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
            <label style="color: beige;" for="packages">Packages</label>
            <select class="form-control border-dark" name="packages" required>
                <option>adults package 1</option>
                <option>adults package 2</option>
                <option>adults package 3</option>
                <option>kids birthday package</option>
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
              <img src="https://bigsquare.co.ke/wp-content/uploads/2020/04/logo1.svg"height="150" alt="Your choise logo">
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
            <p style="color:#000002"id="current-year"></p> 
        </footer>
    </div> <!--footer end-->
    <script>
         let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.display = 'flex';
                } else {
                    slide.style.display = 'none';
                }
            });
        }

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = slides.length - 1;
            }
            showSlide(currentIndex);
        }

        function nextSlide() {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            showSlide(currentIndex);
        }

        showSlide(currentIndex);
    </script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="scripts.js"></script>
</body>
</html>