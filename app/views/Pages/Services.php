<?php
$title = "Services";
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
            <h2>Our Services</h2>
            <p>Welcome to our pet care services! We offer a range of specialized services to ensure your furry friends receive the best care possible. From comprehensive dog and cat visits to refreshing pet baths and stylish pet cuts, our dedicated team is here to keep your pets happy, healthy, and looking their best. Trust us to provide the love and attention your pets deserve</p>
        </div>
    </section>

    <section >
        <h2>Services Prices</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price en <select id="devise" name="devise" onchange="convert()">
                    <option value="Dt">DT</option>
                    <option value="$">$</option>
                    <option value="€">€</option>
                    <option value="£">£</option>
                  </select>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dog Pet Visit</td>
                <td>Ensure your dog gets the best care with our comprehensive dog visit services</td>
                <td><p class="price">TND  99  د.ت</p></td>
            </tr>
            <tr>
                <td>Cat Pet Visit</td>
                <td>Keep your cat happy and healthy with our dedicated cat visit services</td>
                <td><p class="price">TND  90.5  د.ت</p></td>
            </tr>
            <tr>
                <td>Pet Bath</td>
                <td>Treat your pet to a refreshing bath, leaving them clean and smelling great</td>
                <td><p class="price">TND  84  د.ت</p></td>
            </tr>
            <tr>
                <td>Pet Grooming</td>
                <td>Give your pet a stylish new look with our professional pet grooming services</td>
                <td><p class="price">TND  113  د.ت</p></td>
            </tr>
        </tbody>
    </table>
    </section>
HTML;

$additionalStyles = ["../../../public/Styles/Pages.css"];
$additionalScripts = ["../../../public/Code/NavBar.js"];
$additionalScripts = ["../../../public/Code/Converter.js"];

include __DIR__ . '/../layout.php';
?>

