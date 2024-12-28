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

    <h2 style="text-align: center; margin-bottom: 16px; color: #4a235a; margin-top:40px">Add Item</h2>
    <div class="addItem" name="addItem" style="max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color:rgba(204, 137, 237, 0.19); font-family: Arial, sans-serif;">
    <form id="addItemForm" action="/mini-Project-Tp-Web/app/controllers/ItemController.php?action=add" method="POST">
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px; color: #111;">Name</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="price" style="display: block; font-weight: bold; margin-bottom: 5px; color: #111;">Price</label>
            <input type="number" id="price" name="price" min="0" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div  style="text-align: center;">
        <p id="Message" style="color: red; text-align: center;"></p>
        <button type="submit" style="margin:0 auto; width: 80%; padding: 10px; background-color:rgb(95, 5, 93); color: #fff; border: none; border-radius: 8px; font-weight: bold; cursor: pointer;">Add Item</button>
        </div>
    </form>
</div>
</div>

    </section>
HTML;

$additionalStyles = ["../../../public/Styles/Pages.css"];
$additionalScripts = ["../../../public/Code/NavBar.js","../../../public/Code/Converter.js"];

include __DIR__ . '/../layout.php';
include __DIR__ . '/list.php';
?>



<!--we did the delete Item function in the Service Page-->
