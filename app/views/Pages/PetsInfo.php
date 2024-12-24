<?php
$title = "Pets Info";  // Page title
$content = <<<HTML
<section class="main-container">
    <div class="Images">
        <div class="image-wrapper">
            <img src="../../../public/Assets/cat1.png" alt="cat image"/>
            <div class="corner corner-tl"></div>
            <div class="corner corner-tr"></div>
            <div class="corner corner-bl"></div>
            <div class="corner corner-br"></div>
        </div>
        <div class="image-wrapper">
            <img src="../../../public/Assets/dog1.png" alt="dog image"/>
            <div class="corner corner-tl"></div>
            <div class="corner corner-tr"></div>
            <div class="corner corner-bl"></div>
            <div class="corner corner-br"></div>
        </div>
    </div>
    <div class="top-content">
        <h2>About Our Pets</h2>
        <p>Welcome to our pet information page! Here you'll find details on some of our beloved animals. Learn about their unique characteristics, needs, and personalities. We’re dedicated to providing all the care they need to be happy and healthy.</p>
    </div>

    <section>
        <h2>Pet Informations</h2>
        <table>
            <thead>
                <tr>
                    <th>Pet Name</th>
                    <th>Description</th>
                    <th>Breed</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Whiskers</td>
                    <td>A playful and curious cat who loves to explore.</td>
                    <td>Siberian</td>
                    <td>3 years</td>
                </tr>
                <tr>
                    <td>Buddy</td>
                    <td>A loyal and friendly dog who enjoys outdoor activities.</td>
                    <td>Golden Retriever</td>
                    <td>5 years</td>
                </tr>
                <tr>
                    <td>Peanut</td>
                    <td>A small, energetic cat with a big personality.</td>
                    <td>British Shorthair</td>
                    <td>2 years</td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>A strong and protective dog, loves running and hiking.</td>
                    <td>German Shepherd</td>
                    <td>4 years</td>
                </tr>
            </tbody>
        </table>
    </section>
</section>
HTML;

$additionalStyles = ["../../../public/Styles/Pages.css"];

include __DIR__ . '/../layout.php';
?>
