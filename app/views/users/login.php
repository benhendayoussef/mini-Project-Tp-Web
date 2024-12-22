<?php
$title = "Login";
$content = <<<HTML
<section class="main-container">
    <div id="AppointementForm">
        <h2>Log in</h2>
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

            <button type="submit">Login</button>
        </form>
        <img id="pawImage1" class="paws" src="../../../public/Assets/paw.png" alt="paw image"/>
        <img id="pawImage2" class="paws" src="../../../public/Assets/paw2.png" alt="paw image"/>
    </div>
</section>
HTML;

$additionalStyles = ["../../../public/Styles/Pages.css"];
$additionalScripts = ["../../../public/Code/Login.js"];

include __DIR__ . '/../layout.php';
