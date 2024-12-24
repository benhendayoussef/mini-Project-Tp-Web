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
    <h1>Our Client Review</h1>
    <div id="reviews">
        <div class="review">
            <div class="reviewer">
                <img src="Assets/1.png" alt="reviewer image"/>
            </div>
            <div class="ReviewContent">
                <h3>John Doe</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate nisi eveniet optio fuga quis, sunt deleniti at quidem quod iusto?</p>
            </div>
        </div>
        <div class="review">
            <div class="reviewer">
                <img src="Assets/2.png" alt="reviewer image"/>
            </div>
            <div class="ReviewContent">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero atque nemo similique! Cumque blanditiis consectetur dolorum possimus quasi rerum maiores!</p>
            </div>
        </div>
        <div class="review">
            <div class="reviewer">
                <img src="Assets/3.png" alt="reviewer image"/>
            </div>
            <div class="ReviewContent">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In quibusdam alias rerum provident similique nam expedita obcaecati nobis corrupti numquam.</p>
            </div>
        </div>
        <div class="review">
            <div class="reviewer">
                <img src="Assets/4.png" alt="reviewer image"/>
            </div>
            <div class="ReviewContent">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In quibusdam alias rerum provident similique nam expedita obcaecati nobis corrupti numquam.</p>
            </div>
        </div>
    </div>
</section>
HTML;

$additionalStyles = [ "Styles/Index.css","Styles/Navbar.css"];
$additionalScripts = ["Code/Navbar.js"];

include __DIR__ . '/../app/views/layout.php';


?>