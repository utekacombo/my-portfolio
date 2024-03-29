<!DOCTYPE html>
<html>
<head>
  <title>Skills</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
      color: #333;
    }

    .skills-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .skill {
      margin-bottom: 20px;
    }

    .skill-title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 5px;
    }

    .skill-description {
      color: #666;
      margin-bottom: 10px;
    }

    .progress-bar {
      width: 100%;
      height: 20px;
      background-color: #ddd;
      border-radius: 10px;
      overflow: hidden;
    }

    .progress-bar-fill {
      height: 100%;
      background-color: #4caf50;
      width: 0;
      transition: width 1s ease-in-out;
    }

    .skill:hover .progress-bar-fill {
      transition: width 0.5s ease-in-out;
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
  <script>
    window.addEventListener('load', () => {
      const skills = document.querySelectorAll('.skill');

      skills.forEach(skill => {
        const progressBarFill = skill.querySelector('.progress-bar-fill');
        const progress = progressBarFill.getAttribute('data-progress');

        progressBarFill.style.width = `${progress}%`;
      });
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
  <h1>Skills</h1>

  <div class="skills-container">
    <div class="skill">
      <div class="skill-title">HTML</div>
      <div class="skill-description">Proficient in creating structured and semantic web pages.</div>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="90"></div>
      </div>
    </div>

    <div class="skill">
      <div class="skill-title">CSS</div>
      <div class="skill-description">Skilled in styling and layout techniques using CSS.</div>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="85"></div>
      </div>
    </div>

    <div class="skill">
      <div class="skill-title">JavaScript</div>
      <div class="skill-description">Proficient in client-side scripting and DOM manipulation.</div>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="80"></div>
      </div>
    </div>

    <div class="skill">
      <div class="skill-title">React</div>
      <div class="skill-description">Experienced in building interactive user interfaces with React.</div>
      <div class="progress-bar">
        <div class="progress-bar-fill" data-progress="75"></div>
      </div>
    </div>
  </div>
</body>
</html>
