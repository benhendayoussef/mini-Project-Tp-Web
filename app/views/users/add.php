<?php
$title = "Register";
$content = <<<HTML
<section class="main-container">
    <div id="AppointementForm">
        <h2>Register</h2>
        <p>The administrator will contact you shortly to confirm the time and day of consultation.</p>

        <form id="LoginForm" action="/mini-Project-Tp-Web/app/controllers/UserController.php?action=register" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <p id="Message"></p>

            <button type="submit">Register</button>
        </form>
        <img id="pawImage1" class="paws" src="../../../public/Assets/paw.png" alt="paw image"/>
        <img id="pawImage2" class="paws" src="../../../public/Assets/paw2.png" alt="paw image"/>
    </div>
</section>
HTML;

$additionalStyles = ["../../../public/Styles/Pages.css"];

include __DIR__ . '/../layout.php';
?>