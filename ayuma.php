<?php
if (isset($_POST['send'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set up email parameters for sending message
    $to = "users"; // Your email address
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Your message has been sent successfully. Thank you!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }

    // Set up email parameters for sending auto-response
    $to = $email;
    $subject = "Auto-response: Thank you for your message!";
    $body = "Dear $name,\n\nThank you for contacting me. I'll get back to you as soon as possible.\n\nBest regards,\nGrace Ayuma";

    // Send auto-response email
    mail($to, $subject, $body);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace Ayuma's Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="about">
        <h2>About Me</h2>
        <p>Hello, my name is Grace Ayuma. I am a Full Stack Software Developer with a passion for creating dynamic and responsive web applications. I have skills in programming, web development, database design, and coding experience.</p>
    </section>
    
    <section id="skills">
        <h2>Skills</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>Java</li>
            <li>React</li>
            <li>Node.js</li>
            <li>Database Design</li>
            <!-- Add more skills as needed -->
        </ul>
    </section>
    <section>
        <h2>EXPERIENCES</h2>
        I have 3+ years of experience in the field of tech.
    </section>
    
    <section id="projects">
    <h2>Projects</h2>
    <div class="project">
        <h3>High Health</h3>
        <p>High Health is a comprehensive web application designed to manage and track health metrics for users. As the lead developer, I was responsible for both frontend and backend development, ensuring a seamless user experience and robust data management.</p>
        <ul>
            <li><strong>Technologies Used:</strong> React, Node.js, Express, MongoDB</li>
            <li><strong>Features:</strong> User authentication, health tracking, data visualization, responsive design</li>
        </ul>
        <a href="https://github.com/Grace-Ayuma/Ayuma-Grace/dashboard" target="_blank">View on GitHub</a>
        <img src="images/Spalsh screen.php">
    </div>
    <!-- Add more projects similarly -->
</section>

        </div>
        <!-- Add more projects as needed -->
    </section>
    
    <section id="contact">
        <form>
            <section id="contact">
        <h2>Contact</h2>
        <p>You can reach me via email or phone, or use the contact form below to send me a message.</p>
        <ul>
            <li>Email: <a href="mygmail account:gracelifelegacy@gmail.com">gracelifelegacy@gmail.com</a></li>
            <li>Phone:</li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/grace-ayuma-ochango-3659852b8" target="_blank">linkedin.com/in/graceayuma</a></li>
            <!-- Add more contact details as needed -->
        </ul>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
    
    <script src="script.js"></script>
</body>
</html>
<style type="text/css">
    /* Basic reset and styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1em 0;
    text-align: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 1em;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

section {
    padding: 2em;
}

h2 {
    border-bottom: 2px solid #333;
    padding-bottom: 0.5em;
    margin-bottom: 1em;
}

.project {
    border: 1px solid #ddd;
    margin: 1em 0;
    padding: 1em;
    border-radius: 8px;
}

form {
    display: flex;
    flex-direction: column;
}

form label {
    margin-top: 1em;
}

form input, form textarea {
    margin-top: 0.5em;
    padding: 0.5em;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button {
    background-color: #333;
    color: #fff;
    margin-top: 1em;
    padding: 1em;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form button:hover {
    background-color: #555;
}

</style>
<script type="text/javascript">
    // Smooth scrolling for navigation links
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

</script>
