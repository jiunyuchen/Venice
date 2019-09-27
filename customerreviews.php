<!DOCTYPE html>
<html lang="en">
<title>Italia Walking Tours of Venice</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif;
  }

  body,
  html {
    height: 100%;
    color: rgb(0, 0, 0);
    line-height: 1.8;
  }

  /* Create a Parallax Effect */

  .bgimg-1,
  .bgimg-2,
  .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* Banner image */

  .bgimg-1 {
    background-image: url('images/maxresdefault (1).jpg');
    min-height: 100%;
  }

  .w3-wide {
    letter-spacing: 10px;
  }

  .w3-hover-opacity {
    cursor: pointer;
  }

  /* Turn off parallax scrolling for tablets and phones */

  @media only screen and (max-device-width: 1024px) {
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
      background-attachment: scroll;
    }
  }
</style>

<body>
  <?php
  // define variables and set to empty values
  $name = $message = $date= $email="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if($_POST["name"]!=""){
          $name = test_input($_POST["name"]);
      }
      if($_POST["message"]!=""){
          $message = test_input($_POST["message"]);
      }
      if($_POST["email"]==""){
          $email = test_input($_POST["email"]);
      }
      $date = new DateTime('now');
  }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>


    

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
      <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Italia
          <span class="w3-hide-small">Walking Tours of Venice</span>
        </span>
      </div>
    </div>

    <!-- Navigation -->
    <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
    <span class="sr-only">Click here</span><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="venicetours.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Venice Tours</a>
    <a href="gallery.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Gallery</a>
    <a href="customerreviews.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Customer Reviews</a>
    <a href="companyinformation.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Additional information</a> 
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium"style="background-color:burlywood">
    <a href="venicetours.html"class="w3-bar-item w3-button" onclick="toggleFunction()">Venice Tours</a>
    <a href="gallery.html"class="w3-bar-item w3-button" onclick="toggleFunction()">Gallery</a>
    <a href="customerreviews.php"class="w3-bar-item w3-button" onclick="toggleFunction()">Customer Reviews</a>
    <a href="companyinformation.html" class="w3-bar-item w3-button" onclick="toggleFunction()">Additional information</a>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-gray" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">TOUR DATES</h2>
        <p class="w3-opacity w3-center">
          <i>Remember to book your tickets!</i>
        </p>
        <br>

        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
          <div class="w3-third w3-margin-bottom">
            <img src="https://www.earthtrekkers.com/wp-content/uploads/2016/07/Julie-and-Tyler-Venice.jpg" alt="New York" style="width:100%"
              class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p>
                <b>Ronald</b>
              </p>
              <p class="w3-opacity">Fri 27 Nov 2016</p>
              <p>The tour was really well arranged and showed us both history and sights that we would never have found. The
                trip down the grand canal was fantastic with the sun setting towards the end of the journey. Definitely money
                well spent.We could do it all again tomorrow.</p>
            </div>
          </div>

          <div class="w3-third w3-margin-bottom">
            <img src="https://www.wanderluststorytellers.com/wp-content/uploads/2015/07/venezia-italy-wanderlust-storytellers-9.jpg"
              alt="Paris" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p>
                <b>Sarah</b>
              </p>
              <p class="w3-opacity">Sat 28 Nov 2016</p>
              <p>Great local (english-speaking) tour guides who really know the city's history and architecture. Very informative
                and enjoyable. St. Marks Basilica tour was very short, as only the central cathedral was visited. If you
                expect a more detailed tour of St. Mark's, I suggest you find a different tour. However, as a overall tour
                of Venice, especially for 1st time visitors, Venice in One Day tour, both walking and grand canal boat tour,
                is a great value and truly helps you understand the history and special culture of Venice.</p>
            </div>
          </div>
          <div class="w3-third w3-margin-bottom">
            <img src="https://fthmb.tqn.com/nFYSBeG0NsCwJFTVEBd0hrCq6KY=/5669x3119/filters:fill(auto,1)/-italy--venice--couple-riding-in-godola--woman-leaning-against-man--200469794-001-59825c9b519de20011cf9938.jpg"
              alt="San Francisco" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p>
                <b>Lorna</b>
              </p>
              <p class="w3-opacity">Sun 29 Nov 2016</p>
              <p>We decided on this company after on a friend’s recommendation. We loved every minute if our Venice holiday
                and the walking tour guide was excellent. We would suggest taking water even in October and remember to take
                sensible walking shoes. The trip on the canal was breathtaking. Lots of photo opportunities. The breaks allowed
                us to peruse the shops and sample the amazing food on offer.</p>
            </div>
          </div>
          <div class="w3-third w3-margin-bottom">
            <?php if($message != "" && $name !=  "") {
            ?>
            <img src="https://images.walks.org/italy/featured/venice-boat-tour-featured.jpg"
              alt="Paris" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p>
                <b><?php echo $name;?></b>
              </p>
              <p class="w3-opacity"><?php echo date_format($date, 'F Y');?></p>
              <p><?php echo $message;?></p>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>


    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
      <h2 class="w3-wide w3-center">CONTACT</h2>
      <p class="w3-opacity w3-center">
        <i>Fan? Drop a note!</i>
      </p>
      <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
          <i class="fa fa-map-marker" style="width:30px"></i> Giudecca 19, 308886 Venice, Italy
          <br>
          <i class="fa fa-phone" style="width:30px"></i> Tel: +39 041 557 774445566
          <br>
          <i class="fa fa-phone" style="width:30px"></i> fax: +39 041 557 393045766
          <br>
          <i class="fa fa-envelope" style="width:30px"> </i> info@Ialia-walks.st-andrews.it
          <br>
        </div>
        <div class="w3-col m6">

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
              <label for="name">Name</label>
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="name" id="name">
              </div>
              <div class="w3-half">
              <label for="email">Email</label>
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="email" id="email">
              </div>

            </div>
            <label for="message">Message</label>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="message" maxlength="250" minlength="10" id="message">

            <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
          </form>
        </div>
      </div>
    </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
<div class="w3-xlarge w3-section">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</div>
<p>Copyright © Italia Walking Tours Ltd. (for itself and on behalf of its corporate group) 2008-2016. <br>
  All rights reserved. All copyright and other intellectual property rights in all logos, designs, text, images and other materials on this website are owned by Italia Tours Ltd. <br>and/or its group companies or appear with permission of the relevant owner (including ITAB).</p>
</footer>

<script>
  // Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>

</body>

</html>
