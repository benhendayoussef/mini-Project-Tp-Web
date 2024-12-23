<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetsInfo</title>
    <link rel="stylesheet" href="../Styles/NavBar.css">
    <link rel="stylesheet" href="../Styles/Pages.css">

</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="../Assets/pets_logo.png" alt="Site Logo"  onclick="window.location.href='../index.html';">
        </div>
        
        <img class="hamburger" src="../Assets/hamburger.png"/>
        <div class="menu">
            <nav class="nav-links">
                <a href="../index.html" class="nav-link home-link">Home</a>
                <a href="../Pages/PetsInfo.html" class="nav-link veterinary-link">Pets Info</a>
                <a href="../Pages/Services.html" class="nav-link contact-link">Services</a>
                <a href="../Pages/BookNow.html" class="nav-link animals-link">Book Now</a>
            </nav>
        </div>
        <div>
            
        </div>
        
    </header>

<main>
    <section class="main-container">
        
        <div id="AppointementForm">
            <h2>Make an appointment</h2>
            <p>The administrator will contact you shortly to confirm the time and day of consultation.</p>
    
            <form id="LoginForm">
                <div class="form-group">
                    <label for="userName">Name</label>
                    <input type="text" id="userName" name="userName" required>
                </div>
    
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <p id="Message"></p>
    
                <button type="submit">Book now</button>
            </form>
            <img id="pawImage1" class="paws" src="../Assets/paw.png" alt="paw image"/>
            <img id="pawImage2" class="paws" src="../Assets/paw2.png" alt="paw image"/>
    
        </div>
    </section>
    </section>
</main>

<script src="../Code/Navbar.js"></script>
<script src="../Code/Login.js"></script>
</body>
</html>