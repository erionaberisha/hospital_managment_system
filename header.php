<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grey Memorial Hospital</title>
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Zilla Slab', serif; /* Apply the font family to the entire body */
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.8) !important;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1030; /* Ensure it stays above other content */
        }
        
        .navbar-brand img {
            height: 40px;
            width: auto;
        }
        .about-section {
            background: none;
        }
        .footer ul {
            list-style: none;
            padding: 0;
        }
        .footer ul li {
            margin-bottom: 3px; /* Adjusts the space between lines */
        }
         /* Button styling */
         .btn-light-custom {
            background-color: #f8f9fa; /* Light background color */
            color: #000; /* Dark text color */
            border: 1px solid #ced4da; /* Light border color */
        }
        .btn-light-custom:hover {
            background-color: #e2e6ea; /* Slightly darker background on hover */
            color: #000; /* Keep text color dark */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" alt="Grey Memorial Hospital Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item mr-3"><a class="nav-link" href="patients.php">PATIENTS</a></li>
                <li class="nav-item mr-3"><a class="nav-link" href="doctors.php">DOCTORS</a></li>
                <li class="nav-item mr-3"><a class="nav-link" href="appointments.php">APPOINTMENT</a></li>
                <li class="nav-item mr-3"><a class="nav-link" href="login.php">LOGIN</a> </li>
                <li class="nav-item mr-3"> <a class="nav-link" href="signup.php">SIGN UP</a></li>
            </ul>
        </div>
    </nav><!--
    <div class="container mt-4">
        <h1 class="mb-4">Welcome to Grey Memorial Hospital</h1>
        <h2 class="mb-4">About Grey Sloan Memorial Hospital</h2>
        <div class="about-section" id="aboutSection">
            <p>Grey Sloan Memorial Hospital is a renowned medical institution dedicated to providing exceptional healthcare services and advancing medical research. Located in Seattle, Washington, our hospital has a long-standing history of excellence in patient care, education, and innovation.</p>
            
            <h3>Our Mission</h3>
            <ul>
                <li>Provide compassionate and personalized care to every patient.</li>
                <li>Foster a culture of collaboration, learning, and innovation among our healthcare professionals.</li>
                <li>Conduct groundbreaking research to improve medical treatments and outcomes.</li>
                <li>Educate and inspire the next generation of medical professionals.</li>
            </ul>
            
            <h3>Services Offered</h3>
            <p>Grey Sloan Memorial Hospital offers a wide range of services including specialized departments, advanced medical technologies, patient-centered care, and research and innovation.</p>
            
            <h3>Our Team</h3>
            
        </div>-->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
