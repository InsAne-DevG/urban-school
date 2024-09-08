<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #ddd 1px solid;
        }
        header h1 {
            text-align: center;
            margin: 0;
            font-size: 2em;
        }
        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }
        .hero p {
            font-size: 1.5em;
        }
        .btn {
            background: #ff5722;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .features, .testimonials, .about, .contact {
            padding: 50px 0;
        }
        .features h2, .testimonials h2, .about h2, .contact h2 {
            text-align: center;
            font-size: 2em;
        }
        .feature, .testimonial {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }
        .contact form {
            max-width: 600px;
            margin: auto;
        }
        .contact form input, .contact form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            border-top: #ddd 1px solid;
        }
        footer a {
            color: #ff5722;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>UrbanEducate Connect</h1>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Transform Your Urban School with UrbanEducate Connect</h1>
            <p>Empowering educators, streamlining operations, and enhancing student success.</p>
            <a href="#contact" class="btn">Get Started Today</a>
        </div>
    </section>

    <section class="features container">
        <h2>Why Choose UrbanEducate Connect?</h2>
        <div class="feature">
            <h3>Comprehensive Dashboard</h3>
            <p>Gain a 360-degree view of your school’s operations in one intuitive dashboard.</p>
        </div>
        <div class="feature">
            <h3>Real-Time Data Insights</h3>
            <p>Access real-time analytics to make informed decisions and drive performance.</p>
        </div>
        <div class="feature">
            <h3>Streamlined Administrative Tasks</h3>
            <p>Automate administrative tasks like attendance, grading, and scheduling.</p>
        </div>
        <div class="feature">
            <h3>Parent & Student Portals</h3>
            <p>Keep parents and students engaged with personalized portals for communication and updates.</p>
        </div>
        <div class="feature">
            <h3>Customizable Solutions</h3>
            <p>Tailor our software to meet the unique needs of your urban school.</p>
        </div>
        <div class="text-center">
            <a href="#features" class="btn">Explore Features</a>
        </div>
    </section>

    <section class="testimonials container">
        <h2>What Our Users Are Saying</h2>
        <div class="testimonial">
            <p>"UrbanEducate Connect has transformed how we manage our school operations. It's intuitive and powerful." – Principal, City High School</p>
        </div>
        <div class="testimonial">
            <p>"The real-time data insights have been a game-changer for our student performance tracking." – Teacher, Metro Academy</p>
        </div>
        <div class="testimonial">
            <p>"The parent portal feature has improved communication and engagement with our school community." – School Administrator, Urban Middle School</p>
        </div>
    </section>

    <section class="about container">
        <h2>About UrbanEducate Connect</h2>
        <p>At UrbanEducate Connect, we are dedicated to providing innovative solutions tailored for urban schools. Our mission is to empower educators and streamline school management through cutting-edge technology and user-friendly design.</p>
        <div class="text-center">
            <a href="#about" class="btn">Learn More</a>
        </div>
    </section>

    <section class="contact container" id="contact">
        <h2>Get in Touch</h2>
        <form>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone">
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
        <p>Phone: (123) 456-7890 | Email: contact@urbaneducateconnect.com</p>
        <p>Address: 123 Urban St, Suite 456, City, State, ZIP</p>
    </section>

    <footer>
        <p>&copy; 2024 UrbanEducate Connect. All rights reserved.</p>
        <p>
            <a href="#">Home</a> | 
            <a href="#">Features</a> | 
            <a href="#">Pricing</a> | 
            <a href="#">About</a> | 
            <a href="#">Contact</a> | 
            <a href="#">Privacy Policy</a> | 
            <a href="#">Terms of Service</a>
        </p>
    </footer>
</body>
</html>
