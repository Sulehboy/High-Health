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
    
    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <h3>Project Title 1</h3>
            <p>Description of project 1. Explain what technologies were used and what the project accomplishes.</p>
        </div>
        <div class="project">
            <h3>Project Title 2</h3>
            <p>Description of project 2. Explain what technologies were used and what the project accomplishes.</p>
        </div>
        <!-- Add more projects as needed -->
    </section>
    
    <section id="contact">
        <h2>Contact</h2>
        <p>You can reach me via email or phone, or use the contact form below to send me a message.</p>
        <ul>
            <li>Email: <a href="mailto:grace@example.com">grace@example.com</a></li>
            <li>Phone: +123 456 7890</li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/graceayuma" target="_blank">linkedin.com/in/graceayuma</a></li>
            <!-- Add more contact details as needed -->
        </ul>
        <form>
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
