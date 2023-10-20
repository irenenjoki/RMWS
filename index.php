<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel = "icon" type = "image/png" href = "https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
  
</head>
<body>
     
 <!-- Preloader -->
 <div id="preloader" data-preload>
  <div id="#loader">
  </div>
  
  <header>
    
  </div>
    <div  style="background-image: url(https://media.istockphoto.com/id/1215178290/photo/stir-fry-noodles-with-vegetables-and-beef-in-black-bowl-slate-background-close-up.jpg?s=612x612&w=0&k=20&c=_svdOGLzJ52q1Mf_k6v5u5Xc5iRkH0DIYrwmrfKTaJ4=); background-attachment: fixed; height: 600px; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="overlay"></div>
      <!-- navbar -->
      <nav class="nav navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark-transparent">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg" height="50" alt="Your choise logo">
          </a>
          <!--class="navbar-toggler": This attribute assigns the class "navbar-toggler" to the <button>. 
            data-toggle="collapse": This data attribute is specific to Bootstrap and indicates that this 
            button will be used to toggle the visibility of a collapsible element (typically a navigation menu). 
            When clicked, it will collapse or expand the targeted element.
            data-target="#navbarTogglerDemo02": This data attribute specifies the target element that will be 
          collapsed or expanded when the button is clicked. In this case, it targets an element with the ID
           "navbarTogglerDemo02."
          aria-controls="navbarTogglerDemo02": This is an accessibility attribute that indicates which element is 
        controlled by this button. It helps screen readers understand the relationship between the button and the 
        collapsible content.
        aria-expanded="false": Another accessibility attribute that specifies the initial state of the 
        collapsible element. In this case, it starts as "false," indicating that the content is initially collapsed.
        aria-label="Toggle navigation": An accessibility attribute that provides a label for the button to 
        describe its purpose. It lets screen readers announce that this button is used to toggle navigation.
        <span class="navbar-toggler-icon"></span>: This <span> element is often used as a child of the button 
          to provide an icon for the toggle button. The "navbar-toggler-icon" class is a Bootstrap-specific class that applies the styling for the toggle icon.
            This class is often used in Bootstrap to style the button as a navigation toggle button.-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" 
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item footer-link-item">
                <a class="nav-link text-dark" href="signup1.php">LOGIN </a>
              </li>
              <li class="nav-item active footer-link-item">
                <a class="nav-link text-dark" href="index.php">HOME</a>
              </li>
              <li class="nav-item footer-link-item">
                <a class="nav-link text-dark" href="menu.html">MENU</a>
              </li>
              <li class="nav-item footer-link-item">
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
          <h1 style="font-size:1.4cm; color:rgb(8, 201, 153)"class=" py-3">
            Welcome to <span class="font-weight-bold" >YOUR CHOICE</span> restaurant
          </h1>
          <h3 class="font-weight-normal  font-italic" style="font-size:1.4cm; color:rgb(8, 201, 153)">
            Choose Delicious Food With Sweet Memo!
          </h3>
          <div class>
            <a href="reservation.html" class="btn btn-dark">RESERVATION</a>
          </div>
        </div>
        <a href="#" class="gotoupbtn"><i class="far fa-arrow-alt-circle-up"></i></a>
      </div>
    </div>
  </header>
  <br><br><br>
  <section>
    <div class="container">
      <div class="index">
      <div class="row shadow py-3 my-3">
        <div class="col-12 text-center">
          <h3 class>About us</h3>
          <p>We're the best in our field, and it's all thanks to the incredible relationships we've ed with our 
            clients. Unlike our competitors, we're invested in developing a personal connection with each and every 
            one of our customers, by providing quality service and being available to you 24/7. Get in touch with us
             when you're ready to learn more: we can't wait to meet you!</p>
          <a href="about.html" class="btn btn-dark">Learn more</a>
        </div>
      </div> <!--row end-->
    </div> <!--container end-->
    <div class="container">
      
      <div class="row py-3 my-3 px-5">
        <div class="col-12  text-center">
          <h3>Our Menus</h3>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="card">
           
            <img src="https://thumbs.dreamstime.com/b/pasta-bolognese-linguine-mincemeat-tomatoes-italian-dinner-two-parmesan-cheese-dark-blue-tablecloth-chair-homeliness-169400490.jpg" class="card-img-top" height="auto" alt="Home Page Menu 1">
            <div class="card-body">
              <h4 class="card-title text-center">Bakers & Roasters</h4>
              <div class="text-justify">
                <h4>About</h4>
                <p>Brunch Restaurant,Serving breakfast, brunch, 
                  lunch,cakes, coffee, NZ wines, beers and cocktails.Head Chef  and his team prepare 
                  pure dishes full of flavour. Always seasonal and made with love.</p>
              </div>
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                View all details
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content shadow-bg">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="py-2">
                        <h6>CUISINES</h6>
                        <p>Italian, Cafe, European, Healthy, Contemporary</p>
                      </div>
                      <div class="py-2">
                        <h6>SPECIAL DIETS</h6>
                        <p>Vegetarian Friendly, Vegan Options, Gluten Free Options</p>
                      </div>
                      <div class="py-2">
                        <h6>MEALS</h6>
                        <p>Breakfast, Lunch, Brunch, Drinks</p>
                      </div>
                      <div class="py-2">
                        <h6>FEATURES</h6>
                        <p>Outdoor Seating, Seating, Street Parking, Highchairs Available, Serves Alcohol, 
                          Accepts Mastercard, Accepts Visa, Free Wifi, Accepts Credit Cards, Table Service, 
                          Gift Cards Available</p>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="menu.html"><button type="button" class="btn btn-primary">Learn more</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!--card end-->
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="card">
            <img src="https://media.istockphoto.com/photos/french-fries-and-chicken-burger-on-a-wooden-table-food-junk-food-and-picture-id1205589913?k=20&m=1205589913&s=170667a&w=0&h=gyHV4clLzufZHZBdlRyO5dqQqI1djR-tvCHP8gY7zjs=" class="card-img-top" height="auto" alt="Home Page Menu 1">
            <div class="card-body">
              <h4 class="card-title text-center">Palmyra Syrian</h4>
              <div class="text-justify">
                <h4>About</h4>
                <p>Palmyra, nicknamed city of thousand columns , is a Syrian archaeological site 
                  located in the government of Syria . We want to give you a taste of our culinary 
                  Syrian cusine with real authentic dishes made by our experienced Syrian cook Ibrahim Shamoun</p>
              </div>
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                View all details
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="py-2">
                        <h6>CUISINES</h6>
                        <p>Lebanese, Middle Eastern, Arabic, Chinese</p>
                      </div>
                      <div class="py-2">
                        <h6>SPECIAL DIETS</h6>
                        <p>Vegetarian Friendly, Vegan Options</p>
                      </div>
                      <div class="py-2">
                        <h6>MEALS</h6>
                        <p>Lunch, Dinner, Drinks</p>
                      </div>
                      <div class="py-2">
                        <h6>FEATURES</h6>
                        <p>Takeout, Reservations, Seating, Serves Alcohol, Free Wifi, Accepts Credit Cards, 
                          Table Service, Wine and Beer</p>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="menu.html"><button type="button" class="btn btn-primary">Learn more</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!--card end-->
        </div>
        <div class="col-lg-4 col-sm-8">
          <div class="card">
            <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2018/1/30/0/FNK_Berry-Dessert-Lasagna-H_s4x3.jpg.rend.hgtvcom.616.462.suffix/1517349652859.jpeg" class="card-img-top" height="auto" alt="Home Page Menu 1">
            <div class="card-body">
              <h4 class="card-title text-center">Deserts</h4>
              <div class="text-justify">
                <h4>About</h4>
                <p>PURE. HONEST. PASSION.<br>Enjoy our wide range of flavors,textures,and form of deserts offered by your restaurant of choice.
                  Welcome and experience sweetness. &#128522;
                </p>
              </div>
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                View all details
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="py-2">
                        <h6>CUISINES</h6>
                        <p>European</p>
                      </div>
                      <div class="py-2">
                        <h6>SPECIAL DIETS</h6>
                        <p>Vegetarian Friendly, Vegan Options, Gluten Free Options</p>
                      </div>
                      <div class="py-2">
                        <h6>MEALS</h6>
                        <p>Dinner</p>
                      </div>
                      <div class="py-2">
                        <h6>FEATURES</h6>
                        <p>Reservations, Seating, Street Parking, Wheelchair Accessible, Serves Alcohol, Full Bar, Free Wifi, Accepts Credit Cards, Table Service</p>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="menu.html"><button type="button" class="btn btn-primary">Learn more</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!--card end-->
        </div>
      </div>
      </div>
    </div>
  </section>
        <div class="col-12 p-3 text-center">
          <a href="menu.html" class="btn btn-dark">Learn more</a>
        </div>
      </div> <!--row end-->
      <div class="row shadow py-3 my-3 justify-content-center">
        <div class="col-12 p-3 text-center">
          <h3>Special</h3>
        </div>
        <div class="col-md-3 col-sm-9 text-center p-md-5 p-sm-2">
          <i class="far fa-gem icon-style"></i>
          <h6 class="p-2">Best Quality</h6>
          <p class="text-muted px-2">We guarantee your full satisfaction</p>
        </div>
        <div class="col-md-3 col-sm-9 text-center p-md-5 p-sm-2">
          <i class="far fa-clock icon-style"></i>
          <h6 class="p-2">24/7 Support</h6>
          <p class="text-muted px-2">Our phone support is always available to you</p>
        </div>
        <div class="col-md-3 col-sm-9 text-center p-md-5 p-sm-2">
          <i class="fas fa-medal icon-style"></i>
          <h6 class="p-2">Competitive Pricing</h6>
          <p class="text-muted px-2">The best value for money</p>
        </div>
        <div class="col-12 text-center">
          <a href="contact.html" class="btn btn-dark">Contact us</a>
        </div>
      </div> <!--row end-->
      <div class="reviews">
      <div class="row shadow py-3 my-3">
        <div class="col-12 p-3 text-center">
          <h3>Customer reviews</h3>
        </div>
        <div class="col-md-4 col-sm-12 p-md-5 p-sm-2">
          <div class="d-flex justify-content-center p-3">
            <div class="">
              <img src="https://static.bangkokpost.com/media/content/20200619/c1_1937552_200619122619.jpg" class="card-img-top circle-img" height="150px" width="150px" alt="awoman">
            </div>
          </div>
          <div class="text-center">
            <h4>Emma</h4>
            <p class="font-italic">"The food was fresh, properly prepared and a great value for the price. We highly recommend it. The breakfast buffet on Sunday was equally as good."</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 p-md-5 p-sm-2">
          <div class="d-flex justify-content-center p-3">
            <div class="">
              <img src="https://eadn-wc04-3705208.nxedge.io/cdn/wp-content/uploads/2014/06/Hype-Hair-Yaya-Dacosta2.jpg?x78992" class="card-img-top circle-img" height="150px" width="150px" alt="aman2">
            </div>
          </div>
          <div class="text-center">
            <h4>Olivia</h4>
            <p class="font-italic">"Hello. Please give our thanks to the Manager(s) and others for the wonderful room and bottle of sparkling wine for our Anniversary stay. We had an amazing time. The room was so comfortable, the food at Echo absolutely spectacular (we ate two meals there). Our waitress was just wonderful. Looking forward to staying with you in the future. What a great place!"</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 p-md-5 p-sm-2">
          <div class="d-flex justify-content-center p-3">
            <div class="">
              <img src="https://i.pinimg.com/originals/c1/6f/c0/c16fc0a5ab28e55cacf207d30c8eb873.jpg" class="card-img-top circle-img" height="150px" width="150px" alt="aman">
            </div>
          </div>
          <div class="text-center">
            <h4>Liam</h4>
            <p class="font-italic">"Had dinner with friends. Menu is perfect, something for everyone. Service was awesome and Jason was very accommodating. Will be back definitely!"</p>
          </div>
        </div>
      </div> 
    </div><!--row end-->
    </div> <!--Container end-->
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
        <span>Big Launge</span>
          </div>
          <div class="col-lg-4 col-md-12 text-center">
            <hr class="pt-5 mt-5">
          </div>
        </div> <!--row end--><br><br>
        <p>If you have any questions, do not hesitate to ask them.</p>
		<div class="row justify-content-center">
			<div class="col-md-9 col-sm-10 px-2 py-3">
			  <div class="d-flex justify-content-between py-3 my-2">
				<a href="https://twitter.com/irinnahrin" target="_blank"class="icon-link"><i class="fab fa-twitter"></i></a>
							<a href="https://api.whatsapp.com/send?phone=+254711791575" target="_blank" class="icon-link"><i class="fab fa-whatsapp"></i></a>
							<a href="https://www.instagram.com/irene.waweru.100/" target="_blank"class="icon-link"><i class="fab fa-instagram"></i></a>
							<a href="www.facebook.com" target="_blank"class="icon-link"><i class="fab fa-facebook"></i></a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="scripts.js"></script>
  


</body>
</html>