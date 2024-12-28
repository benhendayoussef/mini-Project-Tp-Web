<?php
$title = "Login";
$content = <<<HTML
<link rel="stylesheet" href="/mini-Project-Tp-Web/public/Styles/pages.css">
<section class="main-container">
    <div id="AppointementForm">
        <h2>Log in</h2>
        <p>The administrator will contact you shortly to confirm the time and day of consultation.</p>

        <form id="LoginForm"  action="/mini-Project-Tp-Web/app/controllers/UserController.php?action=login" method="POST">
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

include __DIR__ . '/../layout.php';

?>
<?= 
        $error ? "<p class='error'>$error</p>" : "" ?>
