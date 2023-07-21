<!DOCTYPE html>
<html>
<head>
  <title>My Projects</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="script.js"></script>
  <style>
   ./* Modal Styles */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

.close {
  color: #888;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Progress Bar Styles */
.progress-bar {
  width: 100%;
  height: 20px;
  background-color: #f1f1f1;
  border-radius: 4px;
  overflow: hidden;
}

.progress-bar-inner {
  height: 100%;
  background-color: #4caf50;
  width: 0%;
  transition: width 0.3s ease-in-out;
}

/* Additional Styles (Modify as needed) */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
}

header {
  margin-bottom: 20px;
}

h1 {
  margin-top: 0;
}

#filter {
  margin-bottom: 10px;
}

#project-list {
  display: flex;
  flex-wrap: wrap;
}

.project {
  width: 300px;
  margin: 10px;
  padding: 20px;
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.project img {
  width: 100%;
  height: auto;
  border-radius: 4px;
  margin-bottom: 10px;
}

.project h2 {
  margin-top: 0;
}

.project p {
  margin-bottom: 10px;
}

.project a {
  display: inline-block;
  padding: 6px 12px;
  background-color: #4caf50;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease-in-out;
}

.project a:hover {
  background-color: #45a049;
}
/* Header Styles */
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
</head>
<body>
  <center>
  <header>
     <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="skills.php">Skills</a></li>
      </ul>
    </nav>
    <h1>My Projects</h1>
    <br>
    <div id="filter">
      <label for="category">Filter by Category:</label>
      <select id="category" onchange="filterProjects()">
        <option value="all">All</option>
        <option value="web">Web</option>
        <option value="mobile">Mobile</option>
        <option value="desktop">Desktop</option>
      </select>
    </div>
    <br>
    <input type="text" id="search" onkeyup="searchProjects()" placeholder="Search projects...">
  </header>
  <br>

  
<div class="project" data-progress="75">
  <img src="flyer.jpg" alt="Project 1" height="350" width="300">
  <h2>flyer</h2>
  <p>Designed a flyer for uteka hard drives</p>
  <div class="progress-bar">
    <div class="progress-bar-inner"></div>
  </div>
  <a href="#" onclick="openModal(this.parentElement)">View Details</a>
</div>

<br>
<br>

    </div>
    
<div class="project" data-progress="75">
  <img src="wedding.png" alt="Project 2"  height="350" width="300">
  <h2>wedding card</h2>
  <p>Designed a wedding card within 3days</p>
  <div class="progress-bar">
    <div class="progress-bar-inner"></div>
  </div>
  <a href="#" onclick="openModal(this.parentElement)">View Details</a>
</div>

<br>

    </div>
    
<div class="project" data-progress="75">
  <img src="business.jpg" alt="Project 3">
  <h2>business card</h2>
  <p>Designed a business classic card </p>
  <div class="progress-bar">
    <div class="progress-bar-inner"></div>
  </div>
  <a href="#" onclick="openModal(this.parentElement)">View Details</a>
</div>
<br>


    <!-- Add more projects here -->
  </div>

  <div id="project-details-modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2 id="modal-title"></h2>
      <p id="modal-description"></p>
      <div id="progress-bar"></div>
    </div>
  </div>


  <script>
    function filterProjects() {
      var category = document.getElementById("category").value;
      var projects = document.getElementsByClassName("project");
      for (var i = 0; i < projects.length; i++) {
        if (category === "all" || projects[i].classList.contains(category)) {
          projects[i].style.display = "block";
        } else {
          projects[i].style.display = "none";
        }
      }
    }

    function searchProjects() {
      var search = document.getElementById("search").value.toLowerCase();
      var projects = document.getElementsByClassName("project");
      for (var i = 0; i < projects.length; i++) {
        var projectTitle = projects[i].getElementsByTagName("h2")[0].innerText.toLowerCase();
        if (projectTitle.includes(search)) {
          projects[i].style.display = "block";
        } else {
          projects[i].style.display = "none";
        }
      }
    }

  function openModal(project) {
  var modalTitle = document.getElementById("modal-title");
  var modalDescription = document.getElementById("modal-description");
  var progressBar = document.getElementById("progress-bar");

  modalTitle.innerText = project.getElementsByTagName("h2")[0].innerText;
  modalDescription.innerText = project.getElementsByTagName("p")[0].innerText;
  
  var progress = project.getAttribute("data-progress");
  progressBar.style.width = progress + "%";

  // Show modal
  document.getElementById("project-details-modal").style.display = "block";
}

function closeModal() {
  // Hide modal
  document.getElementById("project-details-modal").style.display = "none";
}




   
  </script>
</body>
</center>
</html>
