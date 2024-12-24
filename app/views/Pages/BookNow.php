<?php
$title = "Book Now";
$content = <<<HTML
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
HTML;

$additionalStyles = ["../../../public/Styles/Pages.css"];
$additionalScripts = ["../../../public/Code/BookNow.js"];

include __DIR__ . '/../layout.php';
?>
