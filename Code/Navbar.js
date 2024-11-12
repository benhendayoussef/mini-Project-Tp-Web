document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-link');




    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        menu.classList.toggle('active');
        document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : 'auto';
    });



    document.addEventListener('click', function(e) {
        if (!menu.contains(e.target) && !hamburger.contains(e.target) && menu.classList.contains('active')) {
            hamburger.classList.remove('active');
            menu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });


    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;

        // Add shadow when scrolled
        if (currentScroll > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        lastScroll = currentScroll;
    });



});
document.addEventListener('DOMContentLoaded', function() {
    const siteLogo = document.getElementById('site-logo');
    console.log(siteLogo); // This should log the element or null
    if (siteLogo) {
        siteLogo.addEventListener('click', function() {
            window.location.href = '../index.html';
        });
    }
});


