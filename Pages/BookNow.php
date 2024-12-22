<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="../Styles/NavBar.css">
    <link rel="stylesheet" href="../Styles/Pages.css">
    <link rel="icon" href="../Assets/pets_logo.png" type="image/png">  <!-- Favicon -->

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
                <a href="../Pages/BookNow.html" class="nav-link animals-link active">Book Now</a>
            </nav>
        </div>
        
        <div class="nav-buttons">
            <button class="btn sign-in" onclick="window.location.href='Login.html';">Sign In</button>
            <button class="btn sign-up">Sign Up</button>
        </div>
    </header>
<main>
    <section>
        <h1>Veterinary Doctor's Working Hours</h1>
        <table id="WorkingHoursTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Day</th>
                    <th>Opening Time</th>
                    <th>Closing Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>30/10/2024</td>
                    <td>Monday</td>
                    <td>09:00 AM</td>
                    <td>05:00 PM</td>
                </tr>
                <tr>
                    <td>31/10/2024</td>
                    <td>Tuesday</td>
                    <td>09:00 AM</td>
                    <td>05:00 PM</td>
                </tr>
                <tr>
                    <td>01/11/2024</td>
                    <td>Wednesday</td>
                    <td>09:00 AM</td>
                    <td>05:00 PM</td>
                </tr>
                <tr>
                    <td>02/11/2024</td>
                    <td>Thursday</td>
                    <td>09:00 AM</td>
                    <td>05:00 PM</td>
                </tr>
                <tr>
                    <td>03/11/2024</td>
                    <td>Friday</td>
                    <td>09:00 AM</td>
                    <td>03:00 PM</td>
                </tr>
                <tr>
                    <td>04/11/2024</td>
                    <td>Saturday</td>
                    <td>10:00 AM</td>
                    <td>02:00 PM</td>
                </tr>
                <tr>
                    <td>05/11/2024</td>
                    <td>Sunday</td>
                    <td>Closed</td>
                    <td>Closed</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section>
        <div id="AppointementForm">
            <h2>Make an appointment</h2>
            <p>The administrator will contact you shortly to confirm the time and day of consultation.</p>

            <form id="bookingForm" novalidate><!-- novalidate to prevent default HTML5 validation  so we can work on it manually-->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    <span id="nameError" class="error-message" style="display:none; color: red;">Name is required.</span>
                    <span id="nameIcon" class="validation-icon" style="display:none;">✔</span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <span id="emailError" class="error-message" style="display:none; color: red;">Please enter a valid email.</span>
                    <span id="emailIcon" class="validation-icon" style="display:none;">✔</span>
                </div>

                <div class="form-group">
                    <label for="bookingType">Booking Type</label>
                    <select name="bookingType" id="bookingType" required>
                        <option value="" disabled selected>Select Booking Type</option>
                        <option value="checkup">Checkup</option>
                        <option value="grooming">Grooming</option>
                        <option value="vaccination">Vaccination</option>
                        <option value="other">Other</option>
                    </select>
                    <span id="bookingTypeError" class="error-message" style="display:none; color: red;">Please select a booking type.</span>
                    <span id="bookingTypeIcon" class="validation-icon" style="display:none;">✔</span>
                </div>

                <div class="form-group">
                    <label for="reason">Reason/Description</label>
                    <textarea id="reason" name="reason" required></textarea>
                    <span id="reasonError" class="error-message" style="display:none; color: red;">Please provide a reason or description.</span>
                    <span id="reasonIcon" class="validation-icon" style="display:none;">✔</span>
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">By clicking the “Enter” button, you accept the terms of personal data processing</label>
                    <span id="termsError" class="error-message" style="display:none; color: red;">Please accept the terms.</span>
                </div>
                <p id="Message"></p>

                <button type="submit">Book now</button>
            </form>
        </div>

    </section>

    <section>
        <div  id="AppointementsTableDiv">
            <h1>Appointements Table</h1>
            <table id="AppointementsTable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Booking Type</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
            </table>
        </div>
    </section>
</main>

<script src="../Code/BookNow.js"></script>
</body>
</html>