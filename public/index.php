<?php
$title = "Home";
$content = <<<HTML

<section> 
    <div id="title"> 
        <h1>Find Your Best Pets Care Center</h1> 
        <p>You are welcome to our pet care center</p> 
        <div class="Horisontal"> 
            <button class="button" role="button">Get Started Now</button> 
            <button class="button" role="button">About us</button> 
        </div> 
    </div> 
    <div class="Images"> 
        <div class="image-wrapper"> 
            <img src="Assets/cat1.png" alt="cat image"/> 
            <div class="corner corner-tl"></div> 
            <div class="corner corner-tr"></div> 
            <div class="corner corner-bl"></div> 
            <div class="corner corner-br"></div> 
        </div> 
        <div class="image-wrapper"> 
            <img src="Assets/cat2.png" alt="cat image"/> 
            <div class="corner corner-tl"></div> 
            <div class="corner corner-tr"></div> 
            <div class="corner corner-bl"></div> 
            <div class="corner corner-br"></div> 
        </div> 
        <div class="image-wrapper"> 
            <img src="Assets/dog1.png" alt="dog image"/> 
            <div class="corner corner-tl"></div> 
            <div class="corner corner-tr"></div> 
            <div class="corner corner-bl"></div> 
            <div class="corner corner-br"></div> 
        </div> 
        <div class="image-wrapper"> 
            <img src="Assets/rabbit1.png" alt="rabbit image"/> 
            <div class="corner corner-tl"></div> 
            <div class="corner corner-tr"></div> 
            <div class="corner corner-bl"></div> 
            <div class="corner corner-br"></div> 
        </div> 
    </div> 
</section> 

<section> 
    <h1>Our Client Reviews</h1> 
    <div id="reviews"> 
        <div class="review"> 
            <div class="reviewer"> 
                <img src="Assets/1.png" alt="reviewer image"/> 
            </div> 
            <div class="ReviewContent"> 
                <h3>Emily Carter</h3> 
                <p>The care my cat received here was exceptional. The staff was kind and attentive, and the facilities were spotless. I highly recommend this center for any pet owner!</p> 
            </div> 
        </div> 

        <div class="review"> 
            <div class="reviewer"> 
                <img src="Assets/2.png" alt="reviewer image"/> 
            </div> 
            <div class="ReviewContent"> 
                <h3>Michael Johnson</h3> 
                <p>Our dog Max had the best grooming experience here. He looked so happy and well taken care of when we picked him up. Great service all around!</p> 
            </div> 
        </div> 

        <div class="review"> 
            <div class="reviewer"> 
                <img src="Assets/3.png" alt="reviewer image"/> 
            </div> 
            <div class="ReviewContent"> 
                <h3>Sarah Lee</h3> 
                <p>This pet care center is amazing! My rabbit Fluffy was handled with so much care and love. The team truly understands and loves animals.</p> 
            </div> 
        </div> 

        <div class="review"> 
            <div class="reviewer"> 
                <img src="Assets/4.png" alt="reviewer image"/> 
            </div> 
            <div class="ReviewContent"> 
                <h3>David Wilson</h3> 
                <p>I’ve never felt more comfortable leaving my pets anywhere else. The team here is professional, caring, and always goes above and beyond. Highly recommend!</p> 
            </div> 
        </div> 
    </div> 
</section> 

HTML;

$additionalStyles = ["Styles/Pages.css", "Styles/Index.css", "Styles/Navbar.css"]; 
$additionalScripts = ["Code/Navbar.js"];

include __DIR__ . '/../app/views/layout.php';
?>
