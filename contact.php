<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: silver;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 40px auto;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        #map {
            width: 100%;
            height: 400px;
        }

        #error-message {
            color: red;
        }
        /* Header Styles */

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
        function validateForm() {
            var name = document.forms["contactForm"]["name"].value;
            var email = document.forms["contactForm"]["email"].value;
            var message = document.forms["contactForm"]["message"].value;
            var errorMessage = document.getElementById("error-message");

            if (name === "" || email === "" || message === "") {
                errorMessage.textContent = "Please fill in all fields.";
                return false;
            }

            var emailRegex = /^\S+@\S+\.\S+$/;
            if (!email.match(emailRegex)) {
                errorMessage.textContent = "Please enter a valid email address.";
                return false;
            }
        }
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
    <header>
         <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="skills.php">Skills</a></li>
      </ul>
    </nav>
        <h1>Contact Us</h1>
    </header>
    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["mycontacts"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>


    <div class="container">
        <form name="contactForm" onsubmit="return validateForm()">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <input type="submit" value="Submit">
        </form>
        <p id="error-message"></p>
    </div>

    <div class="container">
        <h2>Visit Us</h2>
        <div id="map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2358192.201437496!2d34.90655144527795!3d-11.899371848659044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19646e3315d35053%3A0xfef3c7fd969af2d0!2sNorthern%20Region%2C%20Malawi!5e0!3m2!1sen!2sus!4v1622266374847!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
    <br>

    <div class="container">
        <h2>follow Us</h2>
        <ul>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://twitter.com/">Twitter</a></li>
        </ul>
    </div>
</body>

</html>
