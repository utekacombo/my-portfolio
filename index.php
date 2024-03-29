<!DOCTYPE html>
<html>
<head>
  <title>portifolio</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
   .slideshow-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Slides */
    .mySlides {
      display: none;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 18px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* The dots */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }
    
    ol{
      list-style: none;
      font-family: serif;
      font-size: 16px;
    }

    


    .content {
      margin-left: 300px;
      padding: 20px;
    }
    body{
     margin-left: 11%;
    }
     p {
    font-family: serif;
    font-size: 16px;
    font-style: ;
  }

  ul {
    font-family: serif;
    font-size: 16px;
  }
    footer {
      background-color: silver;
      padding: 10px;
      text-align: center;
    }
    .image-container {
      text-align: center;

    }
    h1{
       text-align: center;
    }
    header {
  background-color: #f1f1f1;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: inline-block;
  padding: 10px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

nav ul li a:hover {
  background-color: #333;
  color: #fff;
}

nav ul li:not(:last-child) {
  margin-right: 20px;
}
  </style>
<script>
    $(document).ready(function(){
      $('.slideshow').slick({ dots: true });
    });
  </script>
</head>
<body>
<nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="skills.php">Skills</a></li>
      </ul>
    </nav>

<section>
    <h1>Uteka Tendelu Combo</h1>
   <div class="image-container">
     <img src="uteka.jpg" style="height:300px; width:250px" alt="this is the picture">
  </div>
  <div class="main-container">
<head>
  <title>Dynamic Greeting</title>
  <script>
    // Get the current time
    var currentTime = new Date();
    var currentHour = currentTime.getHours();

    // Define the greeting based on the time of the day
    var greeting;
    if (currentHour < 12) {
      greeting = "Good morning";
    } else if (currentHour < 18) {
      greeting = "Good afternoon";
    } else {
      greeting = "Good evening";
    }

    // Display the greeting
    window.onload = function() {
      document.getElementById("greeting").innerHTML = greeting;
    };
  </script>
</head>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uteka";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
  <h1 id="greeting"></h1>

    <div class="section">
        <section id="about">
            <br>
            <h3>About Me</h3>

                    <?php
            // SQL query to retrieve data from the database
            $sql = "SELECT * FROM home";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "" . $row["aboutme"]. "<br>";
                }
            } else {
                echo "0 results";
            }

    ?>
            <h3>Skills</h3>

           
    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["skills"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>

        </section>
    </div>

  <h2> Projects</h2>

<fieldset>
  <center>
    <div class="web-slideshow-container">
      <div class="web-slide">
        <img src="wedding.png" style="height:300px; width:500px" alt="Slide 1">
      </div>
      <div class="web-slide">
        <img src="business.jpg" style="height:300px; width:500px" alt="Slide 2">
      </div>
      <div class="web-slide">
        <img src="flyer.jpg" style="height:300px; width:500px" alt="Slide 3">
      </div>

      <!-- Web slideshow navigation dots -->
      <div style="text-align:center">
        <span class="web-dot"></span>
        <span class="web-dot"></span>
        <span class="web-dot"></span>
      </div>
    </div>
    <a href="projects.html">View Site</a>
  </center>
</fieldset>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Web Slideshow
  var webSlideIndex = 0;
  showWebSlides();

  function showWebSlides() {
    var i;
    var webSlides = document.getElementsByClassName("web-slide");
    var webDots = document.getElementsByClassName("web-dot");

    for (i = 0; i < webSlides.length; i++) {
      webSlides[i].style.display = "none";
    }

    webSlideIndex++;

    if (webSlideIndex > webSlides.length) {
      webSlideIndex = 1;
    }

    for (i = 0; i < webDots.length; i++) {
      webDots[i].className = webDots[i].className.replace(" active", "");
    }

    webSlides[webSlideIndex - 1].style.display = "block";
    webDots[webSlideIndex - 1].className += " active";

    setTimeout(showWebSlides, 4000); // Change slide every 4 seconds
  }

  
</script>
<h2>contact us</h2>
<p>For a better communication please send us your questions and enquries and we will get back to you using the email you provide below</p>
<form id="contactForm" onsubmit="validateForm(event)">
  <label for="name">Name:</label> <br>
  <input type="text" id="name" value="fullname"required>
  <br>

  <label for="email">Email:</label> <br>
  <input type="email" id="email" value="email" required>
  <br>

  <label for="message">Message:</label> <br>
  <textarea id="message" value="your message"required></textarea>
   <br>

  <button type="submit">Submit</button>
</form>

<script>
  function validateForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get form inputs
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var messageInput = document.getElementById("message");

    // Check if inputs are valid
    if (nameInput.checkValidity() && emailInput.checkValidity() && messageInput.checkValidity()) {
      // Perform form submission or further processing here
      alert("Form submitted successfully!");
      // Reset form
      document.getElementById("contactForm").reset();
    } else {
      // Display validation error messages
      if (!nameInput.checkValidity()) {
        alert("Please enter a valid name.");
      }

      if (!emailInput.checkValidity()) {
        alert("Please enter a valid email address.");
      }

      if (!messageInput.checkValidity()) {
        alert("Please enter a message.");
      }
    }
  }
</script>


</div>
   <footer class="footer">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class = "column">
  <h3>social media</h3>
<ol class="social-media-list">
  <li><a href="https://www.facebook.com/angella.angence"><i class="fab fa-facebook"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ol>
 </div>
 <div class="column">
  <h3>support</h3>
 <ol class="support-list">
  <li><a href="#">FAQ</a></li>
  <li><a href="contact.html">Contact Us</a></li>
  <li><a href="ammhango@gmail.com">email us</a></li>
  </ol>
</div>

  </footer>
</body>
</html>
                      